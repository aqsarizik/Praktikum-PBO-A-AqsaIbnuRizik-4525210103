<?php
declare(strict_types=1);

/**
 * Sesi 3 — PHP tidak punya constructor overloading.
 * Padanannya: default parameter + named constructor (static factory).
 */
class RekeningBank
{
    private const BUNGA_TAHUNAN = 0.025;
    private const BIAYA_ADMIN = 5000.0;
    private const BATAS_PENARIKAN = 5000000.0;

    private static int $jumlahRekening = 0;

    private float $saldo;

    /**
     * Default parameter menggantikan constructor overloading.
     */
    public function __construct(
        private readonly string $nomor,
        private readonly string $pemilik,
        float $saldoAwal = 0,
    ) {
        if (trim($this->nomor) === '') {
            throw new InvalidArgumentException('Nomor rekening tidak boleh kosong.');
        }

        if ($saldoAwal < 0) {
            throw new InvalidArgumentException('Saldo awal tidak boleh negatif.');
        }

        $this->saldo = $saldoAwal;
        self::$jumlahRekening++;
    }

    /**
     * Named constructor — rekening pelajar, saldo awal nol.
     * Gunakan new static(), bukan new self().
     */
    public static function rekeningPelajar(string $nomor, string $pemilik): static
    {
        return new static($nomor, $pemilik);
    }

    public function setor(float $jumlah): void
    {
        if ($jumlah <= 0) {
            throw new InvalidArgumentException('Jumlah setoran harus lebih dari 0.');
        }

        $this->saldo += $jumlah;
    }

    public function tarik(float $jumlah): void
    {
        if ($jumlah <= 0) {
            throw new InvalidArgumentException('Jumlah penarikan harus lebih dari 0.');
        }

        if ($jumlah > $this->saldo) {
            throw new RuntimeException('Saldo tidak mencukupi untuk penarikan ini.');
        }

        if ($jumlah > self::BATAS_PENARIKAN) {
            throw new RuntimeException('Jumlah penarikan melebihi batas sekali tarik.');
        }

        $this->saldo -= $jumlah;
    }

    public function potongBiayaAdmin(): void
    {
        $this->saldo -= self::BIAYA_ADMIN;
    }

    public static function getJumlahRekening(): int
    {
        return self::$jumlahRekening;
    }

    public static function bungaSetahun(float $pokok): float
    {
        return $pokok * self::BUNGA_TAHUNAN;
    }

    public function getSaldo(): float { return $this->saldo; }
    public function getNomor(): string { return $this->nomor; }

    public function __toString(): string
    {
        return sprintf('Rekening[%s] %-14s Rp%s',
            $this->nomor, $this->pemilik, number_format($this->saldo, 2, ',', '.'));
    }
}
