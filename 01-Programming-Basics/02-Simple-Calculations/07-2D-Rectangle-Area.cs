using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace RectangleArea2D
{
    class RectangleArea2D
    {
        static void Main(string[] args)
        {
            var x1 = double.Parse(Console.ReadLine());
            var y1 = double.Parse(Console.ReadLine());
            var x2 = double.Parse(Console.ReadLine());
            var y2 = double.Parse(Console.ReadLine());

            var x = Math.Max(x1, x2) - Math.Min(x1, x2);
            var y = Math.Max(y1, y2) - Math.Min(y1, y2);
            var area = (x * y);
            var peri = ((x + y) * 2);
            Console.WriteLine(area);
            Console.WriteLine(peri);
        }
    }
}
    