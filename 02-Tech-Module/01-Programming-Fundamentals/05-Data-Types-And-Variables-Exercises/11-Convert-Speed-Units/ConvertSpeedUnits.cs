using System;

class ConvertSpeedUnits
{
    static void Main()
    {
        int distance = int.Parse(Console.ReadLine());
        int hours = int.Parse(Console.ReadLine());
        int minutes = int.Parse(Console.ReadLine());
        int seconds = int.Parse(Console.ReadLine());

        float mile = distance / 1609f;

        float allSeconds = hours * 3600 + minutes * 60 + seconds;
        float speedInMeeterPerSecond = distance / allSeconds;
        float allHours = allSeconds / 3600;
        float speedInKpH = (distance / 1000) / allHours;
        float speedInMpH = mile / allHours;


        Console.WriteLine(speedInMeeterPerSecond);
        Console.WriteLine(speedInKpH);
        Console.WriteLine(speedInMpH);
    }
}
