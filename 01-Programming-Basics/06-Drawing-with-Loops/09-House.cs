using System;

class House
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());
        int stars = 0;
        if (n % 2 == 0)
        {
            stars = 2;
        }
        else
        {
            stars = 1;
        }
        int lines = (n - stars) / 2;
        Console.Write(new string('-', lines));
        Console.Write(new string('*', stars));
        Console.WriteLine(new string('-', lines));
        for (int row = 1; row < (n + 1) / 2; row++)
        {
            stars = stars + 2;
            lines = lines - 1;
            Console.Write(new string('-', lines));
            Console.Write(new string('*', stars));
            Console.WriteLine(new string('-', lines));
        }
        for (int row = 1; row <= n / 2; row++)
        {
            Console.Write("|");
            Console.Write(new string('*', n - 2));
            Console.WriteLine("|");
        }
    }
}
