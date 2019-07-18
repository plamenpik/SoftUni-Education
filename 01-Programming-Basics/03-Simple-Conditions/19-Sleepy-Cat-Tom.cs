using System;

class SleepyCatTom
{
    static void Main()
    {
        int holydays = int.Parse(Console.ReadLine());
        int tomPlayTime = 30000;
        int workdays = 365 - holydays;
        int totalMinutesPlayed = (workdays * 63) + (holydays * 127);

        if (tomPlayTime >= totalMinutesPlayed)
        {
            int playTimeLeft = Math.Abs(tomPlayTime - totalMinutesPlayed);
            Console.WriteLine("Tom sleeps well");
            Console.WriteLine($"{playTimeLeft / 60} hours and {playTimeLeft % 60} minutes less for play");
        }
        else
        {
            int overPlay = Math.Abs(totalMinutesPlayed - tomPlayTime);
            Console.WriteLine("Tom will run away");
            Console.WriteLine($"{overPlay / 60} hours and {overPlay % 60} minutes more for play");
        }
    }
}
