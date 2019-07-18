using System;
using System.Collections.Generic;
using System.Linq;

class TseamAccount
{
    static void Main()
    {
        List<string> account = Console.ReadLine().Split().ToList();
        string[] command = Console.ReadLine().Split();

        while (command[0] != "Play!")
        {
            switch (command[0])
            {
                case "Install":
                    if (!account.Contains(command[1]))
                    {
                        account.Add(command[1]);
                    }
                    break;
                case "Uninstall":
                    if (account.Contains(command[1]))
                    {
                        account.Remove(command[1]);
                    }
                    break;
                case "Update":
                    if (account.Contains(command[1]))
                    {
                        account.Remove(command[1]);
                        account.Add(command[1]);
                    }
                    break;
                case "Expansion":
                    string[] expansion = command[1].Split('-').ToArray();
                    int index = account.IndexOf(expansion[0]);
                    if (account.Contains(expansion[0]))
                    {
                        //int index = 0;

                        //for (int i = 0; i < account.Count; i++)
                        //{
                        //    if (account[i].Contains(expansion[0]))
                        //    {
                        //        index = i + 1;
                        //        break;
                        //    }
                        //}

                        account.Insert(index + 1, string.Join(":", expansion));
                    }
                    break;
            }
            command = Console.ReadLine().Split();
        }
        //Console.WriteLine("---------------------------------------");
        Console.WriteLine(string.Join(" ", account));
    }
}