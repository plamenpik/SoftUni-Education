using System;

class DrawFort
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());
        int f = 0;
        if (n % 2 == 0)
        {
            f = n - 4;
        }
        else
        {
            f = n - 3;
        }

        Console.WriteLine($"/{new string('^', n / 2)}\\{new string('_', f)}/{new string('^', n / 2)}\\"); //Top
        if (n == 3) //Middle n = 3
        {
            for (int i = 0; i < (n - 2); i++)
            {
                Console.WriteLine('|' + (new string(' ', 2 * n - 2)) + '|');
            }
        }
        else //Middle n > 3
        {
            for (int i = 1; i < (n - 2); i++)
            {
                Console.WriteLine('|' + (new string(' ', 2 * n - 2)) + '|');
                if (i == (n - 3))
                {
                    Console.WriteLine('|' + (new string(' ', (n / 2 + 1))) + (new string('_', (f))) + (new string(' ', (n / 2 + 1))) + '|');
                }
            }
        }
        Console.WriteLine($"\\{new string('_', n / 2)}/{new string(' ', f)}\\{new string('_', n / 2)}/"); //Bottom

    }
}
