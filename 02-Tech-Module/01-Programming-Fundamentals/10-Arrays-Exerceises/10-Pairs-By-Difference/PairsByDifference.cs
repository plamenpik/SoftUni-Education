using System;
using System.Linq;

class PairsByDifference
{
    static void Main()
    {
        int[] nums = Console.ReadLine().Split().Select(int.Parse).ToArray();
        int diff = int.Parse(Console.ReadLine());

        int counter = 0;
        for (int i = 0; i < nums.Length; i++)
        {
            for (int j = i + 1; j < nums.Length; j++)
            {
                if (Math.Abs(nums[i] - nums[j]) == diff)
                {
                    counter++;
                }
            }
        }
        Console.WriteLine(counter);
    }
}