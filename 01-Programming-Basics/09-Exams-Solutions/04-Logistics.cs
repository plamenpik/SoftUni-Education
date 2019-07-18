using System;

class Logistics
{
    static void Main()
    {
        int transportCount = int.Parse(Console.ReadLine());

        double bus = 0.0;
        double truck = 0.0;
        double train = 0.0;
        double totalWeight = 0.0;

        for (int i = 0; i < transportCount; i++)
        {
            int Weight = int.Parse(Console.ReadLine());
            if (Weight <= 3)
            {
                bus += Weight;
                totalWeight += Weight;
            }
            else if (Weight <= 11)
            {
                truck += Weight;
                totalWeight += Weight;
            }
            else
            {
                train += Weight;
                totalWeight += Weight;
            }
        }
        double avaragePricePerTon = (bus * 200 + truck * 175 + train * 120) / totalWeight;
        Console.WriteLine($"{avaragePricePerTon:F2}");
        Console.WriteLine($"{bus / totalWeight * 100:F2}%");
        Console.WriteLine($"{truck / totalWeight * 100:F2}%");
        Console.WriteLine($"{train / totalWeight * 100:F2}%");
    }
}
