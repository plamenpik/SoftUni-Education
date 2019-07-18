using System;

class HotelRoom
{
    static void Main()
    {
        string month = Console.ReadLine();
        int days = int.Parse(Console.ReadLine());

        double studioPrice = 0.0;
        double apartamentPrice = 0.0;

        if (month == "May" || month == "October")
        {
            studioPrice += 50.00;
            apartamentPrice += 65.00;
            double discountApartament = apartamentPrice - (apartamentPrice * 0.10);
                    
            if (days > 7 && days <= 14)
            {
                double discountStudio = studioPrice - (studioPrice * 0.05);
                Console.WriteLine($"Apartment: {days * apartamentPrice:F2} lv.");
                Console.WriteLine($"Studio: {days * discountStudio:F2} lv.");
            }
            else if (days > 14)
            {
                double discountStudio = studioPrice - (studioPrice * 0.30);
                Console.WriteLine($"Apartment: {days * discountApartament:F2} lv.");
                Console.WriteLine($"Studio: {days * discountStudio:F2} lv.");
            }
            else
            {
                Console.WriteLine($"Apartment: {days * apartamentPrice:F2} lv.");
                Console.WriteLine($"Studio: {days * studioPrice:F2} lv.");
            }
        }
        else if (month == "June" || month == "September")
        {
            studioPrice += 75.20;
            apartamentPrice += 68.70;
            double discountApartament = apartamentPrice - (apartamentPrice * 0.10);
            
            if (days > 14)
            {
                double discountStudio = studioPrice - (studioPrice * 0.20);
                Console.WriteLine($"Apartment: {days * discountApartament:F2} lv.");
                Console.WriteLine($"Studio: {days * discountStudio:F2} lv.");
            }
            else
            {
                Console.WriteLine($"Apartment: {days * apartamentPrice:F2} lv.");
                Console.WriteLine($"Studio: {days * studioPrice:F2} lv.");
            }
        }
        else if (month == "July" || month == "August")
        {
            studioPrice += 76.00;
            apartamentPrice += 77.00;
            double discountApartament = apartamentPrice - (apartamentPrice * 0.10);

            if (days > 14)
            {
                Console.WriteLine($"Apartment: {days * discountApartament:F2} lv.");
                Console.WriteLine($"Studio: {days * studioPrice:F2} lv.");
            }
            else
            {
                Console.WriteLine($"Apartment: {days * apartamentPrice:F2} lv.");
                Console.WriteLine($"Studio: {days * studioPrice:F2} lv.");
            }
        }
    }
}