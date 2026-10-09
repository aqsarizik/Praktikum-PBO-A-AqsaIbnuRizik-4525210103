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
[per 02] [Class, Object and Encapsulation]
### Tanggal
Kamis, 10 September 2026
---

## 1. Implementasi Java

## 1.1 mahasiswa.java
penjelasan code:
1. Konstanta bobot dan batas nilai: Menentukan bobot tugas 30%, UTS 30%, UAS 40%, serta batas nilai 0–100.

2. Atribut private: NIM dan nama tidak bisa diubah setelah dibuat, sedangkan nilai dibuat `private` agar tidak diisi sembarangan.

3. Validasi NIM: Memastikan NIM tidak kosong atau `null`.

4. Validasi nilai: Memastikan nilai tugas, UTS, dan UAS berada di rentang 0–100.

5. Method `nilaiAkhir()`: Menghitung nilai akhir berdasarkan bobot yang sudah ditentukan.

6. Method `hurufMutu()`: Mengubah nilai akhir menjadi huruf A sampai E.

7. Getter: Digunakan untuk membaca NIM, nama, dan nilai akhir tanpa mengubah data.

8. Method `toString()`: Menampilkan rekap data mahasiswa, nilai akhir, dan huruf mutu.


Berikut adalah hasil output program Java setelah program berhasil
dikompilasi dan dijalankan.

## java sebelum
![Java sebelum](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per02/SS/javaMain_sebelum.png)
## java sesudah
![Java sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per02/SS/java_sesudah.png)

## Output
![Java sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per02/SS/java_output.png)

## 1.2. File: Main.java

Penjelasan Kode:

Main adalah program uji untuk membuktikan bahwa kelas Mahasiswa bekerja benar. Program ini terdiri dari dua bagian:

1. Rekap nilai. Membuat tiga objek Mahasiswa yang valid (Ani, Budi, Citra) dalam sebuah array, lalu mencetak masing-masing lewat toString().
2. Uji penolakan data tidak sah. Mencoba membuat objek dengan nilai tugas 150 dan objek dengan NIM kosong. Keduanya dibungkus try–catch untuk menangkap IllegalArgumentException. Jika objek berhasil dibuat, program mencetak kata "MASALAH", yang berarti validasi gagal. Jika galat tertangkap, program mencetak pesan penolakan.

![Hasil Output Java sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per02/SS/javaMain_sesudah.png)

main java tidak ada yang di ubah

## Output
![Java sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per02/SS/java_output.png)

---

### 2. Implementasi PHP

## 2.1. File: Mahasiswa.php
Penjelasan Kode:
1. declare(strict_types=1): Memastikan tipe data yang digunakan sesuai dengan ketentuan.

2. Konstanta: Menentukan bobot dan batas nilai menggunakan const float, yang tersedia mulai PHP 8.3.

3. Constructor property promotion: Mempermudah pembuatan properti sekaligus mengisi nilainya. NIM dan nama menggunakan readonly.

4. Validasi NIM: Memastikan NIM tidak kosong menggunakan trim().

5. Validasi nilai: Memastikan nilai berada di rentang 0–100 menggunakan is_finite().

6. Method nilaiAkhir(): Menghitung nilai akhir dengan bobot tugas 30%, UTS 30%, dan UAS 40%.

7. Method hurufMutu(): Mengubah nilai akhir menjadi huruf A–E menggunakan match.

8. Getter: Digunakan untuk membaca NIM, nama, dan nilai akhir.

9. Method __toString(): Menampilkan rekap data mahasiswa menggunakan sprintf().
Kelas ini adalah padanan versi PHP dari Mahasiswa.java, dengan fitur khas PHP modern:

![Hasil Output PHP sebelum](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per02/SS/PHP_Sebelum.png)
![Hasil Output PHP sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per02/SS/PHP_sesudah.png)

## Output
![php output](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per02/SS/PHP_output.png)


## 2.2. File: main.php

Penjelasan Kode:

main.php adalah program uji versi PHP dan memiliki alur yang sama dengan Main.java:

1. require_once __DIR__ . '/Mahasiswa.php' memuat kelas Mahasiswa dari folder yang sama.
2. Tiga objek mahasiswa valid dibuat dalam array $kelas, lalu dicetak dengan foreach (PHP otomatis memanggil __toString()).
3. Dua percobaan membuat objek tidak sah (nilai tugas 150 dan NIM kosong) dibungkus try–catch yang menangkap InvalidArgumentException, lalu mencetak pesan penolakan.

![Hasil Output main PHP ](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per02/SS/PHPMain_sesudah.png)

## Output
![PHP output](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per02/SS/PHP_output.png)

---

### 3. Kesimpulan

Praktikum ini menunjukkan bahwa enkapsulasi digunakan untuk menjaga data mahasiswa agar tetap valid. NIM dan nama tidak dapat diubah, sedangkan nilai harus berada di rentang 0–100. Jika data tidak sesuai, program akan menolak data tersebut melalui validasi di konstruktor.

Java dan PHP menghasilkan keluaran yang sama, yaitu Ani mendapat nilai 84,90 (A), Budi 59,30 (D), dan Citra 92,00 (A). Perbedaannya terletak pada penulisan kode. PHP lebih ringkas dengan fitur seperti constructor property promotion dan match, tetapi penggunaan typed constants membutuhkan PHP 8.3 ke atas. Sementara itu, Java memiliki penulisan yang lebih panjang, tetapi tipe datanya diperiksa saat kompilasi.
