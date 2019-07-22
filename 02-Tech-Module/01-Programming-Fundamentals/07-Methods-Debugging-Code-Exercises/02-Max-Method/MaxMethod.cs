using System;

class MaxMethod
{
    static void Main(string[] args)
    {
        int firstNum = int.Parse(Console.ReadLine());
        int secondNum = int.Parse(Console.ReadLine());
        int thirdNum = int.Parse(Console.ReadLine());

        int maxNum = Math.Max(GetMax(firstNum, secondNum), thirdNum);
        Console.WriteLine(maxNum);
    }

    static int GetMax(int firstNum, int secondNum)
    {
        if (firstNum > secondNum)
        {
            return firstNum;
        }
        return secondNum;
    }
}
