using System;

class Cinema
{
    static void Main(string[] args)
    {
        string projectioType = Console.ReadLine().ToLower();
        int row = int.Parse(Console.ReadLine());
        int colum = int.Parse(Console.ReadLine());

        int cinemaArea = row * colum;
        double ticketsPrice = -1.0;

        if (projectioType == "premiere")
        {
            ticketsPrice = 12.00;
        }
        else if (projectioType == "normal")
        {
            ticketsPrice = 7.50;
        }
        else if (projectioType == "discount")
        {
            ticketsPrice = 5.00;
        }
        if (ticketsPrice > 0)
        {
            Console.WriteLine("{0:F2} leva", cinemaArea * ticketsPrice);
        }
    }
}
