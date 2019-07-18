using System;

class BeverageLabels
{
    static void Main()
    {
        string beverageName = Console.ReadLine();
        int volume = int.Parse(Console.ReadLine());
        double energyPer100 = double.Parse(Console.ReadLine());
        double sugarPer100 = double.Parse(Console.ReadLine());

        double multiplayer = volume / 100.0;

        Console.Write($"{volume}ml ");
        Console.WriteLine($"{beverageName}:");
        Console.Write($"{energyPer100 * multiplayer}kcal, ");
        Console.WriteLine($"{sugarPer100 * multiplayer}g sugars");
    }
}
