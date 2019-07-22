using System;

class CenturiesToMinutes
{
    static void Main()
    {
        Console.Write("Centuries = ");
        double centuries = double.Parse(Console.ReadLine());
        double years = centuries * 100;
        double days = (int)(years * 365.2422);
        double hours = 24 * days;
        double minutes = 60 * hours;
        Console.WriteLine("{0} centuries = {1} years = {2} days = {3} hours = {4} minutes", centuries, years, days, hours, minutes);
    }
}
