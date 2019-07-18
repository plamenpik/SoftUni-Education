using System;

class IntegerToHexAndBinary
{
    static void Main()
    {
        int num = int.Parse(Console.ReadLine());

        Console.WriteLine(Convert.ToString(num, 16).ToUpper());
        Console.WriteLine(Convert.ToString(num, 2));
    }
}
