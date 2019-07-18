using System;
using System.Collections.Generic;

class FixEmails
{
    static void Main()
    {
        string input = Console.ReadLine();

        List<string> text = new List<string>();

        while (input != "stop" )
        {
            text.Add(input);
            input = Console.ReadLine();
        }
        text.Add("stop");

        Dictionary<string, string> emails = new Dictionary<string, string>();
        int i = 0;

        while (text[i] != "stop")
        {
            if (!emails.ContainsKey(text[i]))
            {
                emails.Add(text[i], "");
            }
            emails[text[i]] = text[i + 1];
            i += 2;
        }

        foreach (var email in emails)
        {
            if (!(email.Value.EndsWith(".uk") || email.Value.EndsWith(".us")))
            {
                Console.WriteLine($"{email.Key} -> {email.Value}");
            }
        }
    }
}