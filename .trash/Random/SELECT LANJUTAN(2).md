# AND
## Penjelasan
1. `select` query yang digunakan untuk menampilkan masukan dari `insert`
2. `warna,pemilik` merupakan nama kolom dari mobil
3. `from` query yang digunakan untuk memberi tanda bahwa tabel mana yang akan di tampilak
4. `where` query yang digunakan untuk memberikan sebuah kondisi
5. `warna='hitam' and pemilik='ibrahim'` merupakan sebuah kondisi untuk query dan `and` digunakan untuk memberikan syarat yang keduanya harus di penuhi 
## Struktur Query
```mysql
SELECT kolom1,kolom2 FROM [nama_tabel] WHERE kolom1="nilai1" AND kolom2="nilai2";
```
## Contoh Query
```MYSQL
SELECT warna,pemilik FROM mobil WHERE warna="HITAM" AND pemilik="REZKY";
```
## Hasil
![[Screenshot 2024-02-20 141411.png|500]]
## Kesimpulan
jika ingin menampilakan data yang telah di seleksi dengan cara memberikan syarat yang semuanya harus di penuhi kalian bisa menggunakan query dengan struktur  `select kolom1,kolom2 from nama_table where kolom1='nilai_kolom1' and kolom2='nilai_kolom2';`

# OR
## Penjelasan
1. `select` query yang digunakan untuk menampilkan masukan dari `insert`
2. `warna,pemilik` merupakan nama kolom dari mobil
3. `from` query yang digunakan untuk memberi tanda bahwa tabel mana yang akan di tampilak
4. `where` query yang digunakan untuk memberikan sebuah kondisi
5. `warna='hitam' or pemilik='ibrahim'` merupakan sebuah kondisi untuk query dan `or` digunakan untuk memberikan syarat yang salah satunya harus di penuhi 
## Struktur Query
```MYSQL
 SELECT kolom1,kolom2 FROM [nama_tabel] WHERE kolom1="nilai1" OR kolom2="nilai2";
```
## Contoh Query
```MYSQL
 SELECT warna,pemilik FROM mobil WHERE warna="HITAM" OR pemilik="REZKY";
```
## Hasil
![[lanjutan (2).png|500]]
## Kesimpulan

# BETWEEN
## Penjelasan

## Struktur Query
```MYSQL
 SELECT * FROM [nama_tabel] WHERE kolom1 BETWEEN nilai1 AND nilai2;
```
## Contoh Query
```mysql
 SELECT * FROM mobil WHERE harga_rental BETWEEN 50000 AND 100000;
```
## Hasil
![[lanjutan (3).png|500]]
## Kesimpulan

# NOT BETWEEN
## Penjelasan
## Struktur Query
```MYSQL
 SELECT * FROM [nama_tabel] WHERE kolom1 NOT BETWEEN nilai1 AND nilai2;
```
## Contoh Query
```MYSQL
 SELECT * FROM mobil WHERE harga_rental NOT BETWEEN 100000 AND 150000;
```
## Hasil
![[not between.png|500]]
## Kesimpulan

# <=
## Penjelasan

## Struktur Query
```mysql
 SELECT * FROM [nama_tabel] WHERE kolom1 <= nilai1;
```
## Contoh Query
```mysql
 SELECT * FROM mobil WHERE harga_rental <= 100000;
```
## Hasil
![[lebih kecil.png|500]]
## Kesimpulan

# >=
## Penjelasan

## Struktur Query
```mysql
SELECT * FROM [nama_tabel] WHERE kolom1 >= nilai1;
```
## Contoh Query
```mysql
SELECT * FROM mobil WHERE harga_rental >= 100000;
```
## Hasil
![[lebih besar.png|500]]
## Kesimpulan

# <> atau !=
## Penjelasan

## Struktur Query
```mysql
SELECT * FROM [nama_tabel] WHERE kolom1 <> nilai1;

SELECT * FROM [nama_tabel] WHERE kolom1 != nilai1;
```
## Contoh Query
```mysql
SELECT * FROM mobil WHERE harga_rental <> 100000;

SELECT * FROM mobil WHERE harga_rental != 50000;
```
## Hasil
![[tidak sama dengan.png|500]]

![[tdk sma dgn.png|500]]
## Kesimpulan

# Tantangan login
## Penjelasan
`SELECT nama FROM tantangan` : merupakan perintah SQL untuk mencari kolom nama yang berada di tabel tantangan.
`WHERE nama="REZKY AWALYA` : query SQL untuk mencari keberadaan data yang bernama "REZKY AWALYA" yang berada di dalam kolom `nama`.
## Query
```mysql
SELECT nama FROM tantangan
    -> WHERE nama="REZKY AWALYA";
```
## Hasil
![gambar](ASET/tantangan_login.png)
## Kesimpulan


# IN
## Penjelasan

### Struktur Querry
```mysql
SELECT * FROM [nama_tabel] WHERE [nama_kolom] IN("nilai1","nilai2");
```
### Contoh Query
```MYSQL
 SELECT * FROM mobil WHERE warna IN("Silver","Merah");
```
### Hasil
![[asetbs/in.png|500]]
### Kesimpulan

# IN + AND
## Penjelasan

### Struktur Query
```mysql
  SELECT * FROM [nama_tabel]
-> WHERE [nama_kolom1] IN("nilai1","nilai2")
-> AND [nama_kolom2] = nilai;
```
### Contoh Query
```MYSQL
  SELECT * FROM mobil
-> WHERE warna IN("Silver","Merah")
-> AND harga_rental = 50000;
```
### Hasil
![[in and.png|500]]
### Kesimpulan

# IN + OR
## Penjelasan

## Struktur Query
```mysql
SELECT * FROM [nama_tabel]
-> WHERE [nama_kolom1] IN ('nilai1','nilai2')
-> OR [nama_kolom2] = nilai1;
```
## Contoh Query
```MYSQL
SELECT * FROM mobil
-> WHERE warna IN ('Hitam','Silver')
-> OR harga_rental = 150000;
```
## Hasil
![[in or.png|500]]
## Kesimpulan

## IN + AND + OPERATOR
## Penjelasan

## Struktur Query
```mysql
 SELECT * FROM [nama_tabel]
-> WHERE [nama_kolom1] IN ('nilai1','nilai2')
-> AND [nama_kolom2] > nilai1;

 SELECT * FROM [nama_tabel]
-> WHERE [nama_kolom1] IN ('nilai1','nilai2')
-> AND [nama_kolom2] < nilai1![[tntngan lbih kcil.png]];
```
## Contoh Query
```MYSQL
 SELECT * FROM mobil
-> WHERE warna IN ('Hitam','Silver')
-> AND harga_rental > 50000;

 SELECT * FROM mobil
-> WHERE warna IN ('Hitam','Silver')
-> AND harga_rental < 150000;
```
## Hasil
![[tntngan lebih besar.png|500]]

![[tntngan lbih kcil.png|500]]
## Kesimpulan

# LIKE
## Mencari Awalan
### Penjelasan
### Struktur Query 
```mysql
select * from [nama_tabel]
-> where [nama_kolom] like 'nama_awal%';
```
### Contoh Query
```mysql
select * from mobil
-> where pemilik like 'ay%';
```
### Hasil
![mysql](ASET/awalan.png)
### Kesimpulan

## Mencari Akhiran
### Penjelasan
### Struktur Query 
```mysql
select * from [nama_tabel]
-> where [nama_kolom] like '%nama_akhir';
```
### Contoh Query
```mysql
select * from mobil
-> where pemilik like '%y';
```
### Hasil
![mysql](ASET/akhiran.png)
### Kesimpulan

## Mencari Awalan & Akhiran
### Penjelasan
### Struktur Query 
```mysql
 select * from [nama_tabel]
-> where [nama_kolom] like 'nama_awal%nama_akhir';
```
### Contoh Query
```mysql
 select * from mobil
-> where pemilik like 'a%a';
```
### Hasil
![mysql](ASET/awalakhir.png)
### Kesimpulan

## Berdasarkan Total Karakter
### Penjelasan

### Struktur Query
```mysql
select * from [nama_tabel]
	-> Where [nama_kolom] LIKE 'awalan+_sesuaijumlahkarakter';

select * from [nama_tabel]
    -> Where [nama_kolom] LIKE '_sesuaijumlahkarakter';
```
### Contoh Query
```mysql
select * from mobil
	-> Where pemilik LIKE 'A___';

select * from mobil
    -> Where pemilik LIKE '___';
```
### Hasil
![mysql](ASET/karakter.png)
![mysql](ASET/krkter.png)
### Kesimpulan

## Kombinasi
### Penjelasan
### Struktur Query
```mysql
select * from mobil
    -> Where pemilik LIKE 'A%___';

select * from mobil
    -> Where pemilik LIKE '__a%';
```
### Contoh Query
```mysql
select * from mobil
    -> Where pemilik LIKE '__y%';
    
select * from mobil
    -> Where pemilik LIKE '__a%';
```
### Hasil

### Kesimpulan

## NOT LIKE

### Penjelasan
### Struktur Query
```mysql
 select * from [nama_tabel]
-> where [nama_kolom] NOT LIKE 'nama_awal%/%nama_akhir';
```
### Contoh Query
```mysql
 select * from mobil
-> where pemilik NOT LIKE 'A%';
```
### Hasil
![mysql](ASET/not_like.png)
### Kesimpulan
# NULL & NOT NULL
## Mencari data kosong
### Penjelasan

### Struktur Query
```mysql
select * from mobil
    -> where peminjaman is null;
```
### Contoh Query
```mysql
select * from mobil
    -> where peminjaman is null;
```
### Hasil

### Kesimpulan

## Mencari data yang tidak kosong
### Penjelasan

### Struktur Query
```mysql
select * from mobil
    -> where peminjaman is null;
```
### Contoh Query
```mysql
select * from mobil
    -> where peminjaman is not null;
```
### Hasil

### Kesimpulan

# ORDER BY & LIMIT
## Mengurutkan data dari data terkecil
### Penjelasan

### Struktur Query
```mysql
select * from [nama_tabel]
    -> ORDER BY [nama_kolom] ASC;
```
### Contoh Query
```mysql
select * from mobil
    -> ORDER BY pemilik ASC;
```
### Hasil

### Kesimpulan

## Mengurutkan data dari yang terbesar
### Penjelasan

### Struktur Query
```mysql
select * from [nama_tabel]
    -> ORDER BY [nama_kolom] DESC;
```
### Contoh Query
```mysql
select * from mobil
    -> ORDER BY pemilik DESC;
```

### Hasil

### Kesimpulan

## Membatasi data yang tampil
### Penjelasan

### Struktur Query
```mysql
SELECT * FROM (nama_tabel) WHERE (nama_kolom = "nilai" ORDER BY (nama_kolom) ASC LIMIT 2;
```
### Contoh Query
```MYSQL
SELECT * FROM daftar_mobil WHERE warna = "hitam" ORDER BY harga_rental ASC LIMIT 2;
```
### Hasil
![gambar](ASET/LIMIT.png)
### Kesimpulan

# DISTINCT
## Penjelasan
untuk menyeleksi data yang duplikat
## Struktur Query
```mysql
SELECT DISTINCT[(nama_kolom)] FROM [nama_tabel];

SELECT DISTINCT[(nama_kolom)] FROM [nama_tabel] ORDER BY ]nama_kolom] DESC;
```
## Contoh Query
```mysql
SELECT DISTINCT(pemilik) FROM mobil;

SELECT DISTINCT(harga_rental) FROM mobil ORDER BY harga_rental DESC;
```
## Hasil

## Kesimpulan

# CONCAT, CONCAT_WS, AS
## Menggabungkan kolom tanpa pemisah
### Penjelasan

### Struktur Query
```mysql
SELECT CONCAT(nama_kolom) FROM nama_tabel;
```
### Contoh Query
```mysql
SELECT CONCAT(pemilik,warna) FROM mobil;
```
### Hasil

### Kesimpulan

## Menggabungkan kolom dengan pemisah
### Penjelasan

### Struktur Query
```mysql
SELECT CONCAT_WS("-",nama2_kolom) FROM nama_tabel;
```
### Contoh Query
```mysql
SELECT CONCAT_WS("-",no_plat,no_mesin,id_mobil) FROM mobil;
```
### Hasil

### Kesimpulan

## Memberikan nama kolom alias
### Penjelasan
### Struktur Query
```mysql
SELECT CONCAT_WS("+",nama2_kolom) AS nama_kolom_baru FROM nama_tabel;
```
### Contoh Query
```mysql
SELECT CONCAT_WS("+",pemilik,peminjaman) AS COLLAB FROM mobil;
```
### Hasil

### Kesimpulan

# VIEW
## Membuat tabel virtual
### Penjelasan
### Struktur Query
```mysql
CREATE VIEW nama_kolom_baru AS
-> SELECT nama2_kolom
-> FROM nama_tabel;
-> WHERE nama_kolom = isi_kolom;
```
### Contoh Query
```mysql
CREATE VIEW info_no_plat AS
-> SELECT id_mobil, no_plat, pemilik, peminjaman
-> FROM mobil
-> WHERE pemilik = "ALYA";
```
### Hasil

### Kesimpulan

## Menampilkan tabel virtual
### Penjelasan

### Struktur Query
```mysql
SELECT * FROM nama_tabel_baru;
```

### Contoh Query
```mysql
SELECT * FROM info_no_plat;
```
### Hasil

### Kesimpulan

## Menghapus tabel virtual
### Penjelasan

### Struktur Query
```mysql
DROP VIEW nama_tabel_baru;
```
### Contoh Query
```mysql
DROP VIEW info_no_plat;
```
### Hasil

### Kesimpulan

# Tantangan View
## Nomor 1
### Penjelasan
`CREATE VIEW mobil_tanpa_peminjam AS` : adalah perintah untuk membuat sebuah view baru atau seperti tabel baru dalam basis data dengan nama mobil_tanpa_peminjam.
- `SELECT no_plat, peminjaman` : adalah perintah untuk memilih dua kolom, yaitu no_plat dan peminjam, dari tabel mobil.
- `FROM mobil` : Menunjukkan bahwa data diambil dari tabel bernama mobil.
- `WHERE peminjam IS NULL` :  adalah klausa WHERE yang mencari baris-baris dari tabel mobil dimana nilai kolom peminjam adalah NULL.

- SELECT *: adalah perintah untuk memilih semua kolom dari view atau tabel.
- FROM mobil_Tanpa_peminjam: Menunjukkan bahwa data diambil dari view yang disebut mobil_Tanpa_peminjam, yang telah dibuat sebelumnya.

### Query
```mysql
CREATE VIEW
    -> mobil_tanpa_peminjam AS
    -> SELECT no_plat,peminjaman
    -> FROM mobil
    -> WHERE peminjaman IS NULL;
```
### Hasil
![gambar](ASET/1.png)]
### Kesimpulan
CREATE VIEW mobil_tanpa_peminjam AS Select no_plat, peminjaman FROM mobil WHERE peminjaman IS NULL; digunakan untuk membuat sebuah view baru bernama mobil_Tanpa_peminjam. Viewnya berisi dua kolom, yaitu no_plat dan peminjaman, yang diambil dari tabel mobil hanya baris-baris yang memiliki nilai NULL pada kolom peminjam yang dimasukkan ke dalam view. 

SELECT * FROM mobil_tanpa_peminjam; digunakan untuk menampilkan semua data dari view mobil_Tanpa_peminjam, yang telah dibuat sebelumnya dengan kriteria yang bernilai NULL.
## Nomor 2
### Penjelasan
UPDATE mobil: adalah perintah untuk memperbarui data dalam tabel yang disebut mobil.
- SET peminjaman = NULL : `menetapkan nilai kolom peminjam menjadi NULL.`
- WHERE peminjam= 'ALYA' : adalah klausa WHERE yang membatasi update hanya pada baris-baris dimana nilai kolom peminjam adalah 'ALYA'. Maksudnya perubahan hanya akan berlaku untuk baris-baris yang memiliki peminjam dengan nama 'ALYA'.

- SELECT *: adalah perintah untuk memilih semua kolom dari view atau tabel.
- FROM mobil_tanpa_peminjam: Menunjukkan bahwa data diambil dari view yang disebut "mobil_tanpa_peminjam", yang telah dibuat sebelumnya.

### Query
```mysql
UPDATE mobil
    -> SET peminjaman = NULL
    -> WHERE peminjaman = 'ALYA';
```
### Hasil
![gambar](ASET/2.png)

![[1 1.png]]

### Kesimpulan
`UPDATE mobil SET peminjaman = NULL WHERE peminjaman = 'ALYA';` nilai pada kolom peminjaman pada tabel `mobil`yang memiliki nilai 'ALYA' akan diubah menjadi NULL.
Kesimpulannya, perintah digunakan untuk menghapus atau mengubah nilai peminjaman menjadi NULL untuk semua data di tabel mobil yang berada di kolom `peminjaman`memiliki nilai 'ALYA'.

SELECT * FROM mobil_tanpa_peminjam; digunakan untuk menampilkan semua data dari view mobil_tanpa_peminjam, yang telah dibuat sebelumnya dengan mengubah atau menghapus nilai peminjam menjadi NULL untuk tabel mobil dimana peminjam memiliki nilai ALYA.
## Nomor 3
View digunakan untuk menyaring data sesuai dengan kriteria tertentu, seperti menampilkan data yang memiliki nilai NULL pada kolom tertentu atau mengubah salah satu data peminjaman menjadi NULL. Memberikan pandangan yang jelas tentang mobil yang tersedia untuk disewakan atau yang belum memiliki peminjam.
Dengan membuat view, kita dapat membatasi akses ke data sensitif atau kolom tertentu dari tabel yang mungkin tidak perlu diakses oleh semua pengguna.
Dengan membuat view untuk kueri yang sering digunakan, Anda dapat menghindari pengulangan kode SQL yang sama di beberapa tempat dalam aplikasi atau prosedur penyimpanan.
# AGREGASI
## SUM
### Penjelasan

### Struktur Query
```mysql
SELECT SUM(nama_kolom) FROM nama_tabel;
```
### Contoh Query
```mysql
SELECT SUM(harga_rental) FROM mobil;
```
### Hasil

### Kesimpulan

## Count
### Penjelasan

### Struktur Query
```mysql
SELECT COUNT(nama_kolom) FROM nama_tabel;

SELECT COUNT(nama_kolom) FROM nama_tabel;
```
### Contoh Query
```mysql
SELECT COUNT(pemilik) FROM mobil;

SELECT COUNT(peminjaman) FROM mobil;
```
### Hasil

### Kesimpulan

## MIN
### Penjelasan

### Struktur Query
```mysql
SELECT MIN(nama_kolom) AS nilai_minimum FROM nama_tabel;
```
### Contoh Query
```mysql
SELECT MIN(harga_rental) AS MINIMAL FROM mobil;
```
### Hasil

### Kesimpulan

## MAX
### Penjelasan

### Struktur Query
```mysql
SELECT MAX(nama_kolom) AS nilai_minimum FROM nama_tabel;
```
### Contoh Query
```mysql
SELECT MAX(harga_rental) AS MAXIMAL FROM mobil;
```
### Hasil

### Kesimpulan

## AVG
### Penjelasan

### Struktur Query
```mysql
SELECT AVG(nama_kolom) AS rata-rata FROM nama_tabel;
```
### Contoh Query
```mysql
SELECT AVG(harga_rental) AS RATA_RATA FROM mobil;
```
### Hasil

### Kesimpulan

# ALTER
## Struktur Query
## Contoh Query
## Hasil

