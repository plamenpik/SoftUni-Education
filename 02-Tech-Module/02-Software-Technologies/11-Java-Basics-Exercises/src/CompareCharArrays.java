import java.util.Scanner;

public class CompareCharArrays {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String input1 = scanner.nextLine();
        String input2 = scanner.nextLine();

        char[] first = input1.replaceAll(" ", "").toCharArray();
        char[] second = input2.replaceAll(" ", "").toCharArray();

        int minLength = 0;

        if (first.length >= second.length) {
            minLength = second.length;
        } else {
            minLength = first.length;
        }

        for (int i = 0; i < minLength; i++) {
            if (first[i] < second[i]) {
                for (int j = 0; j <first.length ; j++) {
                    System.out.print(first[j]);
                }
                System.out.println();

                for (int j = 0; j <second.length ; j++) {
                    System.out.print(second[j]);
                }
                System.out.println();
                return;
            } else if (first[i] > second[i]) {
                for (int j = 0; j <second.length ; j++) {
                    System.out.print(second[j]);
                }
                System.out.println();

                for (int j = 0; j <first.length ; j++) {
                    System.out.print(first[j]);
                }
                System.out.println();
                return;
            }
        }
        if (first.length < second.length) {
            for (int j = 0; j <first.length ; j++) {
                System.out.print(first[j]);
            }
            System.out.println();

            for (int j = 0; j <second.length ; j++) {
                System.out.print(second[j]);
            }
            System.out.println();
        } else {
            for (int j = 0; j <second.length ; j++) {
                System.out.print(second[j]);
            }
            System.out.println();

            for (int j = 0; j <first.length ; j++) {
                System.out.print(first[j]);
            }
            System.out.println();
        }
    }
}
