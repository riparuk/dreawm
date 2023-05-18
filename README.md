##Dreawm adalah platform yang menyediakan fitur menulis impian dan explorasi impian orang-orang

### Cara menjalankan (Harap Baca!) : 
- Clone repo, ketik : 
`git clone git@github.com:riparuk/dreawm.git`
- Setelah repo di clone, masuk kedalam folder yang telah di clone dan install composer dependencies. ketik : 
`composer install`
- kemudian install dependencies node.js dengan perintah : `npm install`
- Configurasi file .env caranya : Salin file .env.example dan ubah nama filenya menjadi .env, Atur konfigurasi database, seperti nama database, username, password, dan host.
- Jalankan perintah `php artisan key:generate` untuk membuat APP_KEY baru
- Jika ingin melakukan migrate untuk membuat tabel-tabel pada database yang telah diatur pada file .env, jalankan `php artisan migrate`
- Jika ingin melalukan seed data untuk mengisi data dump ke dalam database jalankan `php artisa db:seed`
- Jalankan perintah `php artisan serve` untuk menjalankan server lokal
- Jalankan perintah `npm run dev` untuk menjalankan server node.js

