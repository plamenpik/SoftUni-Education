using System;

class SmartLily
{
    static void Main()
    {
        int lilyAge = int.Parse(Console.ReadLine());
        double washingMachmePrice = double.Parse(Console.ReadLine());
        int toyPrice = int.Parse(Console.ReadLine());

        int birthDayMoney = 0;
        int toysCollected = 0;
        int badBrother = 0;

        for (int i = 1; i <= lilyAge; i++)
        {
            if (i % 2 == 0)
            {
                birthDayMoney += (i / 2 * 10); 
                badBrother += 1;
            }
            else
            {
                toysCollected += 1;
            }
        }
        int toysMoney = toysCollected * toyPrice;
        birthDayMoney -= badBrother;
        int tottalMoney = birthDayMoney + toysMoney;

        if (tottalMoney >= washingMachmePrice)
        {
            Console.WriteLine($"Yes! {tottalMoney - washingMachmePrice:F2}");
        }
        else
        {
            Console.WriteLine($"No! {washingMachmePrice - tottalMoney:F2}");
        }
    }
}
