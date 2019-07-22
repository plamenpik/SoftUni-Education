using System;
using System.Collections.Generic;
using System.Linq;

class OddOccurrences
{
    static void Main()
    {
        var helper = new List<string>();
        var numbers = new Dictionary<string, int>();

        var input = Console.ReadLine().ToLower().Split(' ').ToList();

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

        foreach (var kvp in numbers.Where(x => x.Value %2 == 1))
        {
            helper.Add(kvp.Key);
        }
        Console.WriteLine(string.Join(", ", helper));
    }
}