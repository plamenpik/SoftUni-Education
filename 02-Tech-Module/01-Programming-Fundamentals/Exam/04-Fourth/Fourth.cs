using System;
using System.Collections.Generic;
using System.Linq;

class Fourth
{
    static void Main()
    {
        Dictionary<string, int> students = new Dictionary<string, int>();
        Dictionary<string, int> languages = new Dictionary<string, int>();

        while (true)
        {
            string[] comands = Console.ReadLine().Split('-');

            if (comands[0] == "exam finished")
            {
                break;
            }

            string student = comands[0];
            string language = comands[1];
            if (language == "banned")
            {
                students.Remove(student);
                continue;
            }
            int result = int.Parse(comands[2]);

            if (!students.ContainsKey(student))
            {
                students.Add(student, result);
            }
            else
            {
                if (students[student] < result )
                {
                    students[student] = result;
                }
            }

            if (!languages.ContainsKey(language))
            {
                languages.Add(language, 1);
            }
            else
            {
                languages[language]++;
            }
        }

        Console.WriteLine("Results:");
        foreach (var stud in students.OrderByDescending(x => x.Value).ThenBy(y => y.Key))
        {
            Console.WriteLine($"{stud.Key} | {stud.Value}");
        }

        Console.WriteLine("Submissions:");
        foreach (var lang in languages.OrderByDescending(x => x.Value).ThenBy(y => y.Key))
        {
            Console.WriteLine($"{lang.Key} - {lang.Value}");
        }
    }
}
