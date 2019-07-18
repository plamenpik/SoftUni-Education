using System;

class ExcellentResult
{
    static void Main()
    {
        var grade = double.Parse(Console.ReadLine());
        if (grade >= 5.5)
        {
            Console.WriteLine("Excellent!");
        }
    }
}
