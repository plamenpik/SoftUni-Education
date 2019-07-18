using System;
using System.Collections.Generic;
using System.Linq;

class MaxSequenceOfEqualElements
{
    static void Main()
    {
        List<int> numbers = Console.ReadLine().Split().Select(int.Parse).ToList();

        int counter = 1;
        int startIndex = 0;

        int bestLenght = 1;
        int bestStart = 0;

        for (int i = 1; i < numbers.Count; i++)
        {
            if (numbers[i - 1] == numbers[i])
            {
                counter++;

                if (counter > bestLenght)
                {
                    bestLenght = counter;
                    bestStart = startIndex;
                }
            }
            else
            {
                if (counter > bestLenght)
                {
                    bestLenght = counter;
                    bestStart = startIndex;
                }
                startIndex = i;
                counter = 1;
            }
        }
        for (int i = bestStart; i < bestLenght + bestStart; i++)
        {
            Console.Write($"{numbers[i]} ");
        }
        Console.WriteLine();

    }
}
