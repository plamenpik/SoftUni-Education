using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace EqualWords
{
    class EqualWords
    {
        static void Main(string[] args)
        {
            string wordA = Console.ReadLine();
            string wordB = Console.ReadLine();

            if (wordA.ToLower() == wordB.ToLower())
            {
                Console.WriteLine("yes");
            }
            else
            {
                Console.WriteLine("no");
            }
        }
    }
}
