

## Test Interview

## Instalasi

- Clone App
- Ekstrak App di direktori anda
- Buka direktori app menggunakan [Visual Studio Code](https://code.visualstudio.com/)
- Buat database di mySQL anda 
- Kemudian untuk konfigurasi database ada di file .env 
- Pada file .env ubah pada bagian
```bash
DB_DATABASE=<nama_db_anda>
DB_USERNAME=<username_mysql>
DB_PASSWORD=<password_mysql>
```

- Setelah membuat database dan konfigurasi database di file .env, di VSCODE tekan CTRL + ~ di root directory project
- Setelah terminal VSCODE terbuka Masukkan perintah 
```bash
    php artisan migrate
```
- Setelah migrate selesai. Masukkan lagi perintah 
```bash
    php artisan serve
```
- Aplikasi akan berjalan di [http://localhost:8000](http://localhost:8000)
