using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CurrencyConverter
{
    class CurrencyConverter
    {
        static void Main(string[] args)
        {
            var amount = double.Parse(Console.ReadLine());
            var curFrom = Console.ReadLine();
            var curTo = Console.ReadLine();

            var BGNtoUSD = 1.79549;
            var BGNtoEUR = 1.95583;
            var BGNtoGBP = 2.53405;

            if (curFrom == "USD" && curTo == "BGN")
            {
                Console.WriteLine(Math.Round(amount * BGNtoUSD, 2) + $" {curTo}");
            }
            else if (curFrom == "USD" && curTo == "EUR")
            {
                Console.WriteLine(Math.Round(amount * BGNtoUSD / BGNtoEUR, 2) + $" {curTo}");
            }
            else if (curFrom == "USD" && curTo == "GBP")
            {
                Console.WriteLine(Math.Round(amount * BGNtoUSD / BGNtoGBP, 2) + $" {curTo}");
            }
            else if (curFrom == "EUR" && curTo == "BGN")
            {
                Console.WriteLine(Math.Round(amount * BGNtoEUR, 2) + $" {curTo}");
            }
            else if (curFrom == "EUR" && curTo == "USD")
            {
                Console.WriteLine(Math.Round(amount * BGNtoEUR / BGNtoUSD, 2) + $" {curTo}");
            }
            else if (curFrom == "EUR" && curTo == "GBP")
            {
                Console.WriteLine(Math.Round(amount * BGNtoEUR / BGNtoGBP, 2) + $" {curTo}");
            }
            else if (curFrom == "GBP" && curTo == "BGN")
            {
                Console.WriteLine(Math.Round(amount * BGNtoGBP, 2) + $" {curTo}");
            }
            else if (curFrom == "GBP" && curTo == "EUR")
            {
                Console.WriteLine(Math.Round(amount * BGNtoGBP / BGNtoEUR, 2) + $" {curTo}");
            }
            else if (curFrom == "GBP" && curTo == "USD")
            {
                Console.WriteLine(Math.Round(amount * BGNtoGBP / BGNtoUSD, 2) + $" {curTo}");
            }
            else if (curFrom == "BGN" && curTo == "USD")
            {
                Console.WriteLine(Math.Round(amount / BGNtoUSD, 2) + $" {curTo}");
            }
            else if (curFrom == "BGN" && curTo == "EUR")
            {
                Console.WriteLine(Math.Round(amount / BGNtoEUR, 2) + $" {curTo}");
            }
            else if (curFrom == "BGN" && curTo == "GBP")
            {
                Console.WriteLine(Math.Round(amount / BGNtoGBP, 2) + $" {curTo}");
            }
        }
    }
}
