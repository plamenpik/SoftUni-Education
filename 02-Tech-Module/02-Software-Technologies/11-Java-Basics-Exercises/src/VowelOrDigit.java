import java.util.Scanner;

public class VowelOrDigit {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();

        if (tryParseInt(input)) {
            System.out.printf("digit");
        }else{
            switch (input){
                case "a":
                    System.out.printf("vowel");
                    break;
                case "e":
                    System.out.printf("vowel");
                    break;
                case "i":
                    System.out.printf("vowel");
                    break;
                case "o":
                    System.out.printf("vowel");
                    break;
                case "u":
                    System.out.printf("vowel");
                    break;
                    default:
                        System.out.println("other");
                        break;
            }
        }

    }

    static boolean tryParseInt(String value) {
        try {
            Integer.parseInt(value);
            return true;
        } catch (NumberFormatException e) {
            return false;
        }
    }
}


