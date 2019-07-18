using System;

class OddEvenSum
{
    static void Main()
    {
        int oddSum = 0;
        int evenSum = 0;
        int n = int.Parse(Console.ReadLine());
            for (int i = 1; i <= n; i++)
            {
                int num1 = int.Parse(Console.ReadLine());
                if (i % 2 == 0)
                {
                    evenSum += num1;
                }
                else
                {
                    oddSum += num1;
                }
            }
        int diff = Math.Abs(evenSum - oddSum);
        if (evenSum == oddSum)
        {
            Console.WriteLine("Yes sum = {0}", evenSum);
        }
        else
        {
            Console.WriteLine("No Diff = {0}", diff);
        }
    }
}
