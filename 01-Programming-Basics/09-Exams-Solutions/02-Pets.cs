using System;

class Pets
{
    static void Main()
    {
        int daysMissing = int.Parse(Console.ReadLine());
        int foodAmount = int.Parse(Console.ReadLine());
        double dogFoodKilos = double.Parse(Console.ReadLine());
        double catFoodKilos = double.Parse(Console.ReadLine());
        double turttleFoodGrams = double.Parse(Console.ReadLine());

        double totalFoodConsumed = (dogFoodKilos + catFoodKilos + turttleFoodGrams / 1000) * daysMissing;

        if (foodAmount >= totalFoodConsumed)
        {
            double foodDiff = Math.Floor(foodAmount - totalFoodConsumed);
            Console.WriteLine($"{foodDiff} kilos of food left.");
        }
        else
        {
            double foodDiff = Math.Ceiling(totalFoodConsumed - foodAmount);
            Console.WriteLine($"{foodDiff} more kilos of food are needed.");
        }
    }
}
