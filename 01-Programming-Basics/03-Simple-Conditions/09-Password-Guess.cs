using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace PasswordGuess
{
    class PasswordGuess
    {
        static void Main(string[] args)
        {
            string imputPassword = Console.ReadLine();
            string password = "s3cr3t!P@ssw0rd";

            if (password == imputPassword)
            {
                Console.WriteLine("Welcome");
            }
            else
            {
                Console.WriteLine("Wrong password!");
            }
        }
    }
}
