﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CelsiustoFahrenheit
{
    class CelsiusToFahrenheit
    {
        static void Main(string[] args)
        {
            var celsius = double.Parse(Console.ReadLine());

            var fahrenheit = (celsius * 1.8) + 32;
            Console.WriteLine(Math.Round(fahrenheit, 2));
        }
    }
}
