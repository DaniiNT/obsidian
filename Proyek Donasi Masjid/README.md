# Admin Login~
email : nurrahmatrahmat344@gmail.com

password ; 12345678

# Terdapat 2 Role beserta masing-masing fiturnya
Role 1 : Admin

Role 2 : User/pengguna

# Fitur-Fitur
## Fitur Admin
- Akses Admin panel
- Buat daftar donasi baru
- Aksi verifikasi, tolak, hapus, edit donasi
- Pagenation
- CSS Style
- Logout
## Fitur User
- Lihat Daftar donasi yang di buat admin(homepage)
- Beri Donasi
- Responsive
- Pagenation
- CSS Style

# Cara Mengakses Website Donasi Masjid
1. Download Folder Zip ini (`Proyek Donasi Masjid`)
2. Extrak Zip tersebut di File Manager
3. Buka xampp dan start `Apache` dan `Mysql`
4. Buka Browser apapun kemuadin ketik `localhost/phpmyadmin/`
5. Import file `donasi_masjid.sql`
6. Buka Text Editor (Visual Studio Code* Disarankan)
7. Kemudian buka folder dan cari folder `proyek` di File Manager
8. Lalu buka browser dan ketik `localhost/proyek/`
# Pengaplikasian Website Donasi Masjid
Ketika anda talah berada di dalam website Donasi Masjid di bagian Homepage atau `index` anda bisa melihat detail donasi dari Daftar Donasi yang telah di buat oleh admin, jika anda mengakses Detail Donasi anda dapat melihat daftar siapa saja yang telah memberi donasi dan bukti-buktinya, anda juga dapat mengakses tombol `Beri Donasi` di sana anda dapat menginput Nama, Jumlah Donasi, dan Bukti Donasi, setelah memberi donasi anda akan melihat daftar donasi yang telah anda input, sekarang anda hanya menunggu donasi anda di verifikasi oleh admin apakah donasi anda sah atau tidak, selagi menunggu anda bisa melihat status donasi anda jika belum di verifikasi oleh admin maka status yang tampil adalah `menunggu` jika donasi sah maka status adalah `diterima` begitupun jika tidak sah atau tidak valid `ditolak`. Jika anda adalah admin anda dapat melakukan aksi untuk memverifikasi donasi-donasi yang tidak sah atau tidak valid, sebagai admin juga anda dapat menghapus daftar donasi yang tidak sah dengan aksi `delete`, kemudian jika terdapat donatur yang mengeluhkan salah menginput jumlah donasi yang berbeda dengan bukti donasinya maka sebagai admin anda dapat melakukan aksi `edit` dilakukan apabila terjadi kesalahan input namun status doansi tersebut sah.
