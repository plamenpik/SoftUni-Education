using System;

class SumDigits
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());
        int sum = 0;

        while (n > 0)
        {
            int num = n % 10;
            n = n / 10;
            sum += num;
        }
        Console.WriteLine(sum);
    }
}
