using System;
using System.Collections.Generic;
using System.Linq;

class SumReversedNumbers
{
    static void Main()
    {
        List<char> text = Console.ReadLine().ToList();

        text.Reverse();
        string forSum = "";
        foreach (var item in text)
        {
            forSum += item.ToString();
        }
        List<int> numbers = forSum.Split().Select(int.Parse).ToList();
        int sum = 0;

        for (int i = 0; i < numbers.Count; i++)
        {
            sum += numbers[i];
        }
        Console.WriteLine($"{sum}");
    }
}
