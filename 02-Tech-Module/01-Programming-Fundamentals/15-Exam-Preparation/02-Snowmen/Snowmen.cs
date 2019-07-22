using System;
using System.Collections.Generic;
using System.Linq;

class Snowmen
{
    static void Main()
    {
        List<int> snowmens = Console.ReadLine().Split().Select(x => int.Parse(x)).ToList();

        int length = snowmens.Count;

        while (length != 1)
        {
            List<int> forRemove = new List<int>();
            for (int i = 0; i < length; i++)
            {
                int attacker = i;
                int target = snowmens[i];

                if (target > length)
                {
                    target %= length;
                }

                int diff = Math.Abs(attacker - target);

                if (diff % 2 == 0 && diff != 0)
                {
                    Console.WriteLine($"{attacker} x {target} -> {attacker} wins");
                }
                if (diff % 2 != 0)
                {
                    forRemove.Add(i);
                }
                if (diff == 0)
                {
                    Console.WriteLine($"{attacker} performed harakiri");
                    forRemove.Add(i);
                }
            }

            for (int i = 0; i < forRemove.Count; i++)
            {
                snowmens.RemoveAt(forRemove[i]);
            }
            length = snowmens.Count;
        }
    }
}


//using System;
//using System.Collections.Generic;
//using System.Linq;

//class StartUp
//{
//    static void Main()
//    {
//        try
//        {
//            var sequanceOfElements = Console.ReadLine()
//                .Split()
//                .Select(int.Parse)
//                .ToList();
//            if (sequanceOfElements.Count == 0 || sequanceOfElements.Count == 1)
//            {
//                return;
//            }

//            var listOfLosers = new List<int>();
//            var listOfWinners = new List<int>();

//            for (int index = 0; index < sequanceOfElements.Count; index++)
//            {
//                if (!listOfLosers.Contains(index))
//                {
//                    int target = sequanceOfElements[index];
//                    if (target >= sequanceOfElements.Count)
//                    {
//                        target %= sequanceOfElements.Count;
//                    }

//                    var difference = Math.Abs(index - target);

//                    if (difference % 2 == 0 && difference != 0)
//                    {
//                        //attacker wins

//                        listOfWinners.Add(index);
//                        if (!listOfLosers.Contains(target))
//                        {
//                            listOfLosers.Add(target);
//                        }

//                        if (!listOfLosers.Contains(index))
//                        {
//                            Console.WriteLine($"{index} x {target} -> {index} wins");
//                        }
//                    }
//                    else if (difference % 2 == 1)
//                    {
//                        //target wins

//                        if (!listOfLosers.Contains(index))
//                        {
//                            listOfLosers.Add(index);
//                        }

//                        Console.WriteLine($"{index} x {target} -> {target} wins");
//                    }
//                    else if (difference == 0)
//                    {
//                        //attackerElement makes harakiri

//                        if (!listOfLosers.Contains(index))
//                        {
//                            listOfLosers.Add(index);
//                        }

//                        Console.WriteLine($"{index} performed harakiri");
//                    }
//                    //stop program if only 1 element left

//                    if (sequanceOfElements.Count - listOfLosers.Count == 1)
//                    {
//                        break;
//                    }
//                }
//                //check if we make all iterations

//                if (index + 1 == sequanceOfElements.Count)
//                {
//                    var resultSequance = new List<int>();
//                    foreach (var element in listOfWinners)
//                    {
//                        var currentEl = sequanceOfElements.ElementAt(element);

//                        resultSequance.Add(currentEl);
//                    }

//                    listOfWinners.Clear();
//                    listOfLosers.Clear();
//                    sequanceOfElements = resultSequance;

//                    index = -1;
//                }
//            }
//        }
//        catch (Exception e)
//        {
//            Console.WriteLine(e.Message);
//        }
//    }
//}