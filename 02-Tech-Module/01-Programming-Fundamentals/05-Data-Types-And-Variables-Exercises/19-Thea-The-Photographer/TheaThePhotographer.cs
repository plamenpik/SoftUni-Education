using System;

class TheaThePhotographer
{
    static void Main()
    {
        long photos = long.Parse(Console.ReadLine());
        long filterTimeSeconds = long.Parse(Console.ReadLine());
        long goodPhotosPrecent = long.Parse(Console.ReadLine());
        long uploadTimeForPicture = long.Parse(Console.ReadLine());

        long photosTime = photos * filterTimeSeconds;
        double goodPhotos = Math.Ceiling(photos * goodPhotosPrecent / 100.0);
        long tottalTime = photosTime + ((long)goodPhotos * uploadTimeForPicture);

        TimeSpan picturesTime = TimeSpan.FromSeconds(tottalTime);

        Console.WriteLine($"{picturesTime.Days:D1}:{picturesTime.Hours:D2}:{picturesTime.Minutes:D2}:{picturesTime.Seconds:D2}");

        //long days = 0;
        //long seconds = tottalTime % 60;
        //long minutes = tottalTime / 60;
        //long hours = minutes / 60;
        //days = hours / 24;
        //if (hours > 23)
        //{
        //    hours %= 24;
        //    days++;
        //}
        //if (minutes > 59)
        //{
        //    minutes %= 60;
        //}
        //if (seconds > 59)
        //{
        //    minutes++;
        //}
        //Console.WriteLine($"{days}:{hours:D2}:{minutes:D2}:{seconds:D2}");
    }
}
