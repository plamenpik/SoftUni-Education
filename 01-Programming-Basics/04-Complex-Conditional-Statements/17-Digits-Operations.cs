using System;

class DigitsOperations
{
    static void Main()
    {
        double number1 = double.Parse(Console.ReadLine());
        double number2 = double.Parse(Console.ReadLine());
        string operrator = Console.ReadLine();

        if (operrator == "+")
        {
            double result = number1 + number2;
            if (result % 2 == 0)
            {
                Console.WriteLine($"{number1} {operrator} {number2} = {result} - even");
            }
            else
            {
                Console.WriteLine($"{number1} {operrator} {number2} = {result} - odd");
            }
        }
        else if (operrator == "-")
        {
            double result = number1 - number2;
            if (result % 2 == 0)
            {
                Console.WriteLine($"{number1} {operrator} {number2} = {result} - even");
            }
            else
            {
                Console.WriteLine($"{number1} {operrator} {number2} = {result} - odd");
            }
        }
        else if (operrator == "*")
        {
            double result = number1 * number2;
            if (result % 2 == 0)
            {
                Console.WriteLine($"{number1} {operrator} {number2} = {result} - even");
            }
            else
            {
                Console.WriteLine($"{number1} {operrator} {number2} = {result} - odd");
            }
        }

        if (operrator == "/" && number2 != 0)
        {
            double result = (number1 / number2);
            Console.WriteLine($"{number1} {operrator} {number2} = {result:F2}");
        }
        else if (operrator == "/" && number2 == 0)
        {
            Console.WriteLine($"Cannot divide {number1} by zero");
        }
        else if (operrator == "%" && number2 != 0)
        {
            double result = (number1 % number2);
            Console.WriteLine($"{number1} {operrator} {number2} = {result}");
        }
        else if (operrator == "%" && number2 == 0)
        {
            Console.WriteLine($"Cannot divide {number1} by zero");
        }
    }
}
