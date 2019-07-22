using System;

class EnglishNameOfLastDigit
{
    static void Main()
    {
        long num = Math.Abs(long.Parse(Console.ReadLine()));

        long lastDigit = num % 10;
        Console.WriteLine(LastDigitName(lastDigit));
    }

    static string LastDigitName(long lastDigit)
    {
        string digitName = "";
        switch (lastDigit)
        {
            case 1:
                digitName = "one";
                break;
            case 2:
                digitName = "two";
                break;
            case 3:
                digitName = "three";
                break;
            case 4:
                digitName = "four";
                break;
            case 5:
                digitName = "five";
                break;
            case 6:
                digitName = "six";
                break;
            case 7:
                digitName = "seven";
                break;
            case 8:
                digitName = "eight";
                break;
            case 9:
                digitName = "nein";
                break;
            default:
                digitName = "zero";
                break;
        }
        return digitName;
    }
}
