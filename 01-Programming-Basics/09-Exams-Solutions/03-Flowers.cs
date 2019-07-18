using System;

class Flowers
{
    static void Main()
    {
        int hrizantemaCount = int.Parse(Console.ReadLine());
        int roseCount = int.Parse(Console.ReadLine());
        int laleCount = int.Parse(Console.ReadLine());
        string season = Console.ReadLine().ToLower();
        string isHolyday = Console.ReadLine().ToLower();

        if (isHolyday == "y")
        {
            if (season == "spring" || season == "summer")
            {
                double hrizantemaPrice = 2.0;
                double rosePrice = 4.10;
                double lalePrice = 2.50;
                double flowesPrice = (hrizantemaPrice * hrizantemaCount + rosePrice * roseCount + lalePrice * laleCount) * 1.15;
                if (season == "spring" && laleCount > 7)
                {
                    flowesPrice = flowesPrice - (flowesPrice * 0.05);
                }
                if ((hrizantemaCount + roseCount + laleCount) > 20)
                {
                    flowesPrice = flowesPrice - (flowesPrice * 0.20);
                }
                double totalPrice = flowesPrice + 2.0;
                Console.WriteLine($"{totalPrice:F2}");
            }
            else if (season == "autumn" || season == "winter")
            {
                double hrizantemaPrice = 3.75;
                double rosePrice = 4.50;
                double lalePrice = 4.15;
                double flowesPrice = (hrizantemaPrice * hrizantemaCount + rosePrice * roseCount + lalePrice * laleCount) * 1.15;
                if (season == "winter" && roseCount > 10)
                {
                    flowesPrice = flowesPrice - (flowesPrice * 0.10);
                }
                if ((hrizantemaCount + roseCount + laleCount) > 20)
                {
                    flowesPrice = flowesPrice - (flowesPrice * 0.20);
                }
                double totalPrice = flowesPrice + 2.0;
                Console.WriteLine($"{totalPrice:F2}");
            }
        }
        else if (isHolyday == "n")
        {
            if (season == "spring" || season == "summer")
            {
                double hrizantemaPrice = 2.0;
                double rosePrice = 4.10;
                double lalePrice = 2.50;
                double flowesPrice = (hrizantemaPrice * hrizantemaCount + rosePrice * roseCount + lalePrice * laleCount);
                if (season == "spring" && laleCount > 7)
                {
                    flowesPrice = flowesPrice - (flowesPrice * 0.05);
                }
                if ((hrizantemaCount + roseCount + laleCount) > 20)
                {
                    flowesPrice = flowesPrice - (flowesPrice * 0.20);
                }
                double totalPrice = flowesPrice + 2.0;
                Console.WriteLine($"{totalPrice:F2}");
            }
            else if (season == "autumn" || season == "winter")
            {
                double hrizantemaPrice = 3.75;
                double rosePrice = 4.50;
                double lalePrice = 4.15;
                double flowesPrice = (hrizantemaPrice * hrizantemaCount + rosePrice * roseCount + lalePrice * laleCount);
                if (season == "winter" && roseCount >= 10)
                {
                    flowesPrice = flowesPrice - (flowesPrice * 0.10);
                }
                if ((hrizantemaCount + roseCount + laleCount) > 20)
                {
                    flowesPrice = flowesPrice - (flowesPrice * 0.20);
                }
                double totalPrice = flowesPrice + 2.0;
                Console.WriteLine($"{totalPrice:F2}");
            }
        }
    }
}
