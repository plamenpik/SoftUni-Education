using System;
using System.Collections.Generic;
using System.Linq;

class CountRealNumbers
{
    static void Main()
    {
        var numbers = new SortedDictionary<double, int>();
        var input = Console.ReadLine().Split(' ').Select(double.Parse).ToList();

        for (int i = 0; i < input.Count; i++)
        {
            if (!numbers.ContainsKey(input[i]))
            {
                numbers[input[i]] = 1;
            }
            else
            {
                numbers[input[i]]++;
            }
        }
        
        foreach (var kvp in numbers)
        {
            Console.WriteLine($"{kvp.Key} -> {kvp.Value}");
        }
    }
}
