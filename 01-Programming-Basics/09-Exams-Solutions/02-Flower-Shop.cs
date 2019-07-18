using System;

class FlowerShop
{
    static void Main()
    {
        int magnoliaCount = int.Parse(Console.ReadLine());
        int zumbiulCount = int.Parse(Console.ReadLine());
        int roseCount = int.Parse(Console.ReadLine());
        int cactusCount = int.Parse(Console.ReadLine());
        double giftPrice = double.Parse(Console.ReadLine());

        double flowerMoney = magnoliaCount * 3.25 + zumbiulCount * 4 + roseCount * 3.50 + cactusCount * 8;
        double totalMoney = flowerMoney - flowerMoney * 0.05;

        if (giftPrice > totalMoney)
        {
            Console.WriteLine($"She will have to borrow {Math.Ceiling(giftPrice - totalMoney)} leva.");
        }
        else
        {
            Console.WriteLine($"She is left with {Math.Floor(totalMoney - giftPrice)} leva.");
        }
    }
}
