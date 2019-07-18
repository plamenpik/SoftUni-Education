using System;

class MultiplicationTable
{
    static void Main()
    {
        int number = int.Parse(Console.ReadLine());

        int count = 1;

        while (count <= 10)
        {
            Console.WriteLine($"{number} X {count} = {number * count}");
            count++;
        }
    }
}
