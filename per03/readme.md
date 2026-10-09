# Praktikum Pemrograman Berorientasi Objek
## Sesi 6 

### Nama
Aqsa Ibnu Rizik
### NPM
4525210103
### Kelas
A
### Mata Kuliah
Pemrograman Berbasis Objek (PBO)
### Pertemuan
[per 03] [Class, Object and Encapsulation]
### Tanggal
Kamis, 17 September 2026
---

## 1. Implementasi Java

## 1.1 mahasiswa.java
penjelasan code:
1. Konstanta dan Variabel
   Digunakan untuk menyimpan bunga tahunan, biaya administrasi, batas penarikan, nomor rekening, nama pemilik, saldo, dan jumlah rekening.

2. Constructor
   Digunakan untuk membuat rekening baru dengan saldo awal nol atau saldo yang ditentukan, serta memvalidasi data rekening.

3. Method "setor()"
   Digunakan untuk menambahkan uang ke saldo rekening dengan memastikan jumlah setoran positif.

4. Method "tarik()"
   Digunakan untuk menarik uang dengan memeriksa saldo dan batas maksimal penarikan.

5. Method "potongBiayaAdmin()"
   Digunakan untuk memotong biaya administrasi sebesar Rp5.000.

6. Method "getJumlahRekening()"
   Digunakan untuk mengetahui jumlah rekening yang telah dibuat.

7. Method "bungaSetahun()"
   Digunakan untuk menghitung bunga tahunan sebesar 2,5% dari jumlah saldo yang diberikan.

8. Method "getSaldo()" dan "getNomor()"
   Digunakan untuk mengambil informasi saldo dan nomor rekening.

9. Method "toString()"
   Digunakan untuk menampilkan informasi rekening berupa nomor, nama pemilik, dan saldo dalam format yang rapi.


Berikut adalah hasil output program Java setelah program berhasil
dikompilasi dan dijalankan.

![Java sebelum](gambar/output-java.png)
![Java sesudah](gambar/output-java.png)

## Output
![Java sesudah](gambar/output-java.png)

## 1.2. File: Main.java

Penjelasan Kode:

1. Membuat Rekening
   Membuat tiga rekening milik Ani, Budi, dan Citra dengan saldo awal yang berbeda.

2. Menampilkan Data Rekening
   Menampilkan informasi nomor rekening, nama pemilik, dan saldo menggunakan "System.out.println()".

3. Menghitung Jumlah Rekening
   Menampilkan jumlah rekening yang telah dibuat, yaitu tiga rekening.

4. Operasi Setoran
   Menambahkan saldo Ani sebesar Rp500.000.

5. Operasi Penarikan
   Menguji penarikan yang melebihi batas transaksi. Program menolak penarikan dan menampilkan pesan kesalahan menggunakan "try-catch".

6. Pemotongan Biaya Administrasi
   Memotong biaya administrasi rekening Budi sebesar Rp5.000 tanpa membuat saldo menjadi negatif.

7. Menghitung Bunga
   Menghitung bunga tahunan sebesar 2,5% berdasarkan saldo rekening Ani setelah setoran.

![Hasil Output Java sesudah](gambar/output-java.png)

main java tidak ada yang di ubah

## Output
![Java sesudah](gambar/output-java.png)

---

### 2. Implementasi PHP

## 2.1. File: Mahasiswa.php
Penjelasan Kode:
1. Konstanta dan Variabel
   Menyimpan bunga tahunan 2,5%, biaya administrasi Rp5.000, batas penarikan Rp5.000.000, jumlah rekening, dan saldo.

2. Constructor
   Membuat rekening baru dengan nomor, nama pemilik, dan saldo awal. Constructor juga memvalidasi nomor rekening dan saldo.

3. Named Constructor "rekeningPelajar()"
   Membuat rekening pelajar dengan saldo awal nol menggunakan "new static()".

4. Method "setor()"
   Menambahkan uang ke saldo rekening dengan memastikan jumlah setoran lebih dari nol.

5. Method "tarik()"
   Melakukan penarikan dengan memeriksa jumlah penarikan, kecukupan saldo, dan batas transaksi.

6. Method "potongBiayaAdmin()"
   Memotong biaya administrasi sebesar Rp5.000 dari saldo rekening.

7. Method "getJumlahRekening()"
   Mengembalikan jumlah rekening yang telah dibuat.

8. Method "bungaSetahun()"
   Menghitung bunga tahunan sebesar 2,5% dari saldo yang diberikan.

9. Method "getSaldo()" dan "getNomor()"
   Mengambil informasi saldo dan nomor rekening.

10. Method "__toString()"
    Menampilkan informasi rekening dalam bentuk teks yang rapi, termasuk nomor rekening, nama pemilik, dan saldo

![Hasil Output PHP sebelum](gambar/output-php.png)
![Hasil Output PHP sesudah](gambar/output-php.png)

## Output
![php output](gambar/output-java.png)


## 2.2. File: main.php

Penjelasan Kode:

1. Membuat Rekening
   Membuat tiga rekening milik Ani, Budi, dan Citra menggunakan constructor dan named constructor "rekeningPelajar()".

2. Menampilkan Data Rekening
   Menampilkan nomor rekening, nama pemilik, saldo, dan jumlah rekening yang telah dibuat.

3. Operasi Setoran
   Menambahkan saldo Ani sebesar Rp500.000 menggunakan method "setor()".

4. Operasi Penarikan
   Menguji penarikan yang melebihi batas transaksi menggunakan "try-catch" untuk menangani kesalahan.

5. Pemotongan Biaya Administrasi
   Memotong biaya administrasi rekening Budi sebesar Rp5.000 tanpa membuat saldo menjadi negatif.

6. Menghitung Bunga
   Menghitung bunga tahunan sebesar 2,5% dari saldo Ani dan menampilkan hasilnya menggunakan "number_format()

![Hasil Output main PHP ](gambar/output-php.png)

## Output
![PHP output](gambar/output-java.png)

---

### 3. Kesimpulan

Berdasarkan praktikum yang telah dilakukan, program RekeningBank menggunakan bahasa Java dan PHP berhasil menerapkan konsep Pemrograman Berorientasi Objek (PBO). Program ini memiliki fitur pembuatan rekening, penyetoran uang, penarikan uang, pemotongan biaya administrasi, dan perhitungan bunga tahunan. Melalui praktikum ini, dapat dipahami penggunaan class, object, constructor, method, konstanta, dan enkapsulasi dalam pembuatan program sederhana untuk mengelola rekening bank.