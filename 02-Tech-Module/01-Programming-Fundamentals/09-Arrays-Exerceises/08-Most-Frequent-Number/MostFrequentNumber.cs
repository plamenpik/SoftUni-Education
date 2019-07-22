using System;
using System.Linq;

class MostFrequentNumber
{
    static void Main()
    {
        int[] nums = Console.ReadLine().Split().Select(int.Parse).ToArray();

        int[] counter = new int[65536];

        foreach (int num in nums)
        {
            counter[num]++;
        }

        int max = counter.Max();

        for (int i = 0; i < nums.Length; i++)
        {
            if (counter[nums[i]] == max)
            {
                Console.WriteLine(nums[i]);
                return;
            }
        }
    }
}
