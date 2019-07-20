import java.util.Arrays;
import java.util.Scanner;

public class MostFrequentNumber {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();

        String[] integerStrings = input.split(" ");

        int[] nums = new int[integerStrings.length];

        for (int i = 0; i < nums.length; i++){
            nums[i] = Integer.parseInt(integerStrings[i]);
        }


        int[] counter = new int[65536];

        for (int i : nums) {
            counter[i]++;
        }


        int max = Arrays.stream(counter).max().getAsInt();

        for (int i = 0; i < nums.length; i++)
        {
            if (counter[nums[i]] == max)
            {
                System.out.println(nums[i]);
                return;
            }
        }
    }

}
