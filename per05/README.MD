# Laporan Praktikum PBO Pertemuan05
**Nama          :** Aqsa Ibnu Rizik
**NPM           :** 4525210103
**Mata Kuliah   :** Pemrograman Berorientasi Objek
## Materi
Menghitung bangun datar
Materi: Polimorfisme

### sebelum java

## antipattren
![alt text]()

## BamgunDatar
![alt text]()

## lingkaran
![alt text]()

## main
![alt text]()

## persegi
![alt text]()

## segitiga
![alt text]()

## trapesium
![alt text]()

## penjelasan sebelum
1. BangunDatar	Kelas abstrak dengan luas() dan keliling() abstrak. toString() di induk memanggil luas() dan keliling() milik turunan.
2. Lingkaran	luas() dan keliling() masih return 0. Belum ada validasi jari-jari (TODO 1 dan 2).
3. Persegi	Sama, masih return 0 dan belum ada validasi sisi.
4. Segitiga, Trapesium	Belum ada (hanya TODO di Main).
5. Main	Array daftar hanya berisi Lingkaran(7) dan Persegi(5). Baris Segitiga dan Trapesium masih komentar.
6. AntiPattern	Contoh cara yang buruk: hitungLuas(Object) memakai rantai if instanceof. Setiap bangun baru memaksa method ini diubah.



### sesudah java

## antipattren
![alt text]()

## antipattren
![alt text]()

## antipattren
![alt text]()

## antipattren
![alt text]()

## antipattren
![alt text]()

## antipattren
![alt text]()

## antipattren
![alt text]()

## penjelasn coding
1. Lingkaran: jika jari-jari <= 0 maka melempar Error. Rumus: luas Math.PI * r * r, keliling 2 * Math.PI * r.
2. Persegi: jika sisi <= 0 maka melempar IllegalArgumentException. Luas sisi * sisi, keliling 4 * sisi.
3. Segitiga (baru): punya tiga sisi. Luas memakai rumus Heron, s = (a+b+c)/2 lalu √(s(s-a)(s-b)(s-c)). Kelilingnya a+b+c.
4. Trapesium (baru): luas 0.5 × (sisiA + sisiB) × tinggi. Keliling sisiA + sisiB + 2 × sisiMiring, dengan sisi miring dihitung dari tinggi dengan asumsi trapesium sama kaki.
5. Main: array berisi Lingkaran(7), Persegi(5), Segitiga(3,4,5), dan Trapesium(3,4,5,6). Perulangannya tidak diubah sama sekali. Inilah inti polimorfisme: tambah kelas baru, Main tidak perlu disentuh.
6. AntiPattern: hampir tidak berubah, hanya ditampilkan penuh. Kelas ini sengaja dibiarkan sebagai pembanding.


### Hasil
## output
![alt text]()


### sebelm php

## Bangun datar
![alt text]()

## main
![alt text]()

## notif
![alt text]()

### Sesudah php

## Bangun datar
![alt text]()

## main
![alt text]()

## notif
![alt text]()

### Hasil php

## poutput
![alt text]()

### Kesimpulan
1. Inti Materi: Polimorfisme
Kelas induk menetapkan method yang wajib dimiliki, sedangkan kelas turunan menentukan cara kerjanya masing-masing.

2. Perbedaan Sebelum dan Sesudah
Versi sebelum masih berupa kerangka, sedangkan versi sesudah memiliki rumus lengkap, validasi input, dan kelas tambahan.

3. Keunggulan Polimorfisme
Penambahan kelas baru tidak perlu mengubah kode utama. Kode menjadi lebih mudah dikembangkan dan mengurangi risiko kesalahan. Prinsip ini disebut Open/Closed Principle.

4. Konsep Pendukung
-Kelas abstrak: Menjadi dasar bagi kelas turunan.
-Upcasting: Objek turunan disimpan dalam variabel bertipe induk.
-Enkapsulasi: Melindungi atribut menggunakan private.
-Validasi konstruktor: Mencegah objek dengan data tidak valid.
-Dynamic dispatch: Method yang dijalankan menyesuaikan jenis objek sebenarnya.

5. Perbedaan Java dan PHP
Keduanya menerapkan konsep polimorfisme yang sama, tetapi memiliki perbedaan sintaks.
6. Hal yang Perlu Diperbaiki
Gunakan exception yang sesuai, tambahkan validasi segitiga di Java, dan perbaiki parameter sisiMiring pada kelas Trapesium.