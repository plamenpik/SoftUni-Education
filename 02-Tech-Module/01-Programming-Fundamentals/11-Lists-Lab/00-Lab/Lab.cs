using System;
using System.Collections.Generic;
using System.Linq;

class Lab
{
    static void Main()
    {
        List<int> numbers = new List<int>();
        numbers.Add(5);
        numbers.Add(10);
        numbers.Add(15);
        Console.WriteLine(string.Join(" ", numbers));
        foreach (var item in numbers)
        {
            Console.WriteLine(item + 1);
        }
    }
}
