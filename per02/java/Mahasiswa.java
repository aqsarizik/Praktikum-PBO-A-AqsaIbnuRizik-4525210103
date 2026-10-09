/**
 * Sesi 2 — enkapsulasi yang menjaga invariant.
 */
public class Mahasiswa {

    public static final double BOBOT_TUGAS = 0.30;
    public static final double BOBOT_UTS   = 0.30;
    public static final double BOBOT_UAS   = 0.40;

    private static final double NILAI_MIN = 0;
    private static final double NILAI_MAX = 100;

    // TODO 1
    private final String nim;
    private final String nama;
    private double nilaiTugas;
    private double nilaiUts;
    private double nilaiUas;

    public Mahasiswa(String nim, String nama, double nilaiTugas, double nilaiUts, double nilaiUas) {

        // TODO 2
        if (nim == null || nim.trim().isEmpty()) {
            throw new IllegalArgumentException("NIM tidak boleh kosong atau null");
        }

        // TODO 3
        pastikanNilaiSah("Nilai tugas", nilaiTugas);
        pastikanNilaiSah("Nilai UTS", nilaiUts);
        pastikanNilaiSah("Nilai UAS", nilaiUas);

        this.nim = nim;
        this.nama = nama;
        this.nilaiTugas = nilaiTugas;
        this.nilaiUts = nilaiUts;
        this.nilaiUas = nilaiUas;
    }

    // TODO 4
    private static void pastikanNilaiSah(String namaKomponen, double nilai) {
        if (Double.isNaN(nilai) || Double.isInfinite(nilai)
                || nilai < NILAI_MIN || nilai > NILAI_MAX) {
            throw new IllegalArgumentException(
                    namaKomponen + " harus berada dalam rentang 0 sampai 100");
        }
    }

    // TODO 5
    public double nilaiAkhir() {
        return (nilaiTugas * BOBOT_TUGAS)
                + (nilaiUts * BOBOT_UTS)
                + (nilaiUas * BOBOT_UAS);
    }

    // TODO 6
    public String hurufMutu() {
        if (nilaiAkhir() >= 80) {
            return "A";
        } else if (nilaiAkhir() >= 70) {
            return "B";
        } else if (nilaiAkhir() >= 60) {
            return "C";
        } else if (nilaiAkhir() >= 50) {
            return "D";
        } else {
            return "E";
        }
    }

    // TODO 7
    public String getNim() {
        return nim;
    }

    public String getNama() {
        return nama;
    }

    public double getNilaiAkhir() {
        return nilaiAkhir();
    }

    @Override
    public String toString() {
        return String.format("%-10s %-18s akhir=%6.2f  mutu=%s",
                nim, nama, nilaiAkhir(), hurufMutu());
    }
}