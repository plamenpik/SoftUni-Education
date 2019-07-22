using System;

class MultiplyEvensByOdds
{
    static void Main()
    {
        int number = Math.Abs(int.Parse(Console.ReadLine()));
        int sumEven = GetSumOfEvenGigits(number);
        int sumOdd = GetSumOfOddGigits(number);
        Console.WriteLine(sumEven * sumOdd);
    }

    static int GetSumOfEvenGigits(int number)
    {
        int sumEven = 0;

        while (number > 0)
        {
            int lastDigit = number % 10;
            if (lastDigit % 2 == 0)
            {
                sumEven += lastDigit;
            }
            number /= 10;
        }
        return sumEven;
    }

    static int GetSumOfOddGigits(int number)
    {
        int sumOdd = 0;

        while (number > 0)
        {
            int lastDigit = number % 10;
            if (lastDigit % 2 != 0)
            {
                sumOdd += lastDigit;
            }
            number /= 10;
        }
        return sumOdd;
    }
}
