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

## 1.1 dosen.java
penjelasan code:
1. Deklarasi Class
public class Dosen extends Pegawai
Class "Dosen" merupakan turunan dari class "Pegawai" menggunakan konsep inheritance (pewarisan).

2. Atribut
private final int jumlahSKS;
Atribut "jumlahSKS" digunakan untuk menyimpan jumlah SKS yang diajar dosen dan nilainya tidak dapat diubah setelah ditetapkan.

3. Constructor
public Dosen(String nip, String nama, double gajiPokok, int jumlahSKS)
Constructor digunakan untuk menginisialisasi data dosen. "super()" memanggil constructor dari class induk "Pegawai".

4. Method "hitungGaji()"
Method ini menghitung total gaji dosen dengan menjumlahkan gaji pokok dan honor sebesar Rp50.000 untuk setiap SKS.

5. Method "jenis()"
Method ini mengembalikan teks ""DOSEN"" sebagai identitas jenis pegawai.

6. Method "getJumlahSKS()"
Method ini digunakan untuk mengambil nilai jumlah SKS dosen.


Berikut adalah hasil output program Java setelah program berhasil
dikompilasi dan dijalankan.
## java sesudah
![Java sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20java/Jdosen_sudah.png)

## Output
![Java sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20java/java_output.png)

## 1.2. File: Main.java

Penjelasan Kode:
1. Method "main()"
Method "main()" merupakan titik awal program Java dijalankan.

2. Array "daftar"
Array "daftar" digunakan untuk menyimpan objek pegawai, yaitu "PegawaiTetap", "PegawaiKontrak", "Dosen", dan "Pegawaiharian", beserta data masing-masing.

3. Menampilkan Daftar Gaji
Perulangan "for" digunakan untuk menampilkan informasi setiap pegawai. Setiap objek menampilkan perhitungan gaji sesuai implementasi method yang dimilikinya.

4. Menghitung Total Gaji
Variabel "total" digunakan untuk menjumlahkan gaji seluruh pegawai melalui method "hitungGaji()".

5. Pemeriksaan Hasil
Method "periksa()" digunakan untuk membandingkan hasil perhitungan gaji dengan nilai yang diharapkan. Program menampilkan status "OK" jika hasil sesuai atau "SALAH" jika berbeda.

## Main java sebelum
![Hasil Output Java sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20java/javaMain_blm.png)
## Main java sesudah
![Hasil Output Java sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20java/javaMain_sudah.png)


## Output
![Java sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20java/java_output.png)


## 1.3. File: pegawai.java

Penjelasan Kode:
1. Deklarasi Class
public abstract class Pegawai
Class "Pegawai" merupakan kelas induk abstrak yang menjadi dasar bagi berbagai jenis pegawai. Class ini tidak dapat dibuat objeknya secara langsung.

2. Atribut
Atribut "nip", "nama", dan "gajiPokok" digunakan untuk menyimpan nomor induk pegawai, nama pegawai, dan gaji pokok. Kata kunci "protected" memungkinkan kelas turunan mengakses atribut tersebut.

3. Constructor
Constructor "Pegawai()" digunakan untuk menginisialisasi data pegawai. Program memeriksa agar gaji pokok tidak negatif. Jika negatif, program menghasilkan "IllegalArgumentException".

4. Method "hitungGaji()"
Method ini mengembalikan nilai gaji pokok sebagai perhitungan dasar. Kelas turunan dapat menambahkan komponen gaji sesuai jenis pegawai masing-masing.

5. Method "jenis()"
Method abstrak "jenis()" mewajibkan setiap kelas turunan menentukan jenis pegawainya sendiri.

6. Method Getter
"getNama()" digunakan untuk mengambil nama pegawai, sedangkan "getNip()" digunakan untuk mengambil nomor induk pegawai.

7. Method "toString()"
Method ini digunakan untuk menampilkan informasi pegawai dalam format teks yang berisi NIP, jenis pegawai, nama, dan total gaji.

##  java sebelum
![Hasil Output Java sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20java/Jpegwai_blm.png)
##  java sesudah
![Hasil Output Java sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20java/Jpegawai_sudah.png)


## Output
![Java sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20java/java_output.png)


## 1.4. File: pegawai harian.java

Penjelasan Kode:
1. Deklarasi Class
Class "Pegawaiharian" merupakan turunan dari class "Pegawai" menggunakan konsep inheritance.

2. Atribut "hariKerja"
Atribut ini digunakan untuk menyimpan jumlah hari kerja pegawai. Kata kunci "final" membuat nilainya tidak dapat diubah setelah ditetapkan.

3. Constructor
Constructor digunakan untuk menginisialisasi NIP, nama, upah per hari, dan jumlah hari kerja. "super()" memanggil constructor dari class induk. Program juga memeriksa agar jumlah hari kerja tidak negatif.

4. Method "hitungGaji()"
Method ini menghitung total gaji dengan mengalikan upah per hari dengan jumlah hari kerja menggunakan "super.hitungGaji()".

5. Method "jenis()"
Method ini mengembalikan teks ""HARIAN"" sebagai identitas jenis pegawai.

6. Method "getHariKerja()"
Method ini digunakan untuk mengambil nilai jumlah hari kerja pegawai.


## Main java sebelum
ini adalah tambahan codingan 
## Main java sesudah
![Hasil Output Java sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20java/JpegawaiH_sudah.png)


## Output
![Java sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20java/java_output.png)


## 1.5. File: pegawai kontrak.java

Penjelasan Kode:
1. Deklarasi Class
Class "PegawaiKontrak" merupakan turunan dari class "Pegawai" yang digunakan untuk merepresentasikan pegawai dengan status kontrak.

2. Atribut "bulanKontrak"
Atribut ini digunakan untuk menyimpan lama masa kontrak pegawai dalam satuan bulan. Kata kunci "final" membuat nilainya tidak dapat diubah setelah ditetapkan.

3. Constructor
Constructor digunakan untuk menginisialisasi NIP, nama, gaji pokok, dan lama kontrak. "super()" digunakan untuk memanggil constructor dari class induk "Pegawai".

4. Method "jenis()"
Method ini mengembalikan teks ""KONTRAK"" sebagai identitas jenis pegawai.

5. Method "getBulanKontrak()"
Method ini digunakan untuk mengambil nilai lama kontrak pegawai.

6. Method "hitungGaji()"
Class ini tidak melakukan override terhadap "hitungGaji()" karena pegawai kontrak hanya menerima gaji pokok tanpa tambahan tunjangan masa kerja. Oleh karena itu, method "hitungGaji()" diwarisi dari class "Pegawai".

## Main java sebelum
![Hasil Output Java sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20java/JpegawaiK_blm.png)
## Main java sesudah
![Hasil Output Java sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20java/JpegawaiK_sudah.png)


## Output
![Java sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20java/java_output.png)


## 1.6. File: pegawai tetap.java

Penjelasan Kode:
1. Deklarasi Class
Class "PegawaiTetap" merupakan turunan dari class "Pegawai" yang digunakan untuk merepresentasikan pegawai tetap.

2. Konstanta Tunjangan
"TUNJANGAN_PER_TAHUN" menetapkan tunjangan sebesar 2% per tahun masa kerja, sedangkan "TUNJANGAN_MAKSIMUM" membatasi tunjangan maksimal sebesar 40% dari gaji pokok.

3. Atribut "masaKerjaTahun"
Atribut ini digunakan untuk menyimpan lama masa kerja pegawai dalam satuan tahun.

4. Constructor
Constructor digunakan untuk menginisialisasi data pegawai tetap. "super()" memanggil constructor dari class induk "Pegawai" dan harus menjadi pernyataan pertama dalam constructor.

5. Method "hitungGaji()"
Method ini menghitung total gaji dengan menambahkan tunjangan masa kerja ke gaji pokok. Persentase tunjangan dihitung sebesar 2% per tahun dan dibatasi maksimal 40% menggunakan "Math.min()".

6. Method "jenis()"
Method ini mengembalikan teks ""TETAP"" sebagai identitas jenis pegawai.

7. Method "getMasaKerjaTahun()"
Method ini digunakan untuk mengambil nilai masa kerja pegawai dalam tahun.

## Main java sebelum
![Hasil Output Java sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20java/JpegawaiT_blm.png)
## Main java sesudah
![Hasil Output Java sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20java/JpegawaiT_sudah.png)
main java tidak ada yang di ubah

## Output
![Hasil Output Java ](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20java/java_output.png)


---

### 2. Implementasi PHP

## 2.1. File: Dosen.php
Penjelasan Kode:
Class "Dosen" merupakan turunan dari class "PegawaiTetap". Oleh karena itu, dosen mewarisi atribut dan perhitungan gaji pegawai tetap, termasuk tunjangan masa kerja.

Class ini menambahkan atribut tunjangan fungsional untuk dosen. Constructor digunakan untuk menginisialisasi data pegawai dan tunjangan fungsional, serta memvalidasi agar nilai tunjangan tidak negatif.

Method "hitungGaji()" di-override untuk menjumlahkan gaji pegawai tetap dengan tunjangan fungsional. Method "jenis()" digunakan untuk mengidentifikasi jenis pegawai sebagai "DOSEN".

## Main php sebelum
codingan tambahan
## Main php sesudah
![Hasil Output php sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20php/Pdosen_sudah.png)

## Output
![php output](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20php/output.png)


## 2.2. File: main.php

Penjelasan Kode:
File "Main.php" merupakan bagian utama program yang digunakan untuk membuat objek, menjalankan method, dan menampilkan hasil perhitungan gaji.

Program membuat objek dari beberapa jenis pegawai, seperti pegawai tetap, pegawai kontrak, dosen, dan pegawai harian. Seluruh objek tersebut dimasukkan ke dalam sebuah array agar dapat diproses menggunakan perulangan "foreach".

Program menampilkan informasi setiap pegawai dan hasil perhitungan gajinya melalui method "hitungGaji()". Untuk menghitung total gaji seluruh pegawai, program menggunakan "array_map()" untuk mengambil hasil perhitungan gaji dan "array_sum()" untuk menjumlahkan hasilnya.


## Main php sebelum
![Hasil Output php sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20php/main_blm.png)
## Main php sesudah
![Hasil Output php sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20php/Pmain_sudah.png)
main java tidak ada yang di ubah
## Output
![PHP output](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20php/output.png)


## 2.3. File: pegawai.php

Penjelasan Kode:
Class "Pegawai" merupakan class induk yang menjadi dasar bagi seluruh jenis pegawai. Class ini menggunakan konsep abstraksi dengan kata kunci "abstract", sehingga tidak dapat dibuat menjadi objek secara langsung.

Class "Pegawai" memiliki atribut NIP, nama, dan gaji pokok. Constructor digunakan untuk menginisialisasi data tersebut serta memvalidasi agar gaji pokok tidak bernilai negatif.

Method "hitungGaji()" digunakan untuk mengembalikan nilai gaji pokok. Method "jenis()" dideklarasikan sebagai method abstrak yang harus diimplementasikan oleh class turunannya. Selain itu, terdapat method getter untuk mengambil data pegawai dan method "__toString()" untuk menampilkan informasi pegawai dalam bentuk teks.


## Main php sebelum
![Hasil Output php sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20php/pegawai_blm.png)
## Main php sesudah
![Hasil Output php sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20php/Ppegawai_sudah.png)
main java tidak ada yang di ubah
## Output
![PHP output](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20php/output.png)


## 2.4. File: pegawai harian.php

Penjelasan Kode:
Class "PegawaiHarian" merupakan turunan dari class "Pegawai" yang digunakan untuk pegawai dengan sistem pembayaran berdasarkan jumlah hari kerja.

Atribut "hariKerja" menyimpan jumlah hari kerja pegawai. Constructor memanggil constructor class induk untuk menginisialisasi data dasar pegawai, kemudian memvalidasi agar jumlah hari kerja tidak bernilai negatif.

Method "hitungGaji()" di-override untuk menghitung total gaji dengan mengalikan upah per hari dengan jumlah hari kerja. Nilai upah per hari diperoleh melalui "parent::hitungGaji()".

Method "jenis()" mengembalikan teks "HARIAN", sedangkan "getHariKerja()" digunakan untuk mengambil jumlah hari kerja pegawai.



## Main php sebelum
ini adalah codingan tambahan
## Main php sesudah
![Hasil Output php sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20php/harian_sudah.png)
main java tidak ada yang di ubah
## Output
![PHP output](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20php/output.png)


## 2.5. File: pegawai kontrak.php

Penjelasan Kode:
Class "PegawaiKontrak" merupakan turunan dari class "Pegawai". Class ini memiliki atribut "bulanKontrak" untuk menyimpan lama kontrak pegawai dalam satuan bulan.

Constructor menerima NIP, nama, gaji pokok, dan lama kontrak. Kemudian, "parent::__construct()" digunakan untuk memanggil constructor dari class induk.

Class ini tidak melakukan override terhadap method "hitungGaji()" karena pegawai kontrak menggunakan perhitungan gaji pokok dari class induk tanpa tambahan perhitungan khusus.

Method "jenis()" mengembalikan teks "KONTRAK", sedangkan "getBulanKontrak()" digunakan untuk mengambil informasi lama kontrak pegawai.


## Main php sebelum
ini adalah codingan tambahan
## Main php sesudah
![Hasil Output php sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20php/kontrak_sudah.png)
main java tidak ada yang di ubah
## Output
![PHP output](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20php/output.png)


## 2.6. File: pegawai tetap.php

Penjelasan Kode:
Class "PegawaiTetap" merupakan turunan dari class "Pegawai". Class ini memiliki atribut "masaKerjaTahun" untuk menyimpan lama masa kerja pegawai dalam tahun.

Program menggunakan konstanta "TUNJANGAN_PER_TAHUN" sebesar 2% dan "TUNJANGAN_MAKSIMUM" sebesar 40%. Constructor memanggil "parent::__construct()" untuk menginisialisasi data dari class induk. Program juga melakukan validasi agar masa kerja tidak bernilai negatif.

Method "hitungGaji()" di-override untuk menghitung gaji pokok ditambah tunjangan masa kerja. Tunjangan dihitung berdasarkan jumlah tahun bekerja, tetapi persentasenya dibatasi maksimal 40%.
Method "jenis()" mengembalikan teks "TETAP", sedangkan "getMasaKerjaTahun()" digunakan untuk mengambil data masa kerja pegawai.



## Main php sebelum
![Hasil Output php sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20php/pegawai_blm.png)
## Main php sesudah
![Hasil Output php sesudah](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20php/tetap_sudah.png)
main java tidak ada yang di ubah
## Output
![PHP output](https://github.com/aqsarizik/Praktikum-PBO-A-AqsaIbnuRizik-4525210103/blob/main/per04/ss%20php/output.png)

---

### 3. Kesimpulan
Pada praktikum ini, class "Pegawai" digunakan sebagai class induk yang menyimpan data dasar pegawai, sedangkan class turunannya, seperti "PegawaiTetap", "PegawaiKontrak", "PegawaiHarian", dan "Dosen", memiliki aturan perhitungan gaji yang berbeda. Pegawai tetap memperoleh tunjangan berdasarkan masa kerja, pegawai kontrak menerima gaji sesuai gaji pokok, pegawai harian memperoleh gaji berdasarkan jumlah hari kerja, dan dosen mendapatkan tambahan tunjangan fungsional.
