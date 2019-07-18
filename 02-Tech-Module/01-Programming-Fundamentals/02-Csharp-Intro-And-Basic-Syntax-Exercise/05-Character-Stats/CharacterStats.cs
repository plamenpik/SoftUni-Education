using System;

class CharacterStats
{
    static void Main()
    {
        string charName = Console.ReadLine();
        int currentHealth = int.Parse(Console.ReadLine());
        int maxHealth = int.Parse(Console.ReadLine());
        int currentEnergy = int.Parse(Console.ReadLine());
        int maxEnergy = int.Parse(Console.ReadLine());

        int health = maxHealth - currentHealth;
        int energy = maxEnergy - currentEnergy;

        Console.WriteLine($"Name: {charName}");
        Console.WriteLine($"Health: |{new string ('|', currentHealth)}{new string ('.', health)}|");
        Console.WriteLine($"Energy: |{new string('|', currentEnergy)}{new string('.', energy)}|");
    }
}
