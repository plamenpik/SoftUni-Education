using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace InchesToCentimeters
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Inches = ");
            var a = double.Parse(Console.ReadLine());
            var Centimeters = a * 2.54;
            Console.Write("Centimeters = ");
            Console.WriteLine(Centimeters);
        }
    }
}
