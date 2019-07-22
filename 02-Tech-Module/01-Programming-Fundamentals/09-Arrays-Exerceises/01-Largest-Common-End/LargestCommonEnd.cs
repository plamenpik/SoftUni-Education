using System;

class LargestCommonEnd
{
    static void Main()
    {
        string[] firstArr = Console.ReadLine().Split();
        string[] secondArr = Console.ReadLine().Split();

        int leftCounter = 0;
        int rightCounter = 0;

        for (int i = 0; i < Math.Min(firstArr.Length, secondArr.Length); i++)
        {
            if (firstArr[i] == secondArr[i])
            {
                leftCounter++;
            }
            if (firstArr[firstArr.Length - i -1] == secondArr[secondArr.Length - i -1])
            {
                rightCounter++;
            }
        }
        int maxCounter = Math.Max(leftCounter, rightCounter);

        Console.WriteLine(maxCounter);
    }
}
