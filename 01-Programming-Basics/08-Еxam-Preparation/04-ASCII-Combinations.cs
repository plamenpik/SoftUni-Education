using System;

class ASCIICombinations
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());

        int digitsSum = 0;
        int smallLettersSum = 0;
        int capitalLettersSum = 0;
        int otherSymbolsSum = 0;

        string digits = null;
        string smallLetters = null;
        string capitalLetters = null;
        string otherSymbols = null;

        for (int i = 0; i < n; i++)
        {
            char symbol = char.Parse(Console.ReadLine());
            if (symbol >= '0' && symbol <= '9')
            {
                digitsSum += (int)symbol;
                digits += symbol;
            }
            else if (symbol >= 'a' && symbol <= 'z')
            {
                smallLettersSum += (int)symbol;
                smallLetters += symbol;
            }
            else if (symbol >= 'A' && symbol <= 'Z')
            {
                capitalLettersSum += (int)symbol;
                capitalLetters += symbol;
            }
            else 
            {
                otherSymbolsSum += (int)symbol;
                otherSymbols += symbol;
            }
        }
        if (digitsSum >= smallLettersSum && digitsSum >= capitalLettersSum && digitsSum >= otherSymbolsSum)
        {
            Console.WriteLine("Biggest ASCII sum is:{0}", digitsSum);
            Console.WriteLine("Combination of characters is:{0}", digits);
        }
        else if (capitalLettersSum >= smallLettersSum && capitalLettersSum >= otherSymbolsSum)
        {
            Console.WriteLine("Biggest ASCII sum is:{0}", capitalLettersSum);
            Console.WriteLine("Combination of characters is:{0}", capitalLettersSum);
        }
        else if (smallLettersSum >= otherSymbolsSum)
        {
            Console.WriteLine("Biggest ASCII sum is:{0}", smallLettersSum);
            Console.WriteLine("Combination of characters is:{0}", smallLetters);
        }
        else
        {
            Console.WriteLine("Biggest ASCII sum is:{0}", otherSymbolsSum);
            Console.WriteLine("Combination of characters is:{0}", otherSymbols);
        }
    }
}
