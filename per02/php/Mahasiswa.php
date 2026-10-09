<?php
declare(strict_types=1);

class Mahasiswa
{
    public const float BOBOT_TUGAS = 0.30;
    public const float BOBOT_UTS   = 0.30;
    public const float BOBOT_UAS   = 0.40;

    private const float NILAI_MIN = 0;
    private const float NILAI_MAX = 100;

    public function __construct(
        private readonly string $nim,
        private readonly string $nama,
        private float $nilaiTugas,
        private float $nilaiUts,
        private float $nilaiUas,
    ) {
        // TODO 2
        if (trim($this->nim) === '') {
            throw new InvalidArgumentException(
                'NIM tidak boleh kosong'
            );
        }

        // TODO 3
        self::pastikanNilaiSah('Nilai tugas', $this->nilaiTugas);
        self::pastikanNilaiSah('Nilai UTS', $this->nilaiUts);
        self::pastikanNilaiSah('Nilai UAS', $this->nilaiUas);
    }

    // TODO 4
    private static function pastikanNilaiSah(
        string $namaKomponen,
        float $nilai
    ): void {
        if (!is_finite($nilai)
            || $nilai < self::NILAI_MIN
            || $nilai > self::NILAI_MAX) {
            throw new InvalidArgumentException(
                $namaKomponen . ' harus berada dalam rentang 0 sampai 100'
            );
        }
    }

    // TODO 5
    public function nilaiAkhir(): float
    {
        return ($this->nilaiTugas * self::BOBOT_TUGAS)
            + ($this->nilaiUts * self::BOBOT_UTS)
            + ($this->nilaiUas * self::BOBOT_UAS);
    }

    // TODO 6
    public function hurufMutu(): string
    {
        return match (true) {
            $this->nilaiAkhir() >= 80 => 'A',
            $this->nilaiAkhir() >= 70 => 'B',
            $this->nilaiAkhir() >= 60 => 'C',
            $this->nilaiAkhir() >= 50 => 'D',
            default => 'E',
        };
    }

    // TODO 7
    public function getNim(): string
    {
        return $this->nim;
    }

    public function getNama(): string
    {
        return $this->nama;
    }

    public function getNilaiAkhir(): float
    {
        return $this->nilaiAkhir();
    }

    public function __toString(): string
    {
        return sprintf(
            '%-10s %-18s akhir=%6.2f  mutu=%s',
            $this->nim,
            $this->nama,
            $this->nilaiAkhir(),
            $this->hurufMutu()
        );
    }
}