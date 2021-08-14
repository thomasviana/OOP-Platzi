package Java;

class Main {
    public static void main(String[] args) {
        System.out.println("Hola Mundo");
        UberX uberX = new UberX("AMG123", new Account("Andres Herrera", "AND123"), "Chevrolet", "Spark");
        uberX.setPassenger(2);
        uberX.printDataCar();

        UberVan uberVan = new UberVan("QWE567", new Account("Andrea Herrera", "HER456"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();
    }

}