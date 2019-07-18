using System;

class HousePrice
{
    static void Main()
    {
        double smallestRoomSize = double.Parse(Console.ReadLine());
        double kitchenSize = double.Parse(Console.ReadLine());
        double pricePerSqareMeeter = double.Parse(Console.ReadLine());

        double bathroomSize = smallestRoomSize / 2;
        double secondRoomSize = smallestRoomSize * 1.10;
        double thirdRoomSize = secondRoomSize * 1.10;
        double totalArea = (kitchenSize + smallestRoomSize + bathroomSize + secondRoomSize + thirdRoomSize) * 1.05;
        Console.WriteLine($"{totalArea * pricePerSqareMeeter:F2}");
    }
}
