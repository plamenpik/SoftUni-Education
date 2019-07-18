using System;

class DrawAFilledSquare
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());

        PrintDashes(n);
        PrintMiddleRow(n);
        PrintDashes(n);
    }

    static void PrintDashes(int n)
    {
        Console.WriteLine(new string('-', n * 2));
    }

    static void PrintMiddleRow(int n)
    {
        for (int i = 0; i < n - 2; i++)
        {
            Console.WriteLine("-{0}-", NewString("\\/", n - 1));
        }
    }

    static string NewString(string symbol, int count)
    {
        string result = "";

        for (int i = 0; i < count; i++)
        {
            result += symbol;
        }
        return result;
    }
}
