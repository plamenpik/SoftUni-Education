using System;

class NumberInRange1to100
{
    static void Main()
    {
        int n = 0;

        while (true)
        {
            try
            {
                Console.Write("Еnter a number in the range [1...100]:");
                n = int.Parse(Console.ReadLine());
                if (n >= 1 && n <= 100)
                {
                    break;
                }
            }
            catch (Exception)
            {
            }
            Console.WriteLine("Invalid number!");
            
        }
        Console.WriteLine($"The number is: {n}");
    }
}
