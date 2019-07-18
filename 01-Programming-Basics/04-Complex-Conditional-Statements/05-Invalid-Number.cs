using System;

class InvalidNumber
{
    static void Main(string[] args)
    {
        int number = int.Parse(Console.ReadLine());

        bool inRange = number == 0 || (number >= 100 && number <= 200);

        if (!inRange)
        {
            Console.WriteLine("invalid");
        }
    }
}
