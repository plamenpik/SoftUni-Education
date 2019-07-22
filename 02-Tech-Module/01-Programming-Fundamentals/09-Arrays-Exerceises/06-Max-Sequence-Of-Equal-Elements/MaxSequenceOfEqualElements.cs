using System;
using System.Linq;

class MaxSequenceOfEqualElements
{
    static void Main()
    {
        int[] numbers = Console.ReadLine().Split().Select(int.Parse).ToArray();

        int start = 0;
        int lenght = 1;
        int bestStart = 0;
        int bestLenght = 1;

        for (int i = 1; i < numbers.Length; i++)
        {
            if (numbers[i] == numbers[i - 1])
            {
                lenght++;

                if (bestLenght < lenght)
                {
                    bestLenght = lenght;
                    bestStart = start;
                }
            }
            else
            {
                start = i;
                lenght = 1;
            }
            
        }

        for (int i = bestStart; i < bestLenght + bestStart; i++)
        {
            Console.Write(numbers[i] + " ");
        }
        Console.WriteLine();
    }
}
