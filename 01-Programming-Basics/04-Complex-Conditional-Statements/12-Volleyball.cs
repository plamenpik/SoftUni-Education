using System;

class Volleyball
{
    static void Main(string[] args)
    {
        string yearType = Console.ReadLine().ToLower();
        int holydaysInYear = int.Parse(Console.ReadLine());
        int weekendsInBirthTown = int.Parse(Console.ReadLine());

        double weekendsForPlay = (48 - weekendsInBirthTown) * 3.0/4.0;
        double palyInHolydays = holydaysInYear * 2.0 / 3.0;
        double totalPlay = weekendsForPlay + palyInHolydays + weekendsInBirthTown;

        if (yearType == "leap")
        {
            totalPlay = totalPlay * 1.15;
            Console.WriteLine(Math.Floor(totalPlay));
        }
        else if (yearType == "normal")
        {
            Console.WriteLine(Math.Floor(totalPlay));
        }
    }
}
