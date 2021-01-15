

## Test Interview

## Instalasi

- Clone App
- Ekstrak App di direktori anda
- Buka menggunakan [Visual Studio Code](https://code.visualstudio.com/)
- Buat database di mySQL anda 
- Kemudian untuk konfigurasi database ada di file .env 
- Pada file .env ubah pada bagian
```bash
DB_DATABASE=<nama_db_anda>
DB_USERNAME=<username_mysql>
DB_PASSWORD=<password_mysql>
```

- Setelah membuat database dan konfigurasi database di file .env masuk kembali ke VSCODE dan tekan CTRL + ~
- Masukkan perintah 
```bash
    php artisan migrate
```
