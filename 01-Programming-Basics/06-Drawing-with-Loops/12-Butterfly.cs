using System;

class Butterfly
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());

        char symbol = '*';

        for (int i = 1; i <= n - 2; i++)
        {
            if (i % 2 == 0)
            {
                symbol = '-';
            }
            else
            {
                symbol = '*';
            }
            Console.Write(new string (symbol , n - 2));
            Console.Write("\\ /");
            Console.WriteLine(new string(symbol, n - 2));
        }
        Console.Write(new string (' ', n - 1));
        Console.WriteLine("@");
        for (int i = 1; i <= n - 2; i++)
        {
            if (i % 2 == 0)
            {
                symbol = '-';
            }
            else
            {
                symbol = '*';
            }
            Console.Write(new string(symbol, n - 2));
            Console.Write("/ \\");
            Console.WriteLine(new string(symbol, n - 2));
        }
    }
}
