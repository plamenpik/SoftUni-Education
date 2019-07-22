using System;
using System.Collections.Generic;

class ProgMemoryView
{
    static void Main()
    {
        string line = Console.ReadLine();

        string result = "";
        List<string> words = new List<string>();

        while (line != "Visual Studio crash")
        {
            result += line + " ";
            line = Console.ReadLine();
        }

        string[] allLinens = result.Split(' ', StringSplitOptions.RemoveEmptyEntries);

        for (int i = 0; i < allLinens.Length; i++)
        {
            if (allLinens[i] == "32656" && allLinens[i + 1] == "19759" && allLinens[i + 2] == "32763" && allLinens[i + 3] == "0" && allLinens[i + 5] == "0")
            {
                int wordLength = int.Parse(allLinens[i + 4]);
                string word = "";

                for (int j = i + 6; j <= i + 6 + wordLength; j++)
                {
                    word += (char)int.Parse(allLinens[j]);
                }
                words.Add(word);
            }
        }
        Console.WriteLine(string.Join("\n", words));
    }
}