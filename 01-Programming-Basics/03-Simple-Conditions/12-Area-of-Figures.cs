using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace AreaOfFigures
{
    class AreaOfFigures
    {
        static void Main(string[] args)
        {
            string figureType = Console.ReadLine();

            if (figureType == "square")
            {
                double side = double.Parse(Console.ReadLine());
                Console.WriteLine(Math.Round(side * side, 3));
            }
            else if (figureType == "rectangle")
            {
                double sideA = double.Parse(Console.ReadLine());
                double sideB = double.Parse(Console.ReadLine());
                Console.WriteLine(Math.Round(sideA * sideB, 3));
            }
            else if (figureType == "circle")
            {
                double radius = double.Parse(Console.ReadLine());
                Console.WriteLine(Math.Round(Math.PI * radius * radius, 3));
            }
            else if (figureType == "triangle")
            {
                double side = double.Parse(Console.ReadLine());
                double heigh = double.Parse(Console.ReadLine());
                Console.WriteLine(Math.Round(side * heigh / 2, 3));
            }
        }
    }
}
