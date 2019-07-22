using System;
using System.Numerics;

class CenturiesToNanoseconds
{
    static void Main()
    {
        byte centuries = byte.Parse(Console.ReadLine());

        short years = (short)(centuries * 100);
        int days = (int)(years * 365.2422);
        int hours = days * 24;
        long minutes = hours * 60;
        long seconds = minutes * 60;
        long miliSeconds = seconds * 1000;
        BigInteger microSeconds = miliSeconds * 1000;
        BigInteger nanoSeconds = microSeconds * 1000;

        Console.WriteLine($"{centuries} centuries = {years} years = {days} days = {hours} hours = {minutes} minutes = {seconds} seconds = {miliSeconds} milliseconds = {microSeconds} microseconds = {nanoSeconds} nanoseconds");
    }
}
