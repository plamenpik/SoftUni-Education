using System;

class Harvest
{
    static void Main()
    {
        int grapeArea = int.Parse(Console.ReadLine());
        double grapePerSqareMeter = double.Parse(Console.ReadLine());
        int wineNeeded = int.Parse(Console.ReadLine());
        int workersCount = int.Parse(Console.ReadLine());

        double totalGrape = grapeArea * grapePerSqareMeter;
        double wineProduced = totalGrape / 2.5 * 0.40;
        double wineLeft = Math.Abs(wineProduced - wineNeeded);

        if (wineProduced < wineNeeded)
        {
            Console.WriteLine($"It will be a tough winter! More {Math.Floor(wineLeft)} liters wine needed.");
        }
        else
        {
            Console.WriteLine($"Good harvest this year! Total wine: {Math.Floor(wineProduced)} liters.");
            Console.WriteLine($"{Math.Ceiling(wineLeft)} liters left -> {Math.Ceiling(wineLeft / workersCount)} liters per person.");
        }
    }
}
