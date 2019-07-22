using System;
using System.Collections.Generic;

class AMinerTask
{
    static void Main()
    {
        string input = Console.ReadLine();

        List<string> res = new List<string>();

        while (input != "stop")
        {
            res.Add(input);
            input = Console.ReadLine();
        }
        res.Add("stop");

        Dictionary<string, long> resources = new Dictionary<string, long>();
        int i = 0;

        while (res[i] != "stop")
        {
            if (!resources.ContainsKey(res[i]))
            {
                resources.Add(res[i], 0);
            }
            resources[res[i]] += long.Parse(res[i + 1]);
            i += 2;
        }

        foreach (var item in resources)
        {
            Console.WriteLine($"{item.Key} -> {item.Value}");
        }
    }
}