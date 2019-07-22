using System;

class RefactorSpecialNumbers
{
    static void Main()
    {
        double lenght = 0;
        double width = 0;
        double height = 0;

        Console.Write("Length: ");
        lenght = double.Parse(Console.ReadLine());
        Console.Write("Width: ");

        width = double.Parse(Console.ReadLine());
        Console.Write("Height: ");

        height = double.Parse(Console.ReadLine());
        height = (lenght * width * height) / 3;

        Console.WriteLine("Pyramid Volume: {0:F2}", height);
    }
}
