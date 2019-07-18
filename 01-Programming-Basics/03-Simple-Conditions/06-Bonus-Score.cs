using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BonusScore
{
    class BonusScore
    {
        static void Main(string[] args)
        {
            int num = int.Parse(Console.ReadLine());
            var bonusScore = 0.0;

            if (num <= 100)
            {
                bonusScore = 5;
                if (num % 2 == 0)
                {
                    bonusScore += 1;
                }
                else if (num % 5 == 0)
                {
                    bonusScore += 2;
                }
                Console.WriteLine(bonusScore);
                Console.WriteLine(num + bonusScore);
            }
            if (num > 100 && num < 1000)
            {
                bonusScore = num * 0.2;
                if (num % 2 == 0)
                {
                    bonusScore += 1;
                }
                else if (num % 5 == 0)
                {
                    bonusScore += 2;
                }
                Console.WriteLine(bonusScore);
                Console.WriteLine(num + bonusScore);
            }
            if (num >= 1000)
            {
                bonusScore = num * 0.1;
                if (num % 2 == 0)
                {
                    bonusScore += 1;
                }
                else if (num % 5 == 0)
                {
                    bonusScore += 2;
                }
                Console.WriteLine(bonusScore);
                Console.WriteLine(num + bonusScore);
            }
        }
    }
}
