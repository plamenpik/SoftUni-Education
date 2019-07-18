using System;

class TransportPrice
{
    static void Main()
    {
        var n = double.Parse(Console.ReadLine());
        string dayPart = Console.ReadLine();

        var TaxiStarintTarife = 0.7;
        var TaxiDayTarrife = 0.79;
        var TaxiNightTarrife = 0.9;
        var BusTarrife = 0.09;
        var TrainTarrife = 0.06;
        var result = 0.0;

        if (n <= 19 && dayPart == "day")
        {
            result = (n * TaxiDayTarrife) + TaxiStarintTarife;
        }
        else if (n <= 19 && dayPart == "night")
        {
            result = (n * TaxiNightTarrife) + TaxiStarintTarife;
        }
        else if (n <= 99)
        {
            result = n * BusTarrife;
        }
        else
        {
            result = n * TrainTarrife;
        }
        Console.WriteLine($"{result:F2}");
    }
}
