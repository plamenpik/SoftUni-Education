using System;

class ChristmasTree
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());
        Console.Write(new string(' ', n));
        Console.WriteLine(" | ");
        for (int row = 1; row <= n; row++)
        {
            Console.Write(new string (' ', n - row));
            Console.Write(new string ('*', row));
            Console.Write(" | ");
            Console.Write(new string('*', row));
            Console.WriteLine();
        }
    }
}
