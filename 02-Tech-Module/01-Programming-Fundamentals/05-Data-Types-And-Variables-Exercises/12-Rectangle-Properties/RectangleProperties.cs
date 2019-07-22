using System;

class RectangleProperties
{
    static void Main()
    {
        double a = double.Parse(Console.ReadLine());
        double b = double.Parse(Console.ReadLine());

        double area = a * b;
        double perimeter = 2 * (a + b);
        double diagonal = Math.Sqrt(a * a + b * b);

        Console.WriteLine(perimeter);
        Console.WriteLine(area);
        Console.WriteLine(diagonal);
    }
}
