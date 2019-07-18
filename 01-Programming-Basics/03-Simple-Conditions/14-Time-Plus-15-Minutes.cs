using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace TimePlus15Minutes
{
    class TimePlus15Minutes
    {
        static void Main(string[] args)
        {
            int hour = int.Parse(Console.ReadLine());
            int minute = int.Parse(Console.ReadLine());

            int sum = ((hour * 60) + minute + 15);
            int resultHour = sum / 60;
            if (resultHour >= 24)
            {
                resultHour -= 24;
            }
            var resultMinutes = sum % 60;

            Console.WriteLine("{0}:{1:00}", resultHour, resultMinutes);
        }
    }
}
