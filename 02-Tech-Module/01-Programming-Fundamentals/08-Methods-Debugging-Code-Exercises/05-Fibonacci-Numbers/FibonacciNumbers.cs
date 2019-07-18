using System;

class FibonacciNumbers
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());

        Console.WriteLine(Fibonacci(n));
    }

    static int Fibonacci(int n)
    {
        int f0 = 1;
        int f1 = 1;
        int result = 0;
        if (n < 2)
        {
            result = 1;
        }
        else
        {
            for (int i = 1; i < n; i++)
            {
                result = f0 + f1;
                f0 = f1;
                f1 = result;
            }
        }
        return result;
    }
}
