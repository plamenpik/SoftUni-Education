import java.util.Scanner;

public class FitStringIn20Chars {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String text = scanner.nextLine();
        char[] input = text.toCharArray();

        if (input.length >= 20) {
            System.out.println(text.substring(0, 20));
        } else {
            fitTo20Chars(input);
        }
    }
    static void fitTo20Chars (char[] input){
        char[] result = new char[20];
        for (int i = 0; i < result.length; i++) {
            result[i] = '*';
        }

        for (int i = 0; i < input.length; i++) {
            result[i] = input[i];
        }
        System.out.println(result);
    }
}
