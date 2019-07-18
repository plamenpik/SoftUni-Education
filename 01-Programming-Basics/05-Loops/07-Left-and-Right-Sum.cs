using System;

class LeftAndRightSum
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());
        int Lsum = 0;
        int Rsum = 0;
        for (int i = 1; i <= n; i++)
        {
            int num1 = int.Parse(Console.ReadLine());
            Lsum += num1;
        }
        for (int f = 1; f <= n; f++)
        {
            int num2 = int.Parse(Console.ReadLine());
            Rsum += num2;
        }
        int abs = Math.Abs(Lsum - Rsum);
        if (abs == 0)
        {
            Console.WriteLine("Yes, sum = " + Lsum);
        }
        else
            Console.WriteLine("No, diff = " + abs);
    }
}
 