using System;

class PointInTheFigure
{
    static void Main(string[] args)
    {
        int h = int.Parse(Console.ReadLine());
        int x = int.Parse(Console.ReadLine());
        int y = int.Parse(Console.ReadLine());

        int x1 = 0;
        int y1 = 0;
        int x2 = 3 * h;
        int y2 = h;

        int x3 = h;
        int y3 = h;
        int x4 = 2 * h;
        int y4 = 4 * h;

        bool inFirsSquare = x > x1 && x < x2 && y > y1 && y < y2;
        bool inSecondSquare = x > x3 && x < x4 && y > y3 && y < y4;
        bool outOfFirstSquare = x < x1 || x > x2 || y < y1 || y > y2;
        bool outOfSecondSquare = x < x3 || x > x4 || y < y3 || y > y4;
        bool commonSide = x > h && x < 2 * h && y == h;

        if (inFirsSquare || inSecondSquare || commonSide)
        {
            Console.WriteLine("inside");
        }
        else if (outOfFirstSquare && outOfSecondSquare)
        {
            Console.WriteLine("outside");
        }
        else
        {
            Console.WriteLine("border");
        }
    }
}
