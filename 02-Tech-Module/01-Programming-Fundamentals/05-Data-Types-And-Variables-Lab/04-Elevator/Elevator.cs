using System;

class Elevator
{
    static void Main()
    {
        double n = double.Parse(Console.ReadLine());
        double p = double.Parse(Console.ReadLine());

        double coursec = (int)Math.Ceiling(n / p);
        Console.WriteLine(coursec);
    }
}
