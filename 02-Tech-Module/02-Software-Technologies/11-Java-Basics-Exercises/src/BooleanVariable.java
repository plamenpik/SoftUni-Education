import java.util.Scanner;

public class BooleanVariable {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String input= scanner.nextLine();
        boolean bool = Boolean.parseBoolean(input);

        if (bool){
            System.out.printf("Yes");
        }else{
            System.out.printf("No");
        }
    }
}
