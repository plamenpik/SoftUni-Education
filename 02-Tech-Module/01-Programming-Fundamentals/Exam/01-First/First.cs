using System;

class First
{
    static void Main()
    {
        int firsPerHour = int.Parse(Console.ReadLine());
        int secondPerHour = int.Parse(Console.ReadLine());
        int thirdPerHour = int.Parse(Console.ReadLine());
        int studentsCount = int.Parse(Console.ReadLine());
        if (studentsCount == 0)
        {
            Console.WriteLine("Time needed: 0h.");
            return;
        }
        decimal result = 0;

        decimal tottalStudenstPerHour = firsPerHour + secondPerHour + thirdPerHour;

        if (tottalStudenstPerHour >= studentsCount)
        {
            Console.WriteLine($"Time needed: 1h.");
            return;
        }

        decimal breaksCount = Math.Floor((decimal)(Math.Max(tottalStudenstPerHour, studentsCount) / Math.Min(tottalStudenstPerHour, studentsCount)) / 3);

        result = Math.Ceiling((decimal)(Math.Max(tottalStudenstPerHour, studentsCount) / Math.Min(tottalStudenstPerHour, studentsCount))) + breaksCount;

        if (result % 4 == 0)
        {
            result--;
        }
        Console.WriteLine($"Time needed: {result}h.");
    }
}
