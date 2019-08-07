using System;
using System.Collections.Generic;
using System.Linq;

class DragonArmy
{
    static void Main()
    {
        int n = int.Parse(Console.ReadLine());
        Dictionary<string, List<Dragon>> dragonArmy = new Dictionary<string, List<Dragon>>();

        for (int i = 0; i < n; i++)
        {
            string input = Console.ReadLine();
            string[] dragonStats = input.Split();
            string type = dragonStats[0];
            Dragon dragon = new Dragon(dragonStats[1], ParseNInt(dragonStats[2]), ParseNInt(dragonStats[3]), ParseNInt(dragonStats[4]));

            if (!dragonArmy.ContainsKey(type))
            {
                dragonArmy[type] = new List<Dragon>();
            }

            int index = dragonArmy[type].FindIndex(item => item.Name == dragon.Name);
            if (index >= 0)
            {
                dragonArmy[type][index] = dragon;
            }
            else
            {
                dragonArmy[type].Add(dragon);
            }

            
        }

        foreach (var type in dragonArmy)
        {
            double damgeAvrg = 0;
            double healthAvrg = 0;
            double armorAvrg = 0;
            int dragonsCount = dragonArmy[type.Key].Count;

            Console.Write($"{type.Key}::");
            foreach (var dragon in dragonArmy[type.Key])
            {
                damgeAvrg += (double)dragon.Damage;
                healthAvrg += (double)dragon.Health;
                armorAvrg += (double)dragon.Armor;
            }

            Console.WriteLine($"({(damgeAvrg / dragonsCount):F2}/{(healthAvrg / dragonsCount):F2}/{(armorAvrg / dragonsCount):F2})");
            foreach (var dragon in dragonArmy[type.Key].OrderBy(x => x.Name))
            {
                Console.WriteLine(dragon.ToString());
            }
        }
    }

    public static int? ParseNInt(string value)
    {
        int intValue;
        if (int.TryParse(value, out intValue))
        {
            return intValue;
        }
        return null;
    }
}

class Dragon
{
    private string name;
    public string Name
    {
        get
        {
            return name;
        }

        set
        {
            name = value;
        }
    }

    private int damage;
    public int? Damage
    {
        get
        {
            return damage;
        }

        set
        {
            if (value == null)
            {
                damage = 45;
            }
            else
            {
                damage = (int)value;
            }
        }
    }

    private int health;
    public int? Health
    {
        get
        {
            return health;
        }

        set
        {
            if (value == null)
            {
                health = 250;
            }
            else
            {
                health = (int)value;
            }
        }
    }

    private int armor;
    public int? Armor
    {
        get
        {
            return armor;
        }

        set
        {
            if (value == null)
            {
                armor = 10;
            }
            else
            {
                armor = (int)value;
            }
        }
    }

    public Dragon(string name, int? damage, int? health, int? armor)
    {
        Name = name;
        Damage = damage;
        Health = health;
        Armor = armor;
    }

    public override string ToString()
    {
        return $"-{this.Name} -> damage: {this.Damage}, health: {this.Health}, armor: {this.Armor}";
    }
}