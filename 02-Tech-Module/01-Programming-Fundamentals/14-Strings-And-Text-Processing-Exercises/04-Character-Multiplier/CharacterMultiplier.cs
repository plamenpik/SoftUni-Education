using System;

class CharacterMultiplier
{
    static void Main()
    {
        string[] input = Console.ReadLine().Split();

        string a = input[0];
        string b = input[1];

        long result = CharacterMultiplication(a, b);
        Console.WriteLine(result);
    }

    static long CharacterMultiplication(string a, string b)
    {
        int minLenght = Math.Min(a.Length, b.Length);
        int maxLenght = Math.Max(a.Length, b.Length);
        long sum = 0;

        for (int i = 0; i < minLenght; i++)
        {
            sum += a[i] * b[i];
            if (i == minLenght - 1)
            {
                for (int j = i + 1; j < maxLenght; j++)
                {
                    if (a.Length > b.Length)
                    {
                        sum += a[j];
                    }
                    else
                    {
                        sum += b[j];
                    }
                }
            }
        }
        return sum;
    }
}
