using System;

class VariableInHexFormat
{
    static void Main()
    {
        string hex = Console.ReadLine();

        int output = Convert.ToInt32(hex, 16);
        Console.WriteLine(output);
    }
}
