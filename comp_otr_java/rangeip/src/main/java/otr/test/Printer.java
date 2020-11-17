package otr.test;

import java.util.LinkedList;
import java.util.List;

/**
 *
 */
class Printer {

    boolean printRange(List<String> range){
        LinkedList<Integer> firstIP = new LinkedList<>(parse(range.get(0)));
        LinkedList<Integer> lastIP = new LinkedList<>(parse(range.get(1)));
        int count = 1;
        int diff = validate(lastIP.getLast(), firstIP.getLast()) ? (lastIP.getLast() - firstIP.getLast()) : 0;
        if (diff == 0){
            System.out.println("IP адреса должны быть корректными для вычисления диапазона!");
            return false;
        }
        while (diff > 1){
            System.out.printf("%d.%d.%d.%d\n", firstIP.getFirst(), firstIP.get(1), firstIP.get(2), firstIP.get(3) + count++);
            diff--;
        }
        return true;
    }

    private List<Integer> parse(String string){
        List<Integer> tmp = new LinkedList<>();
        String[] arrStr = string.split("(\\.|$)+");
        for (String s :
                arrStr) {
            tmp.add(Integer.parseInt(s));
        }
        return tmp;
    }

    private boolean validate(int num1, int num2){
        return num1 > num2 && (num1 - num2) >= 1 && (num1 - num2) <= 254;
    }
}
