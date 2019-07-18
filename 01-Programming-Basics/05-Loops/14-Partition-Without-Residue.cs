using System;

class DivideWithoutResidue
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());

        double p2 = 0.0;
        double p3 = 0.0;
        double p4 = 0.0;

        for (int i = 0; i < n; i++)
        {
            int num = int.Parse(Console.ReadLine());
            if (num % 2 == 0)
            {
                p2 += 1.0;
            }
            if (num % 3 == 0)
            {
                p3 += 1.0;
            }
            if (num % 4 == 0)
            {
                p4 += 1.0;
            }
        }
        Console.WriteLine($"{p2 / n * 100.0:F2}%");
        Console.WriteLine($"{p3 / n * 100.0:F2}%");
        Console.WriteLine($"{p4 / n * 100.0:F2}%");
    }
}
