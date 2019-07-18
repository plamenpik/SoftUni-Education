using System;
using System.Text.RegularExpressions;

class Third
{
    static void Main()
    {
        double tottalIncome = 0;
        string bar = (@"%([A-Z][a-z]+)%<([A-Za-z]+)>\|([0-9])\|([-+]?[0-9]*\.?[0-9]*)\$");
        //string bar = (@"%([A-Z][a-z]+)%(?:.*)<([A-Za-z]+)>(?:.*)\|([0-9]+)\|([-+]?[0-9]*\.?[0-9]+)\$?");

        string line = Console.ReadLine();

        while (line != "end of shift")
        {
            MatchCollection matches = Regex.Matches(line, bar);
            foreach (Match match in matches)
            {
                int amount = int.Parse(match.Groups[3].Value);
                double price = double.Parse(match.Groups[4].Value);
                double currentIncome = amount * price;
                tottalIncome += currentIncome;
                Console.WriteLine($"{match.Groups[1].Value}: {match.Groups[2].Value} - {currentIncome:f2}");
            }
            line = Console.ReadLine();
        }
        
        Console.WriteLine($"Total income: {tottalIncome:f2}");
    }
}