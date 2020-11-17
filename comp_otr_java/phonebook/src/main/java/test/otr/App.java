package test.otr;

/**
 * @author Alexandr Yudin
 * @version 1.0
 *
 */
public class App 
{
    public static void main( String[] args )
    {
        System.out.println("///////////////////TASK 1/////////////////////");
        PhoneBook book = new PhoneBook();

        book.addNewRec("Иванов А.С.", new PhoneRec("89999999998"));
        book.addNewRec("Петров В.В.", new PhoneRec("89999999999", "89999999996"));
        book.addNewRec("Капустин А.Г.", new PhoneRec("89999999999", "89999999199", "89999999919"));
        book.addNewRec("Сидоров С.А.", new PhoneRec("89999999997"));
        book.addNewRec("Пашутин П.П.", new PhoneRec("89999999995"));

        book.addNewRec("Петров В.В.", new PhoneRec("89999992399"));

        book.findPhoneByName(Console.askUser());
    }
}
