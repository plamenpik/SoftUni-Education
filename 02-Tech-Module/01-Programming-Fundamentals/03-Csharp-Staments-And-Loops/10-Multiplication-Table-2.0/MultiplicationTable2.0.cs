using System;

class MultiplicationTable2
{
    static void Main()
    {
        int number = int.Parse(Console.ReadLine());
        int count = int.Parse(Console.ReadLine());

        do
        {
            Console.WriteLine($"{number} X {count} = {number * count}");
            count++;
        } while (count <= 10);
    }
}
