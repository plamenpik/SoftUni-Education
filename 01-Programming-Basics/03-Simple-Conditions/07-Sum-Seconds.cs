using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SumSeconds
{
    class SumSeconds
    {
        static void Main(string[] args)
        {
            int time1 = int.Parse(Console.ReadLine());
            int time2 = int.Parse(Console.ReadLine());
            int time3 = int.Parse(Console.ReadLine());

            int timeSum = time1 + time2 + time3;
            var result = 0;

            if (timeSum <= 59)
            {
                result = timeSum;
                Console.WriteLine("0:{0:00}", result);
            }
            else if (timeSum >= 60 && timeSum <= 119)
            {
                result = timeSum - 60;
                Console.WriteLine("1:{0:00}", result);
            }
            else if (timeSum >= 120 && timeSum <= 179)
            {
                result = timeSum - 120;
                Console.WriteLine("2:{0:00}", result);
            }
        }
    }
}
