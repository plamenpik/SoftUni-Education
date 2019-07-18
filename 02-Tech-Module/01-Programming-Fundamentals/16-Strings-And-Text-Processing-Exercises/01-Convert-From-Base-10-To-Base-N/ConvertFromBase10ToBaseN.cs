using System;
using System.Linq;
using System.Numerics;
using System.Text;

class ConvertFromBase10ToBaseN
{
    static void Main()
    {
        BigInteger[] input = Console.ReadLine().Split().Select(BigInteger.Parse).ToArray();
        BigInteger @base = input[0];
        BigInteger number = input[1];

        StringBuilder sb = new StringBuilder();

        BigInteger remember = 0;

        while (number > 0)
        {
            remember = number % @base;
            sb.Append(remember);
            number /= @base;
        }
        Console.WriteLine(new string(sb.ToString().Reverse().ToArray()));
    }
}
