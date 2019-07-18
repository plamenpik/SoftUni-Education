using System;

class DifferentIntegersSize
{
    static void Main()
    {
        string num = Console.ReadLine();
        try
        {
            long n = long.Parse(num);

            if (n < 0)
            {
                if (n >= -128)
                {
                    Console.WriteLine($"{n} can fit in:");
                    Console.WriteLine("* sbyte");
                    Console.WriteLine("* short");
                    Console.WriteLine("* int");
                    Console.WriteLine("* long");
                }
                else if (n >= -32768)
                {
                    Console.WriteLine($"{n} can fit in:");
                    Console.WriteLine("* short");
                    Console.WriteLine("* int");
                    Console.WriteLine("* long");
                }
                else if (n >= -2147483648)
                {
                    Console.WriteLine($"{n} can fit in:");
                    Console.WriteLine("* int");
                    Console.WriteLine("* long");
                }
                else if (n >= -9223372036854775808)
                {
                    Console.WriteLine($"{n} can fit in:");
                    Console.WriteLine("* long");
                }
            }
            if (n >= 0)
            {
                if (n <= 255)
                {
                    if (n <= 127)
                    {
                        Console.WriteLine($"{n} can fit in:");
                        Console.WriteLine("* sbyte");
                        Console.WriteLine("* byte");
                        Console.WriteLine("* short");
                        Console.WriteLine("* ushort");
                        Console.WriteLine("* int");
                        Console.WriteLine("* uint");
                        Console.WriteLine("* long");
                    }
                    else
                    {
                        Console.WriteLine($"{n} can fit in:");
                        Console.WriteLine("* byte");
                        Console.WriteLine("* short");
                        Console.WriteLine("* ushort");
                        Console.WriteLine("* int");
                        Console.WriteLine("* uint");
                        Console.WriteLine("* long");
                    }
                }
                else if (n <= 65535)
                {
                    if (n <= 32767)
                    {
                        Console.WriteLine($"{n} can fit in:");
                        Console.WriteLine("* short");
                        Console.WriteLine("* ushort");
                        Console.WriteLine("* int");
                        Console.WriteLine("* uint");
                        Console.WriteLine("* long");
                    }
                    else
                    {
                        Console.WriteLine($"{n} can fit in:");
                        Console.WriteLine("* ushort");
                        Console.WriteLine("* int");
                        Console.WriteLine("* uint");
                        Console.WriteLine("* long");
                    }
                }
                else if (n <= 4294967295)
                {
                    if (n <= 2147483647)
                    {
                        Console.WriteLine($"{n} can fit in:");
                        Console.WriteLine("* int");
                        Console.WriteLine("* uint");
                        Console.WriteLine("* long");
                    }
                    else
                    {
                        Console.WriteLine($"{n} can fit in:");
                        Console.WriteLine("* uint");
                        Console.WriteLine("* long");
                    }
                }
                else if (n <= 9223372036854775807)
                {
                    Console.WriteLine($"{n} can fit in:");
                    Console.WriteLine("* long");
                }
            }
        }
        catch (Exception)
        {
            Console.WriteLine($"{num} can't fit in any type");
        }
    }
}
