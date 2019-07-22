using System;

class DayOfWeek
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());

        string[] DaysOfWeek = new string[8];
        DaysOfWeek[0] = "Invalid Day!";
        DaysOfWeek[1] = "Monday";
        DaysOfWeek[2] = "Tuesday";
        DaysOfWeek[3] = "Wednesday";
        DaysOfWeek[4] = "Thursday";
        DaysOfWeek[5] = "Friday";
        DaysOfWeek[6] = "Saturday";
        DaysOfWeek[7] = "Sunday";

        for (int i = 0; i < DaysOfWeek.Length; i++)
        {
            if (n == i)
            {
                Console.WriteLine(DaysOfWeek[i]);
                return;
            }
        }
        Console.WriteLine(DaysOfWeek[0]);

    }
}
