using System;

class Arrow
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());

        int width = n + 5;
        int underline = n / 2 + 2;
        int under = n / 2;
        int unders = (width - 9) / 2;

        Console.WriteLine("{0}^{0}", new string('_', underline));
        Console.WriteLine("{0}/|\\{0}", new string('_', underline - 1));
        for (int i = 0; i < n / 2; i++)
        {
            Console.WriteLine("{0}/{1}|||{1}\\{0}", new string('_', under), new string('.', i));
            under--;
        }
        Console.WriteLine("{0}/..|||..\\{0}", new string('_', unders));
        unders++;
        Console.WriteLine("{0}/.|||.\\{0}", new string('_', unders));
        for (int i = 1; i <= n; i++)
        {
            Console.WriteLine("{0}|||{0}", new string('_', (width - 3) / 2));
            if (i == n)
            {
                Console.WriteLine("{0}~~~{0}", new string('_', (width - 3) / 2));
            }
        }
        under = n / 2;
        for (int i = 0; i < n / 2; i++)
        {
            Console.WriteLine("{0}//{1}!{1}\\\\{0}", new string('_', under), new string('.', i));
            under--;
        }
    }
}
