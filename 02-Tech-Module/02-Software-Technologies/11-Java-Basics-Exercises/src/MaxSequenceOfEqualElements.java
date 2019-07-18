import java.util.Arrays;
import java.util.Scanner;

public class MaxSequenceOfEqualElements {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();

        String[] integerStrings = input.split(" ");

        int[] numbers = new int[integerStrings.length];

        for (int i = 0; i < numbers.length; i++){
            numbers[i] = Integer.parseInt(integerStrings[i]);
        }

        int start = 0;
        int lenght = 1;
        int bestStart = 0;
        int bestLenght = 1;

        for (int i = 1; i < numbers.length; i++)
        {
            if (numbers[i] == numbers[i - 1])
            {
                lenght++;

                if (bestLenght < lenght)
                {
                    bestLenght = lenght;
                    bestStart = start;
                }
            }
            else
            {
                start = i;
                lenght = 1;
            }

        }

        for (int i = bestStart; i < bestLenght + bestStart; i++)
        {
            System.out.print(numbers[i] + " ");
        }
        System.out.println();
    }
}
