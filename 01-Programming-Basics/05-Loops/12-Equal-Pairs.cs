using System;

class EqualPairs
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());
        double currentPair = 0;
        double oldPair = 0;
        double diff = 0;

        for (int i = 0; i < n; i++)
        {
            double num1 = double.Parse(Console.ReadLine());
            double num2 = double.Parse(Console.ReadLine());
            currentPair = num1 + num2;
            diff = Math.Max(currentPair, oldPair) - Math.Min(currentPair, oldPair);
            oldPair = currentPair;
        }

        if (n == 1)
        {
            Console.WriteLine($"Yes, value={diff}");
        }
        else
        {
            if (diff == 0)
            {
                Console.WriteLine($"Yes, value={currentPair}");
            }
            else
            {
                Console.WriteLine($"No, maxdiff={diff}");
            }
        }
    }
}
