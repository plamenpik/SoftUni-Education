using System;

class SumOfOddNumbers
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());

        int sum = 0;
        int oddNumber = 1;

        for (int i = 0; i < n; i++)
        {
            Console.WriteLine(oddNumber);
            sum += oddNumber;
            oddNumber += 2;

        }
        Console.WriteLine($"Sum: {sum}");
    }
}
