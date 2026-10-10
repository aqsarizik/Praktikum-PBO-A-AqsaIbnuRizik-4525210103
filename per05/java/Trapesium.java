public class Trapesium  extends BangunDatar {

    private final double sisiA;
    private final double sisiB;
    private final double tinggi;
    private final double sisiMiring;

    public Trapesium(double sisiA, double sisiB, double tinggi, double sisiMiring) {
        super("Trapesium");
        if (sisiA <= 0 || sisiB <= 0 || tinggi <= 0 || sisiMiring <= 0) {
            throw new IllegalArgumentException("Semua parameter harus lebih besar dari 0");
        }
        this.sisiA = sisiA;
        this.sisiB = sisiB;
        this.tinggi = tinggi;
        this.sisiMiring = sisiMiring;
    }

    @Override
    public double luas() {
        return 0.5 * (sisiA + sisiB) * tinggi;
    }

    @Override
    public double keliling() {
        // Asumsi trapesium sama kaki untuk menghitung keliling
        double sisiMiring = Math.sqrt(Math.pow((sisiB - sisiA) / 2, 2) + Math.pow(tinggi, 2));
        return sisiA + sisiB + 2 * sisiMiring;
    }
    
}
