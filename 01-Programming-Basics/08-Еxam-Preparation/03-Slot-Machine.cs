using System;

class Coins
{
    static void Main()
    {
        char n = char.Parse(Console.ReadLine());
        int n1 = int.Parse(Console.ReadLine());
        char m = char.Parse(Console.ReadLine());
        int m1 = int.Parse(Console.ReadLine());
        char k = char.Parse(Console.ReadLine());
        int k1 = int.Parse(Console.ReadLine());

        int a = n + n1;
        int b = m + m1;
        int c = k + k1;

        Console.Write((char)a);
        Console.Write((char)b);
        Console.WriteLine((char)c);

        if ((char)a == '@' && (char)b == '@' && (char)c == '@')
        {
            Console.WriteLine("!!! YOU LOSE EVERYTHING !!!");
        }
        else if ((char)a == '7' && (char)b == '7' && (char)c == '7')
        {
            Console.WriteLine("*** JACKPOT ***");
        }
    }
}