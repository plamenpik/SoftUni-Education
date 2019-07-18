using System;

class OnTimeForExam
{
    static void Main()
    {
        int examHour = int.Parse(Console.ReadLine());
        int examMinutes = int.Parse(Console.ReadLine());
        int arrivalHour = int.Parse(Console.ReadLine());
        int arrivalMinutes = int.Parse(Console.ReadLine());

        int examTotalMinutes = (examHour * 60) + examMinutes;
        int arrivalTotalMinutes = (arrivalHour * 60) + arrivalMinutes;
        int minutesDiffrance = examTotalMinutes - arrivalTotalMinutes;

        if (minutesDiffrance >= 0 && minutesDiffrance <= 30)
        {
            Console.WriteLine("On Time");
            Console.WriteLine($"{(minutesDiffrance)} minutes before the start");
        }
        else if (minutesDiffrance > 30)
        {
            Console.WriteLine("Early");
            if (minutesDiffrance >= 60)
            {
                Console.WriteLine($"{Math.Abs(minutesDiffrance / 60)}:{Math.Abs(minutesDiffrance % 60):D2} hours before the start");
            }
            else
            {
                Console.WriteLine($"{Math.Abs(minutesDiffrance)} minutes before the start");
            }
        }
        else
        {
            Console.WriteLine("Late");
            if ((arrivalTotalMinutes - examTotalMinutes) >= 60)
            {
                Console.WriteLine($"{Math.Abs(minutesDiffrance / 60)}:{Math.Abs(minutesDiffrance % 60):D2} hours after the start");
            }
            else
            {
                Console.WriteLine($"{Math.Abs(minutesDiffrance)} minutes after the start");
            }
        }
    }
}
