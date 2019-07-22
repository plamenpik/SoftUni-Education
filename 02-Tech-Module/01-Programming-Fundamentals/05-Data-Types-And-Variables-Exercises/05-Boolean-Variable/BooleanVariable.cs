using System;

class BooleanVariable
{
    static void Main()
    {
        string boolean = Console.ReadLine();

        bool boolean1 = Convert.ToBoolean(boolean);

        if (boolean1)
        {
            Console.WriteLine("Yes");
        }
        else
        {
            Console.WriteLine("No");
        }
    }
}
