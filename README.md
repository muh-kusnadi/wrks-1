# Web Development "Live Coding Workshop Series" - UMPAR

## Konfigurasi

Sebelum menjalankan aplikasi, terlebih dahulu lakukan konfigurasi di bawah ini :

- Ketik **composer install** pada command line
- copy **.env.example** file menjadi **.env** file dengan perintah **cp .env.example .env** pada command line
- Setelah **.env** file sudah tercopy, selanjutkan lakukan konfigurasi pertama yaitu mengisi bagian **APP_KEY** dengan perintah **php artisan key:generate**.
- Buat database di phpmyadmin, kemudian masukkan nama database tersebut di file **.env** pada bagian **DB_DATABASE**
- ketik perintah **php artisan migrate** untuk membuat table ke database menggunakan fitur migrate database laravel.
- ketik perintah **php artisan storage:link** untuk meng-set directory storage menjadi public
- ketik perintah **npm install**
- ketik perintah **npm run dev**
- Terakhir jalankan aplikasi dengan perintah **php artisan serve**

## Struktur Database

Aplikasi ini akan menggunakan 2 table utama, yakni users dan students. Pada studi kasus ini kita juga mencoba untuk merelasikan antar table tersebut. Berikut informasi lengkap kedua table tersebut :

- Table users

| COLUMN | TYPE DATA | etc |
| ------ | ------ | ------ |
| **id**| bigint(20) |
| **name**| varchar(255) |
| **email**| varchar(255) |
| **email_verified_at**| timestamp | nullable |
| **password**| varchar(255) |
| **photo**| varchar(255) | nullable |
| **remember_token**| varchar(100) | nullable |
| **created_at**| timestamp | nullable |
| **updated_at**| timestamp | nullable |

- Table students

| COLUMN | TYPE DATA | etc |
| ------ | ------ | ------ |
| **id**| bigint(20) |
| **name**| varchar(255) |
| **phone_number**| varchar(255) |
| **address**| varchar(255) |
| **gender**| enum('male','female') |
| **religion**| enum('male','female') |
| **created_at**| timestamp | nullable |
| **updated_at**| timestamp | nullable |
| **user_id**| bigint(20) |


