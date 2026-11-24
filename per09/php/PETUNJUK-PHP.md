# Petunjuk menjalankan project PHP

Project ini disesuaikan agar dapat digunakan dengan PHP 8.2 atau lebih baru pada seri 8.x.

## Persiapan

Pastikan PHP dan Composer sudah terpasang. Periksa melalui terminal:

```bash
php -v
composer --version
```

## Instalasi dependency

Buka terminal di folder yang berisi `composer.json`, lalu jalankan:

```bash
composer update
```

Perintah ini akan membuat ulang `composer.lock` yang sesuai dengan versi PHP dan memasang dependency Carbon.

## Menjalankan program

Setelah proses Composer selesai:

```bash
php main.php
```

## Catatan

File `composer.lock` lama tidak disertakan karena masih mengunci kebutuhan platform PHP `^8.5.12`. File lock akan dibuat ulang oleh Composer melalui `composer update` pada komputer pengguna.
