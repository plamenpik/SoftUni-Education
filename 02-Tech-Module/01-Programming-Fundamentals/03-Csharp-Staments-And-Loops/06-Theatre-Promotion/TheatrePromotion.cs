using System;

class TheatrePromotion
{
    static void Main()
    {
        string dayType = Console.ReadLine().ToLower();
        int age = int.Parse(Console.ReadLine());

        if (age < 0 || age > 122)
        {
            Console.WriteLine("Error!");
            return;
        }

        switch (dayType)
        {
            case "weekday":
                if ((age >= 0 && age <= 18) || (age > 64 && age <= 122))
                {
                    Console.WriteLine("12$");
                }
                else if (age > 18 && age <= 64)
                {
                    Console.WriteLine("18$");
                }
                break;
            case "weekend":
                if ((age >= 0 && age <= 18) || (age > 64 && age <= 122))
                {
                    Console.WriteLine("15$");
                }
                else if (age > 18 && age <= 64)
                {
                    Console.WriteLine("20$");
                }
                break;
            case "holiday":
                if (age >= 0 && age <= 18)
                {
                    Console.WriteLine("5$");
                }
                else if (age > 18 && age <= 64)
                {
                    Console.WriteLine("12$");
                }
                else if (age > 64 && age <= 122)
                {
                    Console.WriteLine("10$");
                }
                break;
        }
    }
}
