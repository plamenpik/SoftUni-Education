import java.util.Scanner;

public class CensorEmailAddress {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        String eMail = scan.nextLine();
        String text = scan.nextLine();

        String[] splited = eMail.split("@");

        String userName = splited[0];
        String domain = splited[1];

        String stars = "";

        for (int i = 0; i < userName.length(); i++) {
            stars = stars+"*";
        }
        stars = stars +"@"+ domain;

        String result = text.replace(eMail, stars);
        System.out.println(result);
    }
}
