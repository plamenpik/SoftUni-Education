using System;

class _1000DaysAfterBirth
{
    static void Main(string[] args)
    {
        string date = Console.ReadLine();
        DateTime time = DateTime.ParseExact(date, "dd-MM-yyyy", null);
        DateTime time1 = time.AddDays(999);
        Console.WriteLine("{0:dd-MM-yyyy}", time1);
    }
}
