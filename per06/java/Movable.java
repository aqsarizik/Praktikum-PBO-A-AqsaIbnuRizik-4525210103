/**
 * Sesi 6 — kontrak "bisa bergerak".
 * Interface menjawab: APA YANG BISA dilakukan, bukan APA benda ini.
 */
public interface Movable {

    void bergerak();

    double kecepatanMaksimum();

    default String ringkasanGerak() {
        return "kecepatan maksimum "
                + kecepatanMaksimum() + " km/jam";
    }
}