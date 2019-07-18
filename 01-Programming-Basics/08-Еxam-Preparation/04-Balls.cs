using System;

class Balls
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());
        int totalPoints = 0;
        int redBallsPoints = 0;
        int orangeBallsPoints = 0;
        int yellowBallsPoints = 0;
        int whiteBallsPoints = 0;
        int blackBallsCount = 0;
        int otherBallsCount = 0;

        for (int i = 0; i < n; i++)
        {
            string ball = Console.ReadLine().ToLower();
            if (ball == "red")
            {
                totalPoints += 5;
                redBallsPoints++;
            }
            else if (ball == "orange")
            {
                totalPoints += 10;
                orangeBallsPoints++;
            }
            else if (ball == "yellow")
            {
                totalPoints += 15;
                yellowBallsPoints++;
            }
            else if (ball == "white")
            {
                totalPoints += 20;
                whiteBallsPoints++;
            }
            else if (ball == "black")
            {
                totalPoints /= 2;
                blackBallsCount++;
            }
            else
            {
                otherBallsCount++;
            }
        }
        Console.WriteLine($"Total points: {totalPoints}");
        Console.WriteLine($"Points from red balls: {redBallsPoints}");
        Console.WriteLine($"Points from orange balls: {orangeBallsPoints}");
        Console.WriteLine($"Points from yellow balls: {yellowBallsPoints}");
        Console.WriteLine($"Points from white balls: {whiteBallsPoints}");
        Console.WriteLine($"Other colors picked: {otherBallsCount}");
        Console.WriteLine($"Divides from black balls: {blackBallsCount}");
    }
}
