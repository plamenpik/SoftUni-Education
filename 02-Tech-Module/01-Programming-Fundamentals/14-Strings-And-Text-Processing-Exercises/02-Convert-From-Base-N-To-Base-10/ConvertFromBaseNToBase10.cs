using System;
using System.Linq;
using System.Numerics;
using System.Text;

class ConvertFromBaseNToBase10
{
    static void Main()
    {
        string[] input = Console.ReadLine().Split();
        int @base = int.Parse(input[0]);
        char[] number = input[1].Reverse().ToArray();

        BigInteger totalSum = 0;

        for (int i = number.Length -1; i >= 0; i--)
        {
            BigInteger sum = int.Parse(number[i].ToString()) * BigInteger.Pow(@base, i);
            totalSum += sum;
        }
        Console.WriteLine(totalSum);
    }
}
