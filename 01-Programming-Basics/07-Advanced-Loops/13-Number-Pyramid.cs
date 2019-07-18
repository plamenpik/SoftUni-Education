using System;

class NumberPyramid
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());
        int counter = 1;

        for (int row = 1; row <= n; row++)
        {
            for (int i = 1; i <= row; i++)
            {
                if (i > 1)
                {
                    Console.Write(" ");
                }
                Console.Write(counter);
                counter++;
                if (counter > n)
                {
                    break;
                }
            }
            Console.WriteLine();
            if (counter > n)
            {
                break;
            }
        }
    }
}
