using System;

class Travel
{
    static void Main()
    {
        double budget = double.Parse(Console.ReadLine());
        string season = Console.ReadLine();

        if (budget <= 100)
        {
            string destination = "Bulgaria";
            if (season == "summer")
            {
                string place = "Camp";
                Console.WriteLine($"Somewhere in {destination}");
                Console.WriteLine($"{place} - {budget * 0.30:F2}");
            }
            else if (season == "winter")
            {
                string place = "Hotel";
                Console.WriteLine($"Somewhere in {destination}");
                Console.WriteLine($"{place} - {budget * 0.70:F2}");
            }
        }

        if (budget > 100 && budget <= 1000)
        {
            string destination = "Balkans";
            if (season == "summer")
            {
                string place = "Camp";
                Console.WriteLine($"Somewhere in {destination}");
                Console.WriteLine($"{place} - {budget * 0.40:F2}");
            }
            else if (season == "winter")
            {
                string place = "Hotel";
                Console.WriteLine($"Somewhere in {destination}");
                Console.WriteLine($"{place} - {budget * 0.80:F2}");
            }
        }

        if (budget > 1000)
        {
            string destination = "Europe";
            if (season == "summer")
            {
                string place = "Hotel";
                Console.WriteLine($"Somewhere in {destination}");
                Console.WriteLine($"{place} - {budget * 0.90:F2}");
            }
            else if (season == "winter")
            {
                string place = "Hotel";
                Console.WriteLine($"Somewhere in {destination}");
                Console.WriteLine($"{place} - {budget * 0.90:F2}");
            }
        }
    }
}
