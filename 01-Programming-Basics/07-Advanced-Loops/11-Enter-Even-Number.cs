using System;

class EnterEvenNumber
{
    static void Main()
    {
        int n = 0;

        while (true)
        {
            try
            {
                n = int.Parse(Console.ReadLine());
                if (n % 2 != 0)
                {
                    Console.WriteLine("The number is not even.");
                }
                else
                {
                    break;
                }
            }
            catch (Exception)
            {
                Console.WriteLine("The number is not even.");
            }
        }
        Console.WriteLine($"Even number entered: {n}");
    }
}
