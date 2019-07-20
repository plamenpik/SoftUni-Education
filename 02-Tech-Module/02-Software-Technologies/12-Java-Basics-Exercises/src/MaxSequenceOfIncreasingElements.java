import java.util.Scanner;

public class MaxSequenceOfIncreasingElements {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();

        String[] integerStrings = input.split(" ");

        int[] nums = new int[integerStrings.length];

        for (int i = 0; i < nums.length; i++){
            nums[i] = Integer.parseInt(integerStrings[i]);
        }


        int start = 0;
        int lenght = 1;
        int bestStart = 0;
        int bestLenght = 1;

        for (int i = 1; i < nums.length; i++)
        {
            if (nums[i] > (nums[i - 1]))
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

        for (int i = bestStart; i < bestStart + bestLenght; i++)
        {
            System.out.print(nums[i] + " ");
        }
        System.out.println();
    }
}
