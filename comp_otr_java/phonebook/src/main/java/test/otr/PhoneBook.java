package test.otr;

import java.util.HashMap;
import java.util.Map;

final class PhoneBook{
    private Map<String, PhoneRec> map;

    PhoneBook(){
        map = new HashMap<>();
    }

    void addNewRec(String key, PhoneRec value){
        map.put(key, value);
    }

    void findPhoneByName(String name) {
        PhoneRec data = map.get(name);
        if (data != null) {
            System.out.println(data);
        } else {
            System.out.println("Такого абонента не существует!");
        }
    }

    @Override
    public String toString() {
        return map.toString();
    }
}
