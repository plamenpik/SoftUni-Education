using System;

class TriangleOfDollars
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());
        for (int i = 1; i <= n; i++)
        {
            Console.Write("$");
            for (int j = 1; j <= i - 1; j++)
            {
                Console.Write(" $");
            }
            Console.WriteLine();
        }
    }
}
