using System;
using System.Collections.Generic;
using System.Linq;

class AppendLists
{
    static void Main()
    {
        List<int> result = new List<int>();

        string[] input = Console.ReadLine().Split('|', StringSplitOptions.RemoveEmptyEntries);
        Array.Reverse(input);
        List<int> temp = new List<int>();
        foreach (string item in input)
        {
            temp = item.Split(' ', StringSplitOptions.RemoveEmptyEntries).Select(int.Parse).ToList();
            for (int i = 0; i < temp.Count; i++)
            {
                result.Add(temp[i]); 
            }
        }
        Console.WriteLine(string.Join(" ", result));
    }
}
