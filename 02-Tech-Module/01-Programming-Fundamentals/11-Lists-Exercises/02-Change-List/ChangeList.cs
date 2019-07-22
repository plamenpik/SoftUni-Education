using System;
using System.Collections.Generic;
using System.Linq;

class ChangeList
{
    static void Main(string[] args)
    {
        List<int> numbers = Console.ReadLine().Split().Select(int.Parse).ToList();

        string commands = Console.ReadLine();

        while (!(commands == "Odd" || commands == "Even"))
        {
            List<string> command = commands.Split().ToList();
            if (command[0] == "Delete")
            {
                int num = int.Parse(command[1]);
                for (int i = 0; i < numbers.Count; i++)
                {
                    if (numbers[i] == num)
                    {
                        numbers.Remove(num);
                        i--;
                    }
                }
            }
            else if (command[0] == "Insert")
            {
                int num = int.Parse(command[1]);
                int pos = int.Parse(command[2]);
                numbers.Insert(pos, num);
            }
            commands = Console.ReadLine();
        }
        for (int i = 0; i < numbers.Count; i++)
        {
            if (commands == "Even")
            {
                if (numbers[i] % 2 == 0)
                {
                    Console.Write(numbers[i] + " ");
                }
            }
            else
            {
                if (numbers[i] % 2 != 0)
                {
                    Console.Write(numbers[i] + " ");
                }
            }
        }
        Console.WriteLine();
    }
}
