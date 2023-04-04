### Nama    : Mohammad Nafis Nailul Murom <br>
### Asal    : Universitas Islam Malang <br>

## Cara Menjalankan Aplikasi
1. Clone Reposity ke local melalui cmd dengan format perintah "git clone (lin reposity)"
2. Buka terminal cmd pada folder reposity yang telah didownload kemudian ketik perintah "composer install"
3. Buka project melalui text editor dan buka terminal pada text editor
4. Ubah nama database sesuai database yang dibuat pada file .env.example dan save menjadi file .env
5. pada terminal vscode ketik perintah "php artisan key: generate" untuk membuat key pada file .env
6. kemudian keti perintah php artisan migrate
7. kemudian jalankan project dengan cara "php artisan serve"