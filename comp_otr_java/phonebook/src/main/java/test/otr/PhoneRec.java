package test.otr;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

class PhoneRec {
    private List<String> phone;

    PhoneRec(String... phone){
        this.phone = new ArrayList<>();
        this.phone.addAll(Arrays.asList(phone));
    }

    @Override
    public String toString() {
        StringBuilder result = new StringBuilder();
        short num = 1;
        for (String phone :
                this.phone) {
            result.append(num).append(". ").append(phone).append("\n");
            num++;
        }
        return result.toString();
    }
}
