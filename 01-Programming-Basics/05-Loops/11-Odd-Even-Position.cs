using System;

class OddEvenPosition
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());

        double oddSum = 0;
        double oddMax = double.MinValue;
        double oddMin = double.MaxValue;
        double evenSum = 0;
        double evenMax = double.MinValue;
        double evenMin = double.MaxValue;
        string no = "No";


        for (int i = 1; i <= n; i++)
        {
            double num = double.Parse(Console.ReadLine());
            if (i % 2 == 0)
            {
                evenSum += num;
                if (num > evenMax)
                {
                    evenMax = num;
                }
                if (num < evenMin)
                {
                    evenMin = num;
                }
            }
            else
            {
                oddSum += num;
                if (num > oddMax)
                {
                    oddMax = num;
                }
                if (num < oddMin)
                {
                    oddMin = num;
                }
            }
        }
        if (n == 0)
        {
            Console.WriteLine($"OddSum={oddSum}");
            Console.WriteLine($"OddMin={no}");
            Console.WriteLine($"OddMax={no}");
            Console.WriteLine($"EvenSum={evenSum}");
            Console.WriteLine($"EvenMin={no}");
            Console.WriteLine($"EvenMax={no}");
        }
        else if (n == 1)
        {
            Console.WriteLine($"OddSum={oddSum}");
            Console.WriteLine($"OddMin={oddMin}");
            Console.WriteLine($"OddMax={oddMax}");
            Console.WriteLine($"EvenSum={evenSum}");
            Console.WriteLine($"EvenMin={no}");
            Console.WriteLine($"EvenMax={no}");
        }
        else
        {
            Console.WriteLine($"OddSum={oddSum}");
            Console.WriteLine($"OddMin={oddMin}");
            Console.WriteLine($"OddMax={oddMax}");
            Console.WriteLine($"EvenSum={evenSum}");
            Console.WriteLine($"EvenMin={evenMin}");
            Console.WriteLine($"EvenMax={evenMax}");
        }
        
    }
}
