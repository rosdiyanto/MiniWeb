# MiniWeb
 MiniWeb adalah sebuah Framework yang menggunakan pola MVC (Model-View-Controller) yang sangat sederhana, dirancang untuk menyederhanakan proses CRUD di PHP.

## Fitur
- Routing sederhana menggunakan `index.php`
- CRUD (Create, Read, Update, Delete) untuk entitas pengguna
- Menggunakan Medoo sebagai ORM untuk interaksi database

## Persyaratan

Pastikan sistem Anda memiliki persyaratan berikut sebelum menginstal dan menjalankan proyek ini:

- PHP 7.4, PHP 8.0 atau lebih baru
- Composer
- Nginx atau Apache
- MySQL atau MariaDB

## Instalasi

1. **Clone repository ini:**

   ```sh
   git clone https://github.com/rosdiyanto/miniweb.git
   cd miniweb
   ```

2. **Install dependencies menggunakan Composer:**

    ```sh
   composer install
    ```

3. **Konfigurasi database:**

    ```sh
    <?php
    use Medoo\Medoo;
    
    return [
        'database_type' => 'mysql',
        'database_name' => 'your_database_name',
        'server' => 'localhost',
        'username' => 'your_username',
        'password' => 'your_password'
    ];
    ```
    
## Penggunaan

- Halaman Utama (HomeController/index):
    ```sh
    http://miniweb.test/
    ```

- Daftar Pengguna (UserController/index):
    ```sh
    http://miniweb.test/index.php/user
    ```

- Membuat Pengguna Baru (UserController/create):
    ```sh
    http://miniweb.test/index.php/user/create
    ```

- Mengedit Pengguna (UserController/edit dengan ID pengguna):
    ```sh
    http://miniweb.test/index.php/user/edit/1
    ```

- Menghapus Pengguna (UserController/delete dengan ID pengguna):
    ```sh
    http://miniweb.test/index.php/user/delete/1
    ```

## Kontribusi

Kami terbuka terhadap kontribusi! Silakan kirimkan *pull request*.

## Lisensi

[Lisensi](LICENSE) MIT