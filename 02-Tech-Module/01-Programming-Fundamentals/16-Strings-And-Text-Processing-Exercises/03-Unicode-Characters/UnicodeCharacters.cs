using System;

class UnicodeCharacters
{
    static void Main()
    {
        string word = Console.ReadLine();

        foreach (char symbol in word)
        {
            string result = GetEscapeSequence(symbol);
            Console.Write(result.ToLower());
        }
        Console.WriteLine();
    }

    public static string GetEscapeSequence(char c)
    {
        return "\\u" + ((int)c).ToString("X4");
    }
}
