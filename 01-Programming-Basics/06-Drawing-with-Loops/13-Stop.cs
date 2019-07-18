using System;

class Stop
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());

        int dots = n;
        int dash = 2 * n - 1;
        
        Console.WriteLine($"{new string ('.', n + 1)}{new string ('_', 2 * n + 1)}{new string('.', n + 1)}");
        
        for (int i = 1; i <= n; i++)
        {
            Console.Write(new string ('.', dots));
            Console.Write("//");
            Console.Write(new string ('_', dash));
            Console.Write("\\\\");
            Console.WriteLine(new string('.', dots));
            dots -= 1;
            dash += 2;
        }
        
        Console.Write("//");
        Console.Write(new string ('_', (dash - 5) / 2));
        Console.Write("STOP!");
        Console.Write(new string('_', (dash - 5) / 2));
        Console.WriteLine("\\\\");
        
        for (int i = n; i >= 1; i--)
        {
            Console.Write(new string('.', dots));
            Console.Write("\\\\");
            Console.Write(new string('_', dash));
            Console.Write("//");
            Console.WriteLine(new string('.', dots));
            dots += 1;
            dash -= 2;
        }
    }
}
