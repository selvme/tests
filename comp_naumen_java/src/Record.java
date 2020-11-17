class Record implements Comparable<Record>{
    private String name;
    private int dateUpdate;

    Record(){
        this.name = GenerateFields.generateName();
        this.dateUpdate = GenerateFields.generateDate();
    }
    public String getName() {
        return name;
    }
    public int getDateUpdate() {
        return dateUpdate;
    }

    @Override
    public int compareTo(Record o) {
        return this.name.compareTo(o.getName());
    }
}
