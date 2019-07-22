using System;
using System.Linq;

class SafeManipulation
{
    static void Main(string[] args)
    {
        string[] words = Console.ReadLine().Split();
        string[] comamnd = Console.ReadLine().Split();

        while (comamnd[0] != "END")
        {
            if ((comamnd[0] != "Distinct" || comamnd[0] != "Reverse" || comamnd[0] != "Replace") == false)
            {
                Console.WriteLine("Invalid input!");
            }
            if (comamnd[0] == "Distinct")
            {
                words = words.Distinct().ToArray();
            }
            if (comamnd[0] == "Reverse")
            {
                words = words.Reverse().ToArray();
            }
            if (comamnd[0] == "Replace")
            {
                if (int.Parse(comamnd[1]) < 0 || int.Parse(comamnd[1]) >= words.Length)
                {
                    Console.WriteLine("Invalid input!");
                }
                for (int j = 0; j < words.Length; j++)
                {
                    if (j == int.Parse(comamnd[1]))
                    {
                        words[j] = comamnd[2];
                    }
                }
            }
            comamnd = Console.ReadLine().Split();
        }
        Console.WriteLine(string.Join(", ", words));
    }
}