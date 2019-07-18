using System;

class IndexOfLetters
{
    static void Main()
    {
        char[] symbols = Console.ReadLine().ToCharArray();

        foreach (char symbol in symbols)
        {
            Console.WriteLine($"{symbol} -> {(int)symbol - 97}");
        }
    }
}
