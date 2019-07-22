using System;

class ExactSumOfRealNumbers
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());
        decimal sum = 0m;

        for (int i = 0; i < n; i++)
        {
            decimal imput = decimal.Parse(Console.ReadLine());
            sum += imput;
        }
        Console.WriteLine(sum);
    }
}
