using System;

class RefactorVolumeOfPyramid
{
    static void Main()
    {
        int num = int.Parse(Console.ReadLine());

        int sum = 0;
        int currentIndex = 0;
        bool isFound = false;

        for (int i = 1; i <= num; i++)
        {
            currentIndex = i;
            while (i > 0)
            {
                sum += i % 10;
                i = i / 10;
            }
            isFound = (sum == 5) || (sum == 7) || (sum == 11);
            Console.WriteLine($"{currentIndex} -> {isFound}");
            sum = 0;
            i = currentIndex;
        }

    }
}
