using System;

class FastPrimeChecker
{
    static void Main()
    {
        int Number = int.Parse(Console.ReadLine());
        for (int currentNumber = 2; currentNumber <= Number; currentNumber++)
        {
            bool isFound = true;
            for (int divider = 2; divider <= Math.Sqrt(currentNumber); divider++)
            {
                if (currentNumber % divider == 0)
                {
                    isFound = false;
                    break;
                }
            }
            Console.WriteLine($"{currentNumber} -> {isFound}");
        }
    }
}
