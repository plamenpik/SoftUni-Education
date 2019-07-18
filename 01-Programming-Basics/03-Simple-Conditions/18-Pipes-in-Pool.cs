using System;

class PipesInPool
{
    static void Main()
    {
        int poolVolume = int.Parse(Console.ReadLine());
        int firstPipeDebit = int.Parse(Console.ReadLine());
        int secondPipeDebit = int.Parse(Console.ReadLine());
        double workerHoursMissing = double.Parse(Console.ReadLine());

        double amountFilled = firstPipeDebit * workerHoursMissing + secondPipeDebit * workerHoursMissing;

        if (poolVolume >= amountFilled)
        {
            double firtstPipeProcent = Math.Truncate(((workerHoursMissing * firstPipeDebit) / amountFilled) * 100);
            double secondPipeProcent = Math.Truncate(((workerHoursMissing * secondPipeDebit) / amountFilled) * 100);
            double poolFiledProcent = Math.Truncate((amountFilled / poolVolume) * 100);
            Console.WriteLine($"The pool is {poolFiledProcent}% full. Pipe 1: {firtstPipeProcent}%. Pipe 2: {secondPipeProcent}%.");
        }
        else
        {
            double poolOverflow = amountFilled - poolVolume;
            Console.WriteLine($"For {workerHoursMissing} hours the pool overflows with {poolOverflow:F1} liters.");
        }
    }
}
