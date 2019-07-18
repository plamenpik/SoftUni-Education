using System;

class Mask
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());

        int width = (2 * n) + 2;
        int spaces = n - 2;
        int tilda = width - 2;

        for (int i = 0; i < n - 1; i++)
        {
            Console.WriteLine(new string (' ', spaces) + "/" + new string (' ', i) + "|  |" + new string (' ', i) + "\\");
            spaces -= 1;
        }

        Console.WriteLine(new string ('-', width));

        int rows = n / 2 + 5;
        for (int i = 1; i <= rows; i++)
        {
            if (i == 1)
            {
                Console.WriteLine("|" + new string(' ', n / 2 - 1) + "_" + new string(' ', n + 1) + "_" + new string(' ', n / 2 - 1) + "|");
            }
            else if (i == 2)
            {
                Console.WriteLine("|" + new string(' ', n / 2 - 1) + "@" + new string(' ', n + 1) + "@" + new string(' ', n / 2 - 1) + "|");
            }
            else if (i == rows - 2)
            {
                Console.WriteLine("|" + new string(' ', (width - 4) / 2) + "OO" + new string(' ', (width - 4) / 2) + "|");
            }
            else if (i == rows - 1)
            {
                Console.WriteLine("|" + new string(' ', (width - 6) / 2) + "/  \\" + new string(' ', (width - 6) / 2) + "|");
            }
            else if (i == rows)
            {
                Console.WriteLine("|" + new string(' ', (width - 6) / 2) + "||||" + new string(' ', (width - 6) / 2) + "|");
            }
            else
            {
                Console.WriteLine("|" + new string(' ', tilda) + "|");
            }
        }

        for (int i = 1; i <= n + 1; i++)
        {
            Console.WriteLine(new string ('\\', i) + new string ('`', tilda) + new string('/', i));
            tilda -= 2;
        }
    }
}
