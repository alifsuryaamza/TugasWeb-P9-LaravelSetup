# TugasWeb-P9-LaravelSetup

Tugas Rutin 9 - Pemrograman Web: Setup Laravel.

## Langkah Install
1. Siapkan PHP 8.2+, Composer, XAMPP/Laragon.
2. Buat project:
```bash
   composer create-project laravel/laravel TugasWeb-P9-LaravelSetup
   cd TugasWeb-P9-LaravelSetup
```
3. Buat database `tugas_p9` di phpMyAdmin.
4. Atur `.env`:
```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tugas_p9
   DB_USERNAME=root
   DB_PASSWORD=
```
5. Generate key & jalankan migration:
```bash
   php artisan key:generate
   php artisan make:controller PageController
   php artisan make:model Product -m
   php artisan migrate
```
6. Jalankan server: `php artisan serve` lalu buka http://127.0.0.1:8000

## Route
| URL | Keterangan |
|-----|-----------|
| `/` | Home (data array dari route) |
| `/about` | About (data array dari route) |
| `/contact` | Contact (lewat PageController) |
| `/hello/{nama}` | Bonus: route parameter |

## Struktur Folder
| Folder/File | Fungsi |
|-------------|--------|
| `app/Http/Controllers/` | Logika request (PageController) |
| `app/Models/` | Model Eloquent (Product) |
| `database/migrations/` | Skema tabel database |
| `resources/views/` | Template Blade |
| `routes/web.php` | Definisi route web |
| `public/` | Entry point (index.php) & aset publik |
| `.env` | Konfigurasi environment |
| `vendor/` | Dependency Composer |
