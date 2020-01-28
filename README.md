## Web Development "Live Coding Workshop Series" - UMPAR

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
