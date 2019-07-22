using System;

class GreaterOfTwoValues
{
    static void Main()
    {
        string type = Console.ReadLine();

        switch (type)
        {
            case "int":
                int firstNumber = int.Parse(Console.ReadLine());
                int secondNumber = int.Parse(Console.ReadLine());
                int maxNumber = GetMax(firstNumber, secondNumber);
                Console.WriteLine(maxNumber);
                break;
            case "char":
                char firstChar = char.Parse(Console.ReadLine());
                char secondChar = char.Parse(Console.ReadLine());
                char maxChar = GetMax(firstChar, secondChar);
                Console.WriteLine(maxChar);
                break;
            case "string":
                string firstString = Console.ReadLine();
                string secondString = Console.ReadLine();
                string maxString = GetMax(firstString, secondString);
                Console.WriteLine(maxString);
                break;

            default:
                break;
        }
    }

    static int GetMax(int first, int second)
    {
        if (first >= second)
        {
            return first;
        }
        return second;
    }

    static char GetMax(char first, char second)
    {
        if (first >= second)
        {
            return first;
        }
        return second;
    }

    static string GetMax(string first, string second)
    {
        if (first.CompareTo(second) >= 0)
        {
            return first;
        }
        return second;
    }
}
