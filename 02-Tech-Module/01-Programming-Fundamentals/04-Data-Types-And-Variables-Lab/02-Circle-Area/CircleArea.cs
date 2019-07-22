using System;

class CircleArea
{
    static void Main()
    {
        double r = double.Parse(Console.ReadLine());
        Console.WriteLine($"{Math.PI * r * r:F12}");
    }
}
