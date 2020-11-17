import java.security.SecureRandom;
import java.util.Calendar;
import java.util.GregorianCalendar;

class GenerateFields {
    private static SecureRandom random = new SecureRandom();

    static String generateName(){
        return ("Class-" + random.nextLong());
    }

    static int generateDate(){
//        GregorianCalendar gc = new GregorianCalendar();
//
//        int year = randBetween(1900, 2010);
//
//        gc.set(Calendar.YEAR, year);
//
//        int dayOfYear = randBetween(1, gc.getActualMaximum(Calendar.DAY_OF_YEAR));
//
//        gc.set(Calendar.DAY_OF_YEAR, dayOfYear);
//
//        return (Integer.valueOf(String.valueOf(gc.get(Calendar.YEAR)) + (gc.get(Calendar.MONTH) + 1) + gc.get(Calendar.DAY_OF_MONTH)));
        return 19900514;
    }

    private static int randBetween(int start, int end) {
        return start + (int)Math.round(Math.random() * (end - start));
    }
}
