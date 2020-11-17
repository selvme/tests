import java.util.Scanner;

class QueryHandler {
    private static Scanner scanner = new Scanner(System.in);
    private static String query = null;

    static String askUser(){
        while(query == null || query.isEmpty()){
            System.out.print("Введите слово для поиска: ");
            query = scanner.nextLine();
        }
        return query;
    }
}
