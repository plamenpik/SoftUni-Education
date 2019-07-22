using System;

class TemperatureConversion
{
    static void Main()
    {
        double fahrenheit = double.Parse(Console.ReadLine());

        Console.WriteLine($"{FahrToCels(fahrenheit):F2}");
    }

    static double FahrToCels(double fahrenheit)
    {
        double result = (fahrenheit - 32) * 5 / 9;
        return result;
    }
}
