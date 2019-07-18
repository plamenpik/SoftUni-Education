using System;

class NumbersInReversedOrder
{
    static void Main()
    {
        string number = Console.ReadLine();

        Console.WriteLine(ReversedNumber(number));
    }

    static string ReversedNumber(string number)
    {
        string reversedNumber = "";
        for (int i = number.Length - 1; i >= 0; i--)
        {
            reversedNumber += (number[i]);
        }
        return reversedNumber;
    }
}
