using System;

class MinNumber
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());
        int min = Int32.MaxValue;
        for (int i = 1; i <= n; i++)
        {
            int num = int.Parse(Console.ReadLine());
            if (min > num)
            {
                min = num;
            }
        }
        Console.WriteLine(min);
    }
}
