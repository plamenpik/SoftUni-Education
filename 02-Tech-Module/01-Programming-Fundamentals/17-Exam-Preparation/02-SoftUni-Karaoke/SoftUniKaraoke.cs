using System;
using System.Collections.Generic;
using System.Linq;

class SoftUniKaraoke
{
    static void Main()
    {
        List<string> singers = Console.ReadLine().Split(',', StringSplitOptions.RemoveEmptyEntries).ToList();
        List<string> songs = Console.ReadLine().Split(',', StringSplitOptions.RemoveEmptyEntries).ToList();
        Dictionary<string, List<string>> result = new Dictionary<string, List<string>>();

        for (int i = 0; i < singers.Count; i++)
        {
            singers[i] = singers[i].Trim();
        }

        for (int i = 0; i < songs.Count; i++)
        {
            songs[i] = songs[i].Trim();
        }

        while (true)
        {
            string[] command = Console.ReadLine().Split(',', StringSplitOptions.RemoveEmptyEntries).ToArray();

            for (int i = 0; i < command.Length; i++)
            {
                command[i] = command[i].Trim();
            }

            if (command[0] == "dawn")
            {
                if (result.Count == 0)
                {
                    Console.WriteLine("No awards");
                    break;
                }
                break;
            }

            string singer = command[0];
            string song = command[1];
            string award = command[2];

            if (singers.Contains(singer) && songs.Contains(song))
            {
                if (!result.ContainsKey(singer))
                {
                    result.Add(singer, new List<string>());
                }

                if (!result[singer].Contains(award))
                {
                    result[singer].Add(award);
                }
            }
        }

        foreach (var singer in result.OrderByDescending(x => x.Key.Count()))
        {
            Console.WriteLine($"{singer.Key} {singer.Value.Count} awards");

            foreach (var reward in singer.Value)
            {
                Console.WriteLine($"--{reward}");
            }
        }
    }
}
