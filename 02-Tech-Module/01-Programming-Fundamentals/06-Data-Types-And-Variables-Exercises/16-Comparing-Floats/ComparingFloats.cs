using System;

class ComparingFloats
{
    static void Main()
    {
        double first = double.Parse(Console.ReadLine());
        double second = double.Parse(Console.ReadLine());

        double diff = Math.Abs(first - second);

        if (diff >= 0.000001)
        {
            Console.WriteLine("False");
        }
        else
        {
            Console.WriteLine("True");
        }
    }
}
