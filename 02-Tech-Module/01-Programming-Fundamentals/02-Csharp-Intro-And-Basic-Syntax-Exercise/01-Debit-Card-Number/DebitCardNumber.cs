using System;

class DebitCardNumber
{
    static void Main()
    {
        int firstNumber = int.Parse(Console.ReadLine());
        int secondNumber = int.Parse(Console.ReadLine());
        int thirdNumber = int.Parse(Console.ReadLine());
        int fourthNumber = int.Parse(Console.ReadLine());

        Console.Write($"{firstNumber:D4} ");
        Console.Write($"{secondNumber:D4} ");
        Console.Write($"{thirdNumber:D4} ");
        Console.WriteLine($"{fourthNumber:D4}");
    }
}
