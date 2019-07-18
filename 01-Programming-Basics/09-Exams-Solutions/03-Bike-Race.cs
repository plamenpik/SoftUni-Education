using System;

class BikeRace
{
    static void Main()
    {
        int juniorBikers = int.Parse(Console.ReadLine());
        int seniorBikers = int.Parse(Console.ReadLine());
        string trackType = Console.ReadLine();

        double juniorTax = 0.0;
        double seniorTax = 0.0;

        if (trackType == "trail")
        {
            juniorTax = 5.50;
            seniorTax = 7.0;
        }
        else if (trackType == "cross-country")
        {
            juniorTax = 8.0;
            seniorTax = 9.50;
            if ((juniorBikers + seniorBikers) >= 50)
            {
                juniorTax = 8.0 - (8.0 * 0.25);
                seniorTax = 9.50 - (9.50 * 0.25);
            }
        }
        else if (trackType == "downhill")
        {
            juniorTax = 12.25;
            seniorTax = 13.75;
        }
        else if (trackType == "road")
        {
            juniorTax = 20.0;
            seniorTax = 21.50;
        }

        double totalMoney = juniorBikers * juniorTax + seniorBikers * seniorTax;
        double donationMoney = totalMoney - (totalMoney * 0.05);
        Console.WriteLine($"{donationMoney:F2}");
    }
}
