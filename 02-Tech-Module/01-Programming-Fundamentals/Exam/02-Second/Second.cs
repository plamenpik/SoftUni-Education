using System;
using System.Collections.Generic;
using System.Linq;

class Second
{
    static void Main()
    {
        List<string> program = Console.ReadLine().Split(", ").ToList();

        while (true)
        {
            string[] commands = Console.ReadLine().Split(':').ToArray();

            if (commands[0] == "course start")
            {
                break;
            }

            string command = commands[0];
            string course = commands[1];

            switch (command)
            {
                case "Add":
                    if (program.Contains(course) == false)
                    {
                        program.Add(course);
                    }
                    break;
                case "Insert":
                    int index = int.Parse(commands[2]);
                    if (!program.Contains(course) && (index >= 0 || index < program.Count))
                    {
                        program.Insert(index, course);
                    }
                    break;
                case "Exercise":
                    string pattern = string.Join("-", course, command);
                    if (program.Contains(course) == false)
                    {
                        program.Add(course);
                    }
                    if (program.Contains(course) && !program.Contains(pattern))
                    {
                        int courseIndex = program.IndexOf(course) + 1;
                        program.Insert(courseIndex, pattern);
                    }
                    break;
                case "Remove":
                    if (program.Contains(course))
                    {
                        program.Remove(course);
                    }
                    break;
                case "Swap":
                    string forSwap = commands[2];
                    if (program.Contains(course) && program.Contains(forSwap))
                    {
                        string coursePattern = $"{course}-Exercise";
                        string forSwapPattern = $"{forSwap}-Exercise";
                        int firstInex = program.IndexOf(course);
                        int secondIndex = program.IndexOf(forSwap);
                        program.Remove(course);
                        program.Remove(forSwap);
                        program.Insert(firstInex, forSwap);
                        program.Insert(secondIndex, course);
                        if (program.Contains(coursePattern))
                        {
                            program.Remove(coursePattern);
                            program.Insert(secondIndex + 1, coursePattern);
                        }
                        if (program.Contains(forSwapPattern))
                        {
                            program.Remove(forSwapPattern);
                            program.Insert(firstInex + 1, forSwapPattern);
                        }
                    }
                    break;
            }
        }
        for (int i = 0; i < program.Count; i++)
        {
            Console.WriteLine($"{i + 1}.{program[i]}");
        }
    }
}
