using System;
using System.Linq;

class CompareCharArrays
{
    static void Main()
    {
        char[] first = Console.ReadLine().Split().Select(char.Parse).ToArray();
        char[] second = Console.ReadLine().Split().Select(char.Parse).ToArray();

        int minLenght = 0;

        if (first.Length >= second.Length)
        {
            minLenght = second.Length;
        }
        else
        {
            minLenght = first.Length;
        }

        for (int i = 0; i < minLenght; i++)
        {
            if (first[i] < second[i])
            {
                foreach (char symbol in first)
                {
                    Console.Write(symbol);
                }
                Console.WriteLine();

                foreach(char symbol in second)
                {
                    Console.Write(symbol);
                }
                Console.WriteLine();
                return;
            }
            else if (first[i] > second[i])
            {
                foreach (char symbol in second)
                {
                    Console.Write(symbol);
                }
                Console.WriteLine();
                
                foreach(char symbol in first)
                {
                    Console.Write(symbol);
                }
                Console.WriteLine();
                return;
            }
        }
        if (first.Length < second.Length)
        {
            Console.WriteLine(new string(first));
            Console.WriteLine(new string(second));
        }
        else
        {
            Console.WriteLine(new string(second));
            Console.WriteLine(new string(first));
        }
    }
}
