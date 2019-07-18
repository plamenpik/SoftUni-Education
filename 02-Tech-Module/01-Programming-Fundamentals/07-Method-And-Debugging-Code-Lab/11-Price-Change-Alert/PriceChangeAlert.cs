using System;

class PriceChangeAlert
{
    static void Main()
    {
        int priceNumber = int.Parse(Console.ReadLine());
        double threshold = double.Parse(Console.ReadLine());
        double givenPrices = double.Parse(Console.ReadLine());

        for (int i = 0; i < priceNumber - 1; i++)
        {
            double priceCount = double.Parse(Console.ReadLine());
            double divider = Precentage(givenPrices, priceCount);
            bool isSignificantDifference = HaveDiffrance(divider, threshold);
            string notification = DiffranceNotification(priceCount, givenPrices, divider, isSignificantDifference);
            Console.WriteLine(notification);
            givenPrices = priceCount;
        }
    }

    static string DiffranceNotification(double priceCount, double givenPrices, double divider, bool isSignificantDifference)
    {
        string haveChange = "";

        if (divider == 0)
        {
            haveChange = string.Format("NO CHANGE: {0}", priceCount);
        }
        else if (!isSignificantDifference)
        {
            haveChange = string.Format("MINOR CHANGE: {0} to {1} ({2:F2}%)", givenPrices, priceCount, divider);
        }
        else if (isSignificantDifference && (divider > 0))
        {
            haveChange = string.Format("PRICE UP: {0} to {1} ({2:F2}%)", givenPrices, priceCount, divider);
        }
        else if (isSignificantDifference && (divider < 0))
        {
            haveChange = string.Format("PRICE DOWN: {0} to {1} ({2:F2}%)", givenPrices, priceCount, divider);
        }
            
        return haveChange;
    }

    static bool HaveDiffrance(double mergin, double isDiff)
    {
        if (Math.Abs(mergin) >= isDiff)
        {
            return true;
        }

        return false;
    }

    static double Precentage(double givenPrices, double priceCount)
    {
        double result = (priceCount - givenPrices) / givenPrices;
        return result;
    }
}
