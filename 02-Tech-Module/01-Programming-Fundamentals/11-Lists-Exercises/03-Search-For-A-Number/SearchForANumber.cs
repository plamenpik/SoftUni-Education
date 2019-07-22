using System;
using System.Collections.Generic;
using System.Linq;

class SearchForANumber
{
    static void Main()
    {
        List<int> numbers = Console.ReadLine().Split().Select(int.Parse).ToList();
        int[] arr = Console.ReadLine().Split().Select(int.Parse).ToArray();

        List<int> verji = new List<int>();

        for (int i = 0; i < arr[0]; i++)
        {
            verji.Add(numbers[i]);
        }
        List<int> verjiNew = new List<int>(); 
        for (int i = arr[1]; i < verji.Count; i++)
        {
            verjiNew.Add(verji[i]);
        }
        bool isFound = verjiNew.Contains(arr[2]);
        if (isFound)
        {
            Console.WriteLine("YES!");
        }
        else
        {
            Console.WriteLine("NO!");
        }
    }
}
