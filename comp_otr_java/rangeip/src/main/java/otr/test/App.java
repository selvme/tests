package otr.test;

/**
 * @author Alexandr Yudin
 * @version 1.0
 *
 */
public class App 
{
    public static void main( String[] args )
    {
        Printer range = new Printer();
        range.printRange(Console.askUser());
    }
}
