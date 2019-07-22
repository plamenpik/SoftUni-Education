using System;
using System.Collections.Generic;

    class PhonebookUpgrade
    { 
        static void Main()
        {
            string command = Console.ReadLine();

            string[] tokens = command.Split();
            SortedDictionary<string, string> phonebook = new SortedDictionary<string, string>();

            while (!(command == "END"))
            {
                switch (tokens[0])
                {
                    case "A":
                        if (!phonebook.ContainsKey(tokens[1]))
                        {
                            phonebook.Add(tokens[1], "");
                        }
                        phonebook[tokens[1]] = tokens[2];
                        break;
                    case "S":
                        if (phonebook.ContainsKey(tokens[1]))
                        {
                            Console.WriteLine($"{tokens[1]} -> {phonebook[tokens[1]]}");
                        }
                        else
                        {
                            Console.WriteLine($"Contact {tokens[1]} does not exist.");
                        }
                        break;
                    case "ListAll":
                        foreach (var contact in phonebook)
                        {
                            Console.WriteLine($"{contact.Key} -> {contact.Value}");
                        }
                        break;
                }
                command = Console.ReadLine();
                tokens = command.Split();
            }
        }
    }
