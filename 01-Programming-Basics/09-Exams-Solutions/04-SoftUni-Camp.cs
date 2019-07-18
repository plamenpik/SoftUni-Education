using System;

class SoftUniCamp
{
    static void Main()
    {
        int groupsCount = int.Parse(Console.ReadLine());

        double carCount = 0.0;
        double busCount = 0.0;
        double smallBusCount = 0.0;
        double bigBusCount = 0.0;
        double trainCount = 0.0;
        double totalPeople = 0.0;

        for (int i = 1; i <= groupsCount; i++)
        {
            int groupsSize = int.Parse(Console.ReadLine());
            totalPeople += groupsSize;
            if (groupsSize <= 5)
            {
                carCount += groupsSize;
            }
            else if (groupsSize <= 12)
            {
                busCount += groupsSize;
            }
            else if (groupsSize <= 25)
            {
                smallBusCount += groupsSize;
            }
            else if (groupsSize <= 40)
            {
                bigBusCount += groupsSize;
            }
            else
            {
                trainCount += groupsSize;
            }
        }
        Console.WriteLine($"{carCount / totalPeople * 100:F2}%");
        Console.WriteLine($"{busCount / totalPeople * 100:F2}%");
        Console.WriteLine($"{smallBusCount / totalPeople * 100:F2}%");
        Console.WriteLine($"{bigBusCount / totalPeople * 100:F2}%");
        Console.WriteLine($"{trainCount / totalPeople * 100:F2}%");
    }
}
