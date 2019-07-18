using System;

class PCStore
{
    static void Main()
    {
        double CPUPriceUSD = double.Parse(Console.ReadLine());
        double GPUPriceUSD = double.Parse(Console.ReadLine());
        double RAMPiecePriceUSD = double.Parse(Console.ReadLine());
        int RAMPieceCount = int.Parse(Console.ReadLine());
        double discount = double.Parse(Console.ReadLine());

        double USD = 1.57;

        double TotalMoney = (CPUPriceUSD * USD) - (CPUPriceUSD * USD * discount) + (GPUPriceUSD * USD) - (GPUPriceUSD * USD * discount) + RAMPiecePriceUSD * RAMPieceCount * USD;
        Console.WriteLine($"Money needed - {TotalMoney:F2} leva.");
    }
}
