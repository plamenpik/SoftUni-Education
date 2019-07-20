import java.util.Scanner;

public class ReverseCharacters {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String input = "";
        for (int i = 0; i < 3 ; i++) {
            input += scanner.nextLine();
        }
        char a = input.charAt(2);
        char b = input.charAt(1);
        char c = input.charAt(0);
        System.out.printf("%c%c%c", a, b, c);
    }
}
