using System;

class BlankReceipt
{
    static void Main()
    {
        PrintReceipt();
    }

    static void PrintReceipt()
    {
        PrintReceiptHeadder();
        PrintReceiptBody();
        PrintReceiptFooter();
    }

    static void PrintReceiptHeadder()
    {
        Console.WriteLine("CASH RECEIPT");
        Console.WriteLine("------------------------------");
    }

    static void PrintReceiptBody()
    {
        Console.WriteLine("Charged to____________________");
        Console.WriteLine("Received by___________________");
    }

    static void PrintReceiptFooter()
    {
        Console.WriteLine("------------------------------");
        Console.WriteLine("\u00A9 SoftUni");
    }
}
