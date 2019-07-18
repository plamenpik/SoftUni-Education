using System;

class Shopping
{
    static void Main()
    {
        double budget = double.Parse(Console.ReadLine());
        int chocolateCount = int.Parse(Console.ReadLine());
        double milkLiters = double.Parse(Console.ReadLine());

        double manadirCount = Math.Floor(chocolateCount - (chocolateCount * 0.35));
        double moneyNeede = chocolateCount * 0.65 + manadirCount * 0.20 + milkLiters * 2.70;
        if (budget >= moneyNeede)
        {
            Console.WriteLine($"You got this, {budget - moneyNeede:F2} money left!");
        }
        else
        {
            Console.WriteLine($"Not enough money, you need {moneyNeede - budget:F2} more!");
        }
    }
}
