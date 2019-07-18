using System;

class Distance
{
    static void Main()
    {
        int startingSpeed = int.Parse(Console.ReadLine());
        int firstTime = int.Parse(Console.ReadLine());
        int secondTime = int.Parse(Console.ReadLine());
        int thirdTime = int.Parse(Console.ReadLine());

        double inceasedSpeed = startingSpeed * 1.1;
        double decreasedSpeed = inceasedSpeed - (inceasedSpeed * 0.05);
        double firstDistance = startingSpeed * firstTime / 60.0;
        double secondDistance = inceasedSpeed * secondTime / 60.0;
        double thirdDistance = decreasedSpeed * thirdTime / 60.0;
        double result = (firstDistance + secondDistance + thirdDistance);
        Console.WriteLine($"{result:F2}");
    }
}
