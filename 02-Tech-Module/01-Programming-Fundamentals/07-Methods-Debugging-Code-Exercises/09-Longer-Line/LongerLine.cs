using System;

class LongerLine
{
    static void Main()
    {
        double x1 = double.Parse(Console.ReadLine());
        double y1 = double.Parse(Console.ReadLine());
        double x2 = double.Parse(Console.ReadLine());
        double y2 = double.Parse(Console.ReadLine());
        double x3 = double.Parse(Console.ReadLine());
        double y3 = double.Parse(Console.ReadLine());
        double x4 = double.Parse(Console.ReadLine());
        double y4 = double.Parse(Console.ReadLine());

        
    }

    static void ClosestPoint(double x1, double y1, double x2, double y2)
    {
        double diff1 = Math.Abs(x1) + Math.Abs(y1);
        double diff2 = Math.Abs(x2) + Math.Abs(y2);

        if (diff1 <= diff2)
        {
            Console.WriteLine($"({x1}, {y1})");
        }
        else
        {
            Console.WriteLine($"({x2}, {y2})");
        }
    }
}
}
