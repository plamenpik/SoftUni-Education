using System;
using System.Collections.Generic;
using System.Linq;

class ArrayManipulator
{
    static void Main(string[] args)
    {
        List<long> input = Console.ReadLine().Split(' ').Select(long.Parse).ToList();
        string command = Console.ReadLine();

        while (command != "print")
        {
            string[] tokens = command.Split(' ');
            switch (tokens[0])
            {
                case "add":
                    int index = int.Parse(tokens[1]);
                    long element = long.Parse(tokens[2]);
                    input.Insert(index, element);
                    break;
                case "addMany":
                    int index2 = int.Parse(tokens[1]);
                    List<long> elementsToAdd = tokens.Skip(2).Select(long.Parse).ToList();
                    input.InsertRange(index2, elementsToAdd);
                    break;
                case "contains":
                    long element2 = long.Parse(tokens[1]);
                    Console.WriteLine(input.IndexOf(element2));
                    break;
                case "remove":
                    int index3 = int.Parse(tokens[1]);
                    input.RemoveAt(index3);
                    break;
                case "shift":
                    int positions = int.Parse(tokens[1]);
                    for (int i = 0; i < positions; i++)
                    {
                        long lastElement = input[0];
                        for (int j = 0; j < input.Count - 1; j++)
                        {
                            input[j] = input[j + 1];
                        }
                        input[input.Count - 1] = lastElement;
                    }
                    break;
                case "sumPairs":
                    List<long> newList = new List<long>();
                    for (int i = 0; i < input.Count - 1; i += 2)
                    {
                        newList.Add(input[i] + input[i + 1]);
                    }
                    if (input.Count % 2 == 1)
                    {
                        newList.Add(input[input.Count - 1]);
                    }
                    input = newList;
                    break;
            }
            command = Console.ReadLine();
        }
        Console.WriteLine("[" + string.Join(", ", input) + "]");
    }
}
