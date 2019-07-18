using System;

class ReverseArrayOfIntegers
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());

        int[] numbers = new int[n];
        for (int i = 0; i < numbers.Length; i++)
        {
            numbers[i] = int.Parse(Console.ReadLine());
        }

        Console.WriteLine(string.Join((" "), ReversedAray(numbers, n)));
    }

    static int[] ReversedAray(int[] numbers, int n)
    {
        int[] reversed = new int[n];
        for (int i = 0; i < reversed.Length; i++)
        {
            reversed[i] = numbers[i];
        }
        int temp = 0;
        for (int i = 0; i < reversed.Length / 2; i++)
        {
            temp = reversed[i];
            reversed[i] = reversed[reversed.Length - 1 - i];
            reversed[reversed.Length - 1 - i] = temp;
        }
        return reversed;
    }     
}
