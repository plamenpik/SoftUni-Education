using System;

class BigestNumber
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());
        int max = Int32.MinValue;
         for (int i = 1; i <= n; i++)
         {
            int num = int.Parse(Console.ReadLine());
            if (max < num)
            {
                max = num;
            }
         }
         Console.WriteLine(max);
    }
}
