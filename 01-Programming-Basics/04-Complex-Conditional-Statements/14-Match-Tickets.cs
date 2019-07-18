using System;

class MatchTickets
{
    static void Main()
    {
        double budget = double.Parse(Console.ReadLine());
        string ticketType = Console.ReadLine();
        int pepoleCount = int.Parse(Console.ReadLine());

        if (pepoleCount >= 1 && pepoleCount <= 4)
        {
            double travelBudget = budget * 0.75;
            double ticketBudget = budget - travelBudget;
            if (ticketType == "Normal")
            {
                double ticketMoney = pepoleCount * 249.99;
                if (ticketBudget >= ticketMoney)
                {
                    Console.WriteLine($"Yes! You have {ticketBudget - ticketMoney:F2} leva left.");
                }
                else
                {
                    Console.WriteLine($"Not enough money! You need {ticketMoney - ticketBudget:F2} leva.");
                }
            }
            else if (ticketType == "VIP")
            {
                double ticketMoney = pepoleCount * 499.99;
                if (ticketBudget >= ticketMoney)
                {
                    Console.WriteLine($"Yes! You have {ticketBudget - ticketMoney:F2} leva left.");
                }
                else
                {
                    Console.WriteLine($"Not enough money! You need {ticketMoney - ticketBudget:F2} leva.");
                }
            }
        }
        else if (pepoleCount >= 5 && pepoleCount <= 9)
        {
            double travelBudget = budget * 0.60;
            double ticketBudget = budget - travelBudget;
            if (ticketType == "Normal")
            {
                double ticketMoney = pepoleCount * 249.99;
                if (ticketBudget >= ticketMoney)
                {
                    Console.WriteLine($"Yes! You have {ticketBudget - ticketMoney:F2} leva left.");
                }
                else
                {
                    Console.WriteLine($"Not enough money! You need {ticketMoney - ticketBudget:F2} leva.");
                }
            }
            else if (ticketType == "VIP")
            {
                double ticketMoney = pepoleCount * 499.99;
                if (ticketBudget >= ticketMoney)
                {
                    Console.WriteLine($"Yes! You have {ticketBudget - ticketMoney:F2} leva left.");
                }
                else
                {
                    Console.WriteLine($"Not enough money! You need {ticketMoney - ticketBudget:F2} leva.");
                }
            }
        }
        else if (pepoleCount >= 10 && pepoleCount <= 24)
        {
            double travelBudget = budget * 0.50;
            double ticketBudget = budget - travelBudget;
            if (ticketType == "Normal")
            {
                double ticketMoney = pepoleCount * 249.99;
                if (ticketBudget >= ticketMoney)
                {
                    Console.WriteLine($"Yes! You have {ticketBudget - ticketMoney:F2} leva left.");
                }
                else
                {
                    Console.WriteLine($"Not enough money! You need {ticketMoney - ticketBudget:F2} leva.");
                }
            }
            else if (ticketType == "VIP")
            {
                double ticketMoney = pepoleCount * 499.99;
                if (ticketBudget >= ticketMoney)
                {
                    Console.WriteLine($"Yes! You have {ticketBudget - ticketMoney:F2} leva left.");
                }
                else
                {
                    Console.WriteLine($"Not enough money! You need {ticketMoney - ticketBudget:F2} leva.");
                }
            }
        }
        else if (pepoleCount >= 25 && pepoleCount <= 49)
        {
            double travelBudget = budget * 0.40;
            double ticketBudget = budget - travelBudget;
            if (ticketType == "Normal")
            {
                double ticketMoney = pepoleCount * 249.99;
                if (ticketBudget >= ticketMoney)
                {
                    Console.WriteLine($"Yes! You have {ticketBudget - ticketMoney:F2} leva left.");
                }
                else
                {
                    Console.WriteLine($"Not enough money! You need {ticketMoney - ticketBudget:F2} leva.");
                }
            }
            else if (ticketType == "VIP")
            {
                double ticketMoney = pepoleCount * 499.99;
                if (ticketBudget >= ticketMoney)
                {
                    Console.WriteLine($"Yes! You have {ticketBudget - ticketMoney:F2} leva left.");
                }
                else
                {
                    Console.WriteLine($"Not enough money! You need {ticketMoney - ticketBudget:F2} leva.");
                }
            }
        }
        else if (pepoleCount >= 50)
        {
            double travelBudget = budget * 0.25;
            double ticketBudget = budget - travelBudget;
            if (ticketType == "Normal")
            {
                double ticketMoney = pepoleCount * 249.99;
                if (ticketBudget >= ticketMoney)
                {
                    Console.WriteLine($"Yes! You have {ticketBudget - ticketMoney:F2} leva left.");
                }
                else
                {
                    Console.WriteLine($"Not enough money! You need {ticketMoney - ticketBudget:F2} leva.");
                }
            }
            else if (ticketType == "VIP")
            {
                double ticketMoney = pepoleCount * 499.99;
                if (ticketBudget >= ticketMoney)
                {
                    Console.WriteLine($"Yes! You have {ticketBudget - ticketMoney:F2} leva left.");
                }
                else
                {
                    Console.WriteLine($"Not enough money! You need {ticketMoney - ticketBudget:F2} leva.");
                }
            }
        }
    }
}
