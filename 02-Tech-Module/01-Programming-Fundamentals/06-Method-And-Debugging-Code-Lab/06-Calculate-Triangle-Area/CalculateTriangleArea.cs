using System;

class CalculateTriangleArea
{
    static void Main()
    {
        double width = double.Parse(Console.ReadLine());
        double height = double.Parse(Console.ReadLine());

        Console.WriteLine(TriangleArea(width, height));
    }

    static double TriangleArea(double width, double height)
    {
        double area = width * height / 2;
        return area;
    }
}
