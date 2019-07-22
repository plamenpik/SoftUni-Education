using System;

class HelloName
{
    static void Main()
    {
        string name = Console.ReadLine();
        Greetings(name);
    }

    static void Greetings(string name)
    {
        Console.WriteLine($"Hello, {name}!");
    }
}
