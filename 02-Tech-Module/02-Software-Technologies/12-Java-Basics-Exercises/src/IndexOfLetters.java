import java.util.Scanner;

public class IndexOfLetters {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String input1 = scanner.nextLine();

        char[] arr = input1.replaceAll(" ", "").toCharArray();

        for (char c : arr) {
            int ascii = (int) c - 97;
            System.out.println(String.format("%s -> %d", c, ascii ));
        }
    }
}
