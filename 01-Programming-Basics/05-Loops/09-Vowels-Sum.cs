using System;

    class VowelsSum
    {
        static void Main()
        {
            string s = Console.ReadLine();
            int vowelsSum = 0;
            for (int i = 0; i < s.Length ; i++)
            {
            if (s[i] == 'a')
                    vowelsSum += 1;
                else if (s[i] == 'e')
                    vowelsSum += 2;
                else if (s[i] == 'i')
                    vowelsSum += 3;
                else if (s[i] == 'o')
                    vowelsSum += 4;
                else if (s[i] == 'u')
                    vowelsSum += 5;
            }
            Console.WriteLine(vowelsSum);
        }
    }
