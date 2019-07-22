using System;
using System.Collections.Generic;
using System.Linq;

class SumAdjacentEqualNumbers
{
    static void Main()
    {
        List<int> numbers = Console.ReadLine().Split().Select(int.Parse).ToList();

        bool isFound = false;
        int size = numbers.Count;

        for (int i = 0; i < size; i++)
        {
            if (numbers[i] == numbers[i + 1])
            {
                numbers[i] *= 2;
                numbers.Remove(numbers[i + 1]);
                isFound = true;
                if (isFound)
                {
                    i = 0;
                    size--;
                }
            }
            isFound = false;
        }
        Console.WriteLine();
    }
}
