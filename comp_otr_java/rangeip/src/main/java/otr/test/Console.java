package otr.test;

import java.util.*;

/**
 *
 */
class Console {

    static List<String> askUser(){
        Scanner scanner = new Scanner(System.in);
        List<String> adresses = new ArrayList<>();
        String line;
        String ask = "начальный";
        while(adresses.size() < 2){

            System.out.printf("Введите %s IP адрес (например 192.168.1.1): ", ask);

            if (adresses.size() < 1){
                if (scanner.hasNextLine()){
                    line = scanner.nextLine();
                    if (!line.isEmpty() && isCorrect(line)){
                        adresses.add(line);
                        ask = "конечный";
                    }else{
                        System.out.println("Вы ввели не корректные данные, попробуйте еще раз...");
                    }
                }else {
                    System.out.println("Не могу прочесть...");
                }
            }else {
                if (scanner.hasNextLine()){
                    line = scanner.nextLine();
                    if (!line.isEmpty() && isCorrect(line) && matchIP(adresses.get(0), line)){
                        adresses.add(line);
                    }else{
                        System.out.println("Вы ввели не корректные данные, попробуйте еще раз...");
                    }
                }else {
                    System.out.println("Не могу прочесть...");
                }
            }

        }
        return adresses;
    }

    private static boolean isCorrect(String data){
        return (!data.isEmpty() && data.matches("^(\\d{1,3}\\.){3}\\d{1,3}$"));
    }

    private static boolean matchIP(String first, String second){
        List<String> fArr = new ArrayList<>();
        fArr.addAll(Arrays.asList(first.split("\\.")));
        fArr.remove(3);
        List<String> sArr = new ArrayList<>();
        sArr.addAll(Arrays.asList(second.split("\\.")));
        sArr.remove(3);

        return fArr.containsAll(sArr);
    }
}
