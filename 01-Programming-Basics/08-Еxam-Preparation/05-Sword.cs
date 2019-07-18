using System;

class Sword
{
    static void Main() 
    {
        int n = int.Parse(Console.ReadLine());

        int hashtag = n - 2;
        int space = 3;

        Console.WriteLine("{0}/^\\{0}", new string('#', (2 * n - 2) / 2));

        for (int i = 0; i < n / 2; i++)
        {
            Console.WriteLine("{0}.{1}.{0}", new string('#', hashtag), new string(' ', space));
            hashtag--;
            space += 2;
        }

        int newSpace = (space - 3) / 2;

        Console.WriteLine("{0}|{1}S{1}|{0}", new string('#', (n - 1) / 2), new string(' ', newSpace));
        Console.WriteLine("{0}|{1}O{1}|{0}", new string('#', (n - 1) / 2), new string(' ', newSpace));
        Console.WriteLine("{0}|{1}F{1}|{0}", new string('#', (n - 1) / 2), new string(' ', newSpace));
        Console.WriteLine("{0}|{1}T{1}|{0}", new string('#', (n - 1) / 2), new string(' ', newSpace));

        for (int i = 0; i < n - 4; i++)
        {
            Console.WriteLine("{0}|{1}|{0}", new string('#', (n - 1) / 2), new string(' ', newSpace * 2 + 1));
        }
        if (n == 4)
        {
            Console.WriteLine("{0}|{1}|{0}", new string('#', (n - 1) / 2), new string(' ', newSpace * 2 + 1));
        }

        Console.WriteLine("{0}|{1}U{1}|{0}", new string('#', (n - 1) / 2), new string(' ', newSpace));
        Console.WriteLine("{0}|{1}N{1}|{0}", new string('#', (n - 1) / 2), new string(' ', newSpace));
        Console.WriteLine("{0}|{1}I{1}|{0}", new string('#', (n - 1) / 2), new string(' ', newSpace));
        Console.WriteLine("@{0}@", new string('=', 2 * n - 1));

        int bottomSpace = 2 * n + 1 - (((n + 3) / 2) * 2 + 2);

        for (int i = 0; i < n / 2; i++)
        {
            Console.WriteLine("{0}|{1}|{0}", new string('#', (n + 3) / 2), new string(' ', bottomSpace));
        }
        Console.WriteLine("{0}\\{1}/{0}", new string('#', (n + 3) / 2), new string('.', bottomSpace));
    }
}