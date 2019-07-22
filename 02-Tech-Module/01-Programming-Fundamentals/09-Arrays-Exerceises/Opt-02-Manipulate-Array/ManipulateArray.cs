using System;
using System.Linq;

class ManipulateArray
{
    static void Main()
    {
        string[] words = Console.ReadLine().Split();
        int n = int.Parse(Console.ReadLine());

        for (int i = 0; i < n; i++)
        {
            string[] comamnd = Console.ReadLine().Split();

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
                for (int j = 0; j < words.Length; j++)
                {
                    if (j == int.Parse(comamnd[1]))
                    {
                        words[j] = comamnd[2];
                    }
                }
            }
        }
        Console.WriteLine(string.Join(", ", words));

    }
}
