# DOKUMENTASI

## Prosedur Simpel! Ga Pake Ribet!
1. Clone repository ini menggunakan perintah / command -> `git clone https://github.com/RidianPutra/responsi-docker`
2. Masuk ke directory hasil clone menggunakan perintah / command -> `cd responsi-docker`
3. Untuk running, CUKUP ketikkan perintah / command -> `docker-compose up -d`
4. Lalu buka web browser, pada kolom URL, ketikkan -> `localhost` ATAU `localhost:80`
4. Untuk stop / menghentikannya, ketikkan perintah / command -> `docker-compose down`

## NOTE PENTING!
###### TIDAK PERLU MENDOWNLOAD IMAGES-IMAGES secara manual melalui Docker Hub atau yang lainnya, dikarenakan :
- Saat perintah / command `docker-compose up -d` dijalankan, maka secara otomatis akan mendownload images-images yang diperlukan

> SKIP ATAU TIDAK PERLU MENGIKUTI STEP-STEP DI BAWAH JIKA TIDAK ADA ERROR PADA WEBSITE!

###### JIKALAU, saat membuka `localhost` ATAU `localhost:80` terdapat error MySQL pada website, itu dikarenakan :
- Database sudah terkoneksi, namun tidak ditemukan, sehingga harus membuat database terlebih dahulu, dengan cara :
1. Pada kolom URL Web Browser, ketikkan -> localhost:8080 -> ini berfungsi untuk membuka halaman database Adminer
2. Masuk ke database Adminer sebagai superuser dengan data sebagai berikut :
   - System : MySQL
   - Server : db
   - Username : root
   - Password : example
   - Database : (leave empty) -> kosongkan kolom ini!
3. Sesudah memasukkan data seperti di atas, klik Login
4. Tinggal membuat database dengan nama "responsi", lalu buat 1 table saja dengan nama "mahasiswa", isi dari tablenya adalah :
   - kampus -> varchar(100)
   - nama -> varchar(100)
   - nim -> varchar(15)
   - prodi -> varchar(30)
   - kelas -> varchar(10)
   - matkul -> varchar(30)
   - dosen -> varchar(100)
5. JGN BERI PRIMARY KEY atau KEY APAPUN pada setiap column table!, dan tidak perlu mengisi data pada table tersebut!
6. Sekarang, pada kolom URL Web Browser, ketikkan kembali -> localhost ATAU localhost:80

***THANK YOU!***
