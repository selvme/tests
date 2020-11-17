import java.util.ArrayList;
import java.util.Set;
import java.util.TreeSet;
import java.util.stream.Collectors;

public class Main {

    public static void main(String[] args) {
        Set<Record> data = new TreeSet<>();
        ArrayList<Record> result = new ArrayList<>();
        String search = QueryHandler.askUser();

        System.out.println("Генерация записей...");
        long s = System.nanoTime();
        for (int i=0; i<1_000_000; i++){
            data.add(new Record());
        }
        long e = (System.nanoTime() - s) / 1_000_000;
        System.out.printf("Генерация завершена за %d мс. Колличество уникальных записей - %d \n", e, data.size());

        System.out.println("Начинаем поиск по коллекции...");
        s = System.nanoTime();
        result.addAll(data.stream()
                .filter(record -> record.getName().contains(search))
                .sorted(((o1, o2) -> {
                    if (o1.getDateUpdate() < o2.getDateUpdate())
                        return -1;
                    if (o1.getDateUpdate() > o2.getDateUpdate())
                        return 1;
                    return 0;
                }))
                .collect(Collectors.toCollection(ArrayList::new)));

        System.out.println("Результат поиска: ");
        for (Record r :
                result) {
            System.out.println("  " + r.getName() + " - " + r.getDateUpdate());
        }
        e = (System.nanoTime() - s) / 1_000_000;
        System.out.printf("Поиск завершен за %d мс. Колличество найденых записей - %d \n", e, result.size());
    }
}
