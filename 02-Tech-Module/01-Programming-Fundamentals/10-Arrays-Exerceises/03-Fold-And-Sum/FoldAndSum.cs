using System;
using System.Linq;

class FoldAndSum
{
    static void Main()
    {
        int[] arr = Console.ReadLine().Split().Select(int.Parse).ToArray();

        int k = arr.Length / 4;
        int[] left = new int[k];
        int[] middle = new int[2 * k];
        int[] right = new int[k];

        for (int i = 0; i < k; i++)
        {
            left[i] = arr[i];
            right[i] = arr[arr.Length - 1 - i];
        }
        for (int i = k; i < arr.Length - k; i++)
        {
            middle[i - k] = arr[i];
        }
        Array.Reverse(left);

        int[] merged = new int[middle.Length];
        for (int i = 0; i < k; i++)
        {
            merged[i] = left[i];
            merged[merged.Length - i - 1] = right[right.Length - 1 - i];
        }
        int[] sum = new int[merged.Length];
        for (int i = 0; i < merged.Length; i++)
        {
            sum[i] = middle[i] + merged[i];
        }
        Console.WriteLine(string.Join(" ", sum));
    }
}
