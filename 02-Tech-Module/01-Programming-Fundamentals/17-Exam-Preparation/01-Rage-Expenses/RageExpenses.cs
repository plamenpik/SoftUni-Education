using System;

class RageExpenses
{
    static void Main()
    {
        int totalGameLost = int.Parse(Console.ReadLine());
        double headsetPrice = double.Parse(Console.ReadLine());
        double mousePrice = double.Parse(Console.ReadLine());
        double keyboardPrice = double.Parse(Console.ReadLine());
        double displayPrice = double.Parse(Console.ReadLine());

        double expenses = 0.0;
        double headsetExp = 0.0;
        double mouseExp = 0.0;
        double keyboardExp = 0.0;
        double displayExp = 0.0;

        int mouseCounter = 0;
        int keyboardCount = 0;

        for (int i = 1; i <= totalGameLost; i++)
        {
            if (i % 2 == 0)
            {
                headsetExp += headsetPrice;
            }
            if (i % 3 == 0)
            {
                mouseExp += mousePrice;
                mouseCounter++;

                if (mouseCounter > 1 && mouseCounter % 2 == 0)
                {
                    keyboardExp += keyboardPrice;
                    keyboardCount++;

                    if (keyboardCount > 1 && keyboardCount % 2 == 0)
                    {
                        displayExp += displayPrice;
                    }
                }
            }
        }
        expenses = headsetExp + mouseExp + keyboardExp + displayExp;
        //Console.WriteLine($"{headsetExp}, {mouseExp}, {keyboardExp}, {displayExp}");
        Console.WriteLine($"Rage expenses: {expenses:F2} lv.");
    }
}
