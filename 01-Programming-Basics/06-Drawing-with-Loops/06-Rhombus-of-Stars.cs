using System;

class RhombusOfStars
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());

        for (int row = 1; row <= n; row++)
        {
            Console.Write(new string(' ', n - row));
            Console.Write("*");
            for (int i = 1; i <= row - 1; i++)
            {
                Console.Write(" *");
            }
            Console.WriteLine();
        }
        for (int row = n - 1; row >= 1; row--)
        {
            Console.Write(new string(' ', n - row));
            Console.Write("*");
            for (int i = row - 1; i >= 1 ; i--)
            {
                Console.Write(" *");
            }
            Console.WriteLine();
        }
    }
}
