import java.text.MessageFormat;
import java.util.HashMap;
import java.util.Map;
import java.util.Scanner;

public class Phonebook {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        Map<String, String> phonebook = new HashMap<String, String>();

        while (true) {
            String input = scan.nextLine();

            if (input.contains("END")){
                break;
            }

            String[] commands = input.split(" ");
            String command = commands[0];
            
            switch (command){
                case "A":
                    if (phonebook.containsKey(commands[1])){
                        phonebook.replace(commands[1],commands[2]);
                    }
                    else {
                        phonebook.put(commands[1],commands[2]);
                    }
                    break;
                case "S":
                    if (phonebook.containsKey(commands[1])){
                        String value = phonebook.get(commands[1]);
                        System.out.println(MessageFormat.format("{0} -> {1}",commands[1],value));
                    }
                    else {
                        System.out.println(MessageFormat.format("Contact {0} does not exist.",commands[1]));
                    }
                    break;
            }
        }
    }
}
    
