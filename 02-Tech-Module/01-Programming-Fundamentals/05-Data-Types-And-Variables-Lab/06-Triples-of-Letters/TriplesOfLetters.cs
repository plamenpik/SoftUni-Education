using System;

class TriplesOfLetters
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());

        int symbol = 'a' + n;

        for (char p1 = 'a'; p1 < symbol; p1++)
        {
            for (char p2 = 'a'; p2 < symbol; p2++)
            {
                for (char p3 = 'a'; p3 < symbol; p3++)
                {
                    Console.WriteLine($"{p1}{p2}{p3}");
                }
            }
        }
    }
}
