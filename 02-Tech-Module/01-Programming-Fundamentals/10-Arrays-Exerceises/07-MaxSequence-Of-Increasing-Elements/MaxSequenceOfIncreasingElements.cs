using System;
using System.Linq;

class MaxSequenceOfIncreasingElements
{
    static void Main()
    {
        int[] nums = Console.ReadLine().Split().Select(int.Parse).ToArray();

        int start = 0;
        int lenght = 1;
        int bestStart = 0;
        int bestLenght = 1;

        for (int i = 1; i < nums.Length; i++)
        {
            if (nums[i] > (nums[i - 1]))
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

        for (int i = bestStart; i < bestStart + bestLenght; i++)
        {
            Console.Write(nums[i] + " ");
        }
        Console.WriteLine();
    }
}
