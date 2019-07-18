using System;
using System.Globalization;
using System.Numerics;

class SinoTheWalker
{
    static void Main()
    {
        string s = Console.ReadLine();
        DateTime leavingHour = DateTime.ParseExact(s, "HH:mm:ss", CultureInfo.InvariantCulture);
        uint steps = uint.Parse(Console.ReadLine()) % 86400;
        uint secondsPerSteps = uint.Parse(Console.ReadLine()) % 86400;

        uint secondsToAdd = steps * secondsPerSteps;

        DateTime arrival = leavingHour.AddSeconds(secondsToAdd);

        Console.WriteLine($"Time Arrival: {arrival:HH:mm:ss}");
    }
}
