using System;
using System.Linq;
using System.Numerics;

class ArrayStatistics
{
    static void Main()
    {
        int[] arr = Console.ReadLine().Split().Select(x => int.Parse(x)).ToArray();

        int min = int.MaxValue;
        int max = int.MinValue;
        int sum = 0;

        for (int i = 0; i < arr.Length; i++)
        {
            sum += arr[i];
            if (arr[i] < min)
            {
                min = arr[i];
            }
            if (arr[i] > max)
            {
                max = arr[i];
            }

        }

        double avarage = (double)sum / (double)arr.Length;

        Console.WriteLine($"Min = {min}");
        Console.WriteLine($"Max = {max}");
        Console.WriteLine($"Sum = {sum}");
        Console.WriteLine($"Average = {avarage}");
    }
}
