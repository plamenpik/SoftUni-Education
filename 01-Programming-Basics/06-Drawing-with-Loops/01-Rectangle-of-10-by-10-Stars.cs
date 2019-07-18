using System;

class RectangleOf10by10Stars
{
    static void Main()
    {
        int n = 10;
        for (int i = 0; i < n; i++)
        {
            Console.WriteLine(new string('*', n));
        }
    }
}
