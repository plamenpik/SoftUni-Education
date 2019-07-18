using System;

class PrimeChecker
{
    static void Main()
    {
        long n = long.Parse(Console.ReadLine());

        string result = Convert.ToString(IsPrime(n));
        Console.WriteLine(result);
    }

    static bool IsPrime(long n)
    {
        bool isPrime = true;
        if (n < 2)
        {
            isPrime = false;
        }
        for (long i = 2; i <= Math.Sqrt(n); i++)
        {
            if (n % i == 0)
            {
                isPrime = false;
                break;
            }
        }
        return isPrime;
    }
}
