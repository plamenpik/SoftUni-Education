using System;

class HalfSumElement
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());
        int sum = 0;
        int maxNumber = int.MinValue;
        for (int i = 0; i < n; i++)
        {
            int number = int.Parse(Console.ReadLine());
            sum += number;
            if (number > maxNumber)
            {
                maxNumber = number;
            }
        }
        if ((sum - maxNumber) == maxNumber)
        {
            Console.WriteLine($"Yes Sum = {maxNumber}");
        }
        else
        {
            Console.WriteLine($"No Diff = {Math.Abs((sum - maxNumber) - maxNumber)}");
        }
    }
}
