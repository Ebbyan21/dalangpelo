# Dalang Pelo Website

Website resmi Dalang Pelo dengan domain: https://dalangpelo.page.gd

## Tentang Proyek

Proyek ini adalah landing page untuk brand dan IP animasi Indonesia Dalang Pelo. Website ini menampilkan profil brand, karakter, layanan, produk/brand collaboration, serta credential dan informasi kontak.

## Teknologi yang Digunakan

- PHP
- HTML5
- CSS3
- JavaScript
- Bootstrap 5
- Custom assets dan gambar branding

## Struktur Folder

```text
/
├── assets/              # CSS, JS, image, vendor
├── components/          # Bagian reusable layout (header, hero, about, dll)
├── data/                # Data JSON
├── upload/              # Folder upload/media
├── config.php           # Konfigurasi dasar website
├── index.php            # Halaman utama
├── robots.txt           # Robot crawler rules
├── sitemap.xml          # Sitemap website
├── google5dd67402ae2dff85.html
├── README.md            # Dokumentasi proyek
└── ...
```

## Cara Menjalankan Secara Lokal

### 1. Clone / copy project ke folder lokal

Gunakan folder yang bisa diakses oleh Laragon/XAMPP, misalnya:

```text
C:\laragon\www\dalangpelo
```

### 2. Jalankan server lokal

Bisa menggunakan:

- Laragon
- XAMPP
- PHP built-in server

Contoh:

```bash
php -S localhost:8000
```

Lalu buka di browser:

```text
http://localhost:8000/
```

### 3. Pastikan konfigurasi URL benar

File `config.php` berisi base URL untuk local development. Jika diperlukan ubah ke URL project Anda:

```php
define('BASE_URL', 'http://localhost/dalangpelo/');
```

## Domain Produksi

Website ini dipersiapkan untuk domain:

```text
https://dalangpelo.page.gd
```

Pastikan konfigurasi canonical URL dan metadata sudah sesuai dengan domain produksi, terutama di `index.php`.

## Catatan Deploy

Untuk deploy ke hosting, upload seluruh file project ke root hosting dan pastikan:

- file utama dapat diakses dari domain utama
- resources seperti CSS, JS, dan gambar tetap terload dengan benar
- struktur folder tidak rusak
- konfigurasi URL dan metadata disesuaikan dengan domain produksi

## Maintainer

Dalang Pelo

## Status

Project ini masih dalam pengembangan dan pemeliharaan konten website untuk kebutuhan branding, publikasi, dan promosi IP animasi Dalang Pelo.
