using System;

class SumNumbers
{
    static void Main()
    {
        int n =int.Parse(Console.ReadLine());
        int sum = 0;
        if (n != 0)
        {
            for (int i = 1; i <= n; i++)
            {
                int num = int.Parse(Console.ReadLine());
                sum += num;
            }
            Console.WriteLine(sum);
        }
        else
        {
            Console.WriteLine(sum);
        }
    }
} 