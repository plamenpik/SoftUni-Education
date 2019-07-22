using System;
using System.Linq;

class RotateAndSum
{
    static void Main()
    {
        int[] arr = Console.ReadLine().Split().Select(int.Parse).ToArray();
        int rotaions = int.Parse(Console.ReadLine());
        int[] sum = new int[arr.Length];

        for (int i = 0; i < rotaions; i++)
        {
            ShiftArray(arr);
            for (int j = 0; j < arr.Length; j++)
            {
                sum[j] += arr[j];
            }
        }
        Console.WriteLine(string.Join(" ", sum));
    }
    private static void ShiftArray(int[] arr)
    {
        int last = arr[arr.Length - 1];
        for (int i = arr.Length - 1; i > 0; i--)
        {
            arr[i] = arr[i - 1];
        }
        arr[0] = last;
    }
}
