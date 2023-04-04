## Hello, <img src="https://media.giphy.com/media/hvRJCLFzcasrR4ia7z/giphy.gif" width=25> !
<br>

(h1)LokerkuID(h1)
</br>
(![image](https://user-images.githubusercontent.com/114797825/229726270-42a75ce8-e77c-4613-a9af-75371775c336.png)

Developed by : <br>

| No  | Nama                               | NIM        | Role            |
| --- | ---------------------------------- | ---------- | --------------- |
| 1   | [Achmad Rozan Chaidir]             | 1202204268 | Project Manager |
| 2   | [Muhammad Nizar Ali]               | 1202204213 | Bisnis Analyst  |
| 3   | [Melati Puspa Vania Asyara]        | 1202204082 | Programmer      |
| 4   | [Amara Prita Nadyatama]            | 1202200100 | Programmer      |
| 5   | [Muhammad Rafie Wirandra]          | 1202204364 | Programmer      |
| 6   | [Sulaiman Ilhan Mahendra]          | 1202204166 | Programmer      |


## About LokerkuID
`LokerkuID` adalah sebuah website pencarian kerja yang dapat digunakan untuk mencari lowongan kerja yang sesuai dengan yang diinginkan. Website ini memiliki fitur `training` yang dapat anda gunakan untuk mengasah skill anda dalam suatu pekerjaan. Selain itu, website ini juga memiliki fitur `sertifikasi` yang dapat digunakan sebagai bukti bahwa anda benar-benar kompeten dalam pekerjaan yang akan anda lamar.
Website `LokerkuID` dikembangkan menggunakan framework `Bootstrap` sebagai frontend dan `Laravel` sebagai backend.


## Repository Structure

Repository ini disusun sebagai berikut:

-   `main` adalah main branch repositori dan berisi kode versi stabil terbaru.
-   `Name` adalah Branch repositori yang digunakan untuk mengembangkan fitur baru yang dikerjakan oleh masing masing programmer dan digabungkan menjadi main saat sudah selesai.

## Cara Menjalankan Aplikasi
*Salin perintah ini di terminal kamu atau git bash*

- Clone project from github

```bash
git clone https://github.com/SI-RPL-2023/SI4402_228_TITIPAN.git 
```

- Copy the .env.example file to .env

```bash
cp .env.example .env
```

- Change the database name in the .env file

```bash
DB_PORT=your_mysql_port
DB_DATABASE=your_database_name
```

- Install Composer

```bash
composer install
```

- Generate Key

```bash
php artisan key:generate
```

- Migrate Database

```bash
php artisan migrate
```

- Link Storage

```bash
php artisan storage:link
```

- Run the server

```bash
php artisan serve
```
