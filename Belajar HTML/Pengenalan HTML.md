---
sticker: lucide//zap
---
___
# Struktur Dasar HTML
```HTML
<!DOCTYPE html>
<html>
    <head>
        <title>I LOVE U</title>
    </head>
    <body>
        <p>nah im just kidding</p>
    </body>
</html>
```
___
> [! info] Tag 
> > [! example] `<!DOCTYPE html`
> > > Memberitahukan web browser bahwa dokumen HTML adalah versi 5
> > 

___
> [! info] Tag pembuka 
> > [! example] `<html>`
> > > Menandai awal sebuah dokumen HTML sampai dengan tag penutup `</html>`

___
> [! info] Tag pembuka 
> > [! example] `<head>`
> > >Berisi informasi tentang halaman HTML sampai dengan tag penutup `</head>`
> >

___
> [! info] Tag
> > [! example] `<title>`
> > >Untuk memberikan informasi judul halaman HTML
 
____
> [! info] Tag
> > [! example] `<body>`
> > >Apapun tag berada di antara tag pembuka `<body` sampai tag penutup `</body>` akan tampil di web browser

___
![Result|500](../asethtml/Screenshot%20(1).png)
____
# Anatomi Elemen HTML
### ***Tag pembuka dan Tag penutup
- Tag pembuka dan tag penutup merupakan dua bagian dari suatu elemen dalam HTML yang berfungsi sebagai ==penentu awal dan akhir dari elemen tersebut.== Tag pembuka akan dimulai dengan nama elemen yang diapit oleh tanda kurung sudut atau tanda lebih kecil dan tanda lebih besar ("<" dan ">"). Tag penutup juga hampir sama dengan tag pembuka, akan tetapi tag penutup memiliki karakter garis miring tambahan ("/") sebelum nama elemennya. contoh ini, `<a>` adalah tag pembuka, dan `</a>` adalah tag penutup
### ***Atribut Tag
- Atribut tag bisanya akan merujuk ke sebuah ==informasi tambahan tentang elemen html tertentu.== bisanya atribut tag akan di sertakan didalam tag pembuka dan akan memberikan nilai khusus kepada elemen tersebut. Atribut berfungsi dalam menentukan dana mengonfigurasi sifat-sifat elemen, seperti warna, tautan, atau ukuran. 
### ***Isi atau Konten Tag***
- Isi atau konten tag biasa akan merujuk pada sebauh informasi yang ==akan ditempatan== di antara dua tag yaitu tag pembuka dan tag penutup. Artinya, isi atau konten dari sebuah tag merupakan sebuah data yang akan ditampilkan atau diolah oleh web browser ketikan halaman html di-render, dan juga isi atau konten tag bisa dapat berupa teks, gambar, hyperlink, atau elemen-elemen html lainnya tergantung pada jenis tag html
```html
<!DOCTYPE html>
<html>
    <head>
        <title>AA KASIAN AA</title>
    </head>
    <body>
        <a href="https://www.instagram.com"> Klik disini </a>
    </body>
</html>
```
___
```html
<a href="https://www.instagram.com"> Klik disini </a>
```
___
> [! note] Penjelasan singkat Tag di atas
> > `href`merupakan nilai atribut 
> > `<a href="https://www.instagram.com">` merupakan tag pembuka
> > `"https://www.instagram.com"`merupakan nilai atribut 
> > `Klick disini`merupakan nama dari Link
> > `</a>`merupakan tag penutup

- 	***Result***
![Result|500](../asethtml/2024-01-16%20(1).png)
___
# Tag Dasar
## _Heading_
```html
<!DOCTYPE html>
<html>
    <head>
        <title>AA KASIAN AA</title>
    </head>
    <body>
        <h1>FOLLOW</h1>
        <h2>FOLLOW</h2>
        <h3>FOLLOW</h3>
        <h4>FOLLOW</h4>
        <h5>FOLLOW</h5>
        <h6>FOLLOW</h6>
    </body>
</html>
```
- `<h1>` Untuk membuat judul atau heading `</h1>` 
	 Merupakan Tag HTML yang digunakan untuk menunjukkan bagian penting pada halaman website dan memiliki enam tingkatan yang berurutan yaitu H1 hingga H6. 
- 	 ***Result***
![image|500x300](../asethtml/heading.png)
___
## _Paragraf_
```html
<!DOCTYPE html>
<html>
  <head>
      <title>Judul cok</title>
  </head>
     <body>
        <p>Hello World</p>
        <p>WWW atau World Wide Web</p>
    </body>
</html>
```
- Di tag paragraf juga terdapat beberapa tag seperti `<p>`, `<b>`, `<i>`, `<u>`, `<br>`.
	`<b>` Untuk menebalkan text atau **Bold**
	`<i>` Untuk memiringkan text atau italyan styel
	`<u>` Untuk garis bawa
	`<br>`Untuk baris baru
- ***Result***
![paragraf|500x300](../asethtml/textp.png)
___
## _Atribut Align_
-	di tag paragraf juga memiliki beberapa atribut yaitu align atribut ini berfungsi sebagai mengatur  perataan teks atau paragraf seperti 
	`align="left"` yang dimana  memiliki fungsi untuk megatur teks untuk rata kiri
	`align="right"` yang dimana memiliki fungsi untuk mengatur teks utuk rata kanan
	`align="center"`yang dimana memiliki fungsi untuk mengatur teks untuk rata tengah
	`align="justify"` yang dimana memiliki fungsi untuk mengatur teks untuk rata kiri dan kanan
```html
<!DOCTYPE html>
<html>
  <head>
      <title>Judul cok</title>
  </head>
     <body>
        <h3>Belajar Menggunakan Elemen Tag html</h3>
        <p align="left">kiri</p>
        <p align="right">kanan</p>
        <p align="center">tengah</p>
        <p align="justify">kiri kanan</p>
    </body>
</html>
```
- ***Result***
![image|500x300](../asethtml/align.png)
___
## _Komentar_
- HTML juga mempunyai tag khusus untuk komentar untuk membuat komentar di html kita menggunakan awalan  "`<!--`" penutup " `-->` ".
```html
<!-- ini komentar, tidak akan di tampilkan di browser-->
<p>ini bukan komentar, dan akan tampil di browser</p>
```
 - ***Result***
![image|500x300](../asethtml/komentar.png)
___
## _List_
- list adalah fungsi di html yang di gunakan untuk menampilkan daftar dari sesuatu. Dalam HTML , tag list terdiri dari 2 jenis, `<ol>` ordered list (berurutan) dan `<ul>` unordered list (tidak berurutan). Ordered list yang akan menampikan angka atau huruf, sedangkan unordered list yang akan menampilkan simbol-simbol seperti simbol bulat atau kotak
```html
<!DOCTYPE html>
<html>
    <body>
    <h1>peralatan XI RPL 1</h1>
           <ul>
            <li>sapu</li>
            <li>meja</li>
            <li>papan tulis</li>
            <li>kipas</li>
           </ul>
     <h1><p>absen XI RPL 1</h1></p>
           <ol>
            <li>ABD.Rahman</li>
            <li>ANUGRAH</li>
            <li>AHSAN</li>
           </ol>
    </body>
</html>
```
- ***Result***
![image|500x300](../asethtml/list.png)
___
## _Link_
- link dapat ditemukan di hampir semua halaman web. link/tautan memungkinkan sebuah teks yang ketika di klik akan berpindah ke halaman lainnya. HTML menggunakan tag `<a>` untuk keperluan ini. link ditulis dengan `<a>` yang merupakan singkatan cari anchor(jangkar).
-  Setiap tag `<a>` setidaknya memiliki sebuah atribut `href` berisi alamat yang dituju.`herf` adalah atribut singkatan dari hypertext reference.
- Atribut penting lainnya dari tag `<a>` adalah `target` . Atribut target menetukan tempat untuk membuka dokumen yang ditautkan. Atribut `target` memiliki beberapa nilai salah satunya `_blank` yang berfungsi untuk membuka tautan di tab baru
```html
<h3>menggunkan tag anchor</h3>
<a herf="https://www.google.com" target="_blank">klik disini untuk ke google</a><br>
<a herf="halaman_selanjutnya.html" target="_blank">klik disini untuk ke halamann selanjutnya
```
- ***Result***
![image|500x300](../asethtml/link.png)
___
## `Multimedia`
## **Gambar**
- dalam HTML, gambar didefinisikan dengan tag `<img>`, tag `<img>` adalah tag kosong, hanya berisi atribut saja, dan tidak memiliki tag penutup. Atribut `src` setidaknya mesti dalam tag ini untuk menentukan URL (alamat web) dari gambar yang ingin ditampilkan. Atribut menyediakan teks alternatif untuk gambar, jika pengguna karena beberapa alasan tidak dapat melihatnya (karena koneksi lambat, kesalahan pada atribut `src` , atau jika web browser telah disetting untuk tidak menampilkan gambar). jika dapat menemukan gambar, maka akan muncul nilai pada atribut alt. 
	- Dalam tag `<img>` terdapat juga atribut `width` dan  `height` untuk mengatur ukuran gambar, pada versi HTML 5 standar satuan ukuran gambar adalah pixel
		misalnya dalam folder root terdapat file gambar bernama logo.png. untuk menampilkan gambar tersebut kita hanya perlu mengisi nama gambar beserta jenis ekstensi file gambar kedalam atribut `src` 
```html
<!DOCTYPE html>
<html>
  <head>
      <title>Judul cok</title>
  </head>
     <body>
        <img src="Aset/naon.jpg" width="500" height="300"></img>
     </body>
</html>
```
- ***Result***
![image|500x300](../asethtml/dogy.png)
___
## _Video_
-
	- dalam HTML, video didefinisikan dengan tag `<video>`, tag `<video>` adalah tag yang digunakan untuk memasukkan video kedalam web, di tag `<video>` terdapat tag khusus yang dimana tag ini tidak memiliki tag penutup yaitu `<source>` yang Digunakan untuk menyediakan beberapa sumber video dan memberi browser pilihan format yang sesuai. 
	- Dalam tag `<video>` terdapat juga atribut   `controls` yang digunakan untuk Menambahkan kontrol pemutaran standar seperti play, pause, dan volume, dan juga di tag `<video>` ada atribut `width` dan `height` yang digunakan untuk mengatur ukuran video, pada versi HTML 5 standar satuan ukuran video adalah pixel, dan juga di dalam nya juga terdapat atribut `type` yang di gunakan untuk menentukan tipe MIME (Multipurpose Internet Mail Extensions) dari file video yang disematkan.
	- misalnya dalam folder root terdapat file video bernama video.mp4. untuk menampilkan video tersebut kita hanya perlu mengisi nama video beserta jenis ekstensi file video didalam tag `<source>` dan didalamnya atribut `src` terus juga didalam tag `<source>` kita beri juga didalamnya atribut `type` untuk menetukan tipe MIME(Multipurpose Internet Mail Extensions) di file video yang di sematkan.
```html
<video src="Aset/keris.mp4" controls></video>
```
- ***Result***
![image|500x300](../asethtml/eternals.png)
___
## _Audio_
- 
	- Di HTML, tag `<audio>` digunakan untuk menyematkan dan memainkan file audio di halaman web. Tag ini memungkinkan pengembang web menyertakan file audio langsung di dalam dokumen HTML, memungkinkan pemutaran langsung di halaman tanpa perlu mengarahkan pengguna ke halaman terpisah atau menggunakan pemutar audio eksternal. di dalam tag `<audio>` juga memiliki atribut yaitu `src` ,  `controls` , `type` yang memiliki fungsi masing masing
		- `src` digunakan untuk menentukan URL atau path ke file media yang akan dimainkan.
		- `controls` yang digunakan untuk Menambahkan kontrol pemutaran standar seperti play, pause, dan volume.
		- `type` digunakan untuk menentukan tipe MIME (Multipurpose Internet Mail Extensions) dari file audio yang disematkan.
		- `<source>` Digunakan untuk menyediakan beberapa sumber audio dan memberi browser pilihan format yang sesuai.
```html
<audio src="Aset/Audio.mp3" controls></audio>
```
- ***Result***
![image|500x300](../asethtml/audio.png)
___
## **Halaman web lain**
 - Elemen `<iframe` dapat di gunakan untuk menampilkan halaman website lain dalam suatu website, atau menampilkan dokumen HTMLlain dalam sebuah website. Mudahnya bisa di bilang websute dalam website.
 > [! tip] Contoh penggunaannya seperti ini. jika kita mempunyai website sekolah, lalu di website tersebut ingin menampilkan alaamat dalam google maps sekolah. Agar memudahkan pengunjung wensite, kita bisa langsung tampilkan saa halaman sekolah yang ada di google maps 
 
- Dalam tag `<iframe>` ada beberapa atribut yang penting seperti;
	- `src` untuk mencari halaman html atau web yang akan ditampilkan di dalam frame
	- `width` dan `height` untuk mengatur ukuran panang dan lebar dari frame.
```html
<iframe src="https://www.smkn7makassar.sch.id/" width="600" height="500"></iframe>
```
- ***Result***
![image|500x300](../asethtml/iframe.png)
___
## `Table`
- Tabel dalam HTML didefinisikan dengan tag `<table>`
	- setiap baris baru tabel dengan tag `<tr>`
	- Header (judul) tabel didefinisikan dengan tag `<th>`. Secara default, header tabel memiliki teks tabel dan berada di tengah
	- Data tabel/sel didefinisikan dengan tag `<td>`. Karena sel merupakan bagian terkecil dari tabel maka dari itu tag ini berada di dalam tag `<tr>`.
```html
    <table border="1">
     <tr>
       <th>Nama</th>
       <th>Asal Institusi</th>
     </tr>
     <tr>
       <td>Dannnt</td>
     </tr>
    </table>
```
___
> [! tip] Perhatikan bahwa pada tag `<table>` terdapat sebuah atribut `border`. Atribut `<border` di gunakan untuk memberikan nilai garis tepi dari tabel. Nilai ini dalam ukuran pixel `<border="1"`, berarti kita menginstuksikan kepeda web browser bahwa tabel tersebut akan memiliki garis tepi sebesar 1 pexil. Jika tidak ditambahkan, secara default tabel tidak memiliki garis tepi.
- Selain itu, terdapat pula beberapa atribut tabel yang penting untuk di ketahui yaitu;
	- `rowspan` merupakan atribut HTML yang berfungsi untuk menggabukan beberapa baris (ke bawah)
	- `colspan` atau column span merupakan atribut HTML yang berfungsi untuk menggabungkan beberapa kolom (ke samping)
	- `width` berfungsi untuk mengatur lebar tabel yang nilainya didefinisikan dalam satuan pixel secara default
	- `height` berfungsi untuk mengatur tinggi tabel yang nilainya didefinisikan dalam satuan pixel secara default.
	- `align` berfungsi untuk mengatur perataan teks pada tabel. Nilai atribut yang tepat diberikan yaitu `left` untuk perataan teks ke kiri, `right` untuk perataan teks ke kanan, dan `center` untuk perataan teks ke tengah
```html
    <table border="1">
     <tr>
       <th rowspan="2">Nama</th>
       <th colspan="2">Asal Institusi</th>
     </tr>
     <tr>
       <th width="100">Sekolah</th>
       <th width="100">Kampus</th>
     </tr>
     <tr>
       <td>Dannt</td>
       <td>SMK 7 MKS</td>
       <td>Universitas Indonesia</td>
     </tr>
     <tr>
       <td>BomBom</td>
       <td rowspan="2">SMK 7 MKS</td>
       <td align="center" rowspan="2">-</td>
     </tr>
     <tr>
       <td>Hayril</td>
     </tr>
     <tr>
       <td>Fahri</td>
       <td>SMK 7 MKS</td>
       <td>Universitas Gajah Madah</td>
     </tr>
    </table>
```
- ***Result***
![image|500x300](../asethtml/tabel.png)
___
>[! tip]- Info
>Perhatikan pada konten elemen `<td>` yang berisi `Hayril`. hanya terdapat satu elemen `<td>` disana. Hal ini dikarenakan konten elemen `<td` sebelumnya yaitu `SMK 7 MKS` dan `-` pada kata `BomBom` mengandung atribut `rowspan` dengan nilai `2` yang secara otomatis mengisi data di bawahnya yakni data `Hayril`. Nilai `2` menunjukkan bahwa ada dua baris  yang digabungkan menjadi satu.
> ___
> Konsep ini juga sama dengan apa yang terjadi pada `<th rowspan="2">Nama</th>`
> dan `<th colspan="2">Asal Institusi</th>`.
# Form
- Elemen `<form>` HTML digunakan untuk mendefinisikan form yang digunakan untuk mengumpulkan inputan dari pengguna website. Tag ini digunakan untuk mengkoleksi inputan dari user, konsep ini sama seperti konsep formulir di dunia nyata.
> [! tip]- -
>  Dengan kata lain tag `<form>` merepresentasikan sebuah "formulir" di mana satu formulir bisa memiliki banyak kolom isian.

- Form HTML berisikan elemen-elemen `form` lainnya. Elemen `<form>` digunakan untuk menampung macam-macam elemen yang berkaitan dengan sebuah `form,` seperti `text fields, checkbox, radio button`, tombol `submit`, dan banyak lagi yang dapat diedit kemudian ditulis untuk dikirim pada sebuah server untuk selanjutnya diproses guna mendapatkan informasi tertentu dari atau untuk user.
- Umumnya, sebuah website selalu memiliki fitur form, contoh paling umum yang sering kita temui adalah seperti form login, form sign up, form komentar di suatu blog/media.
## **Input**
- Elemen `<input>` adalah elemen `form` yang paling penting. Elemen `<input>` dapat ditampilkan dalam beberapa cara, tergantung pada nilai atribut type yang digunakan. Berikut adalah beberapa contoh nilai dari atribut `type`:
	- `text` digunakan untuk mengambil isian berupa teks. Contohnya seperti nama.		- `password` digunakan untuk mengambil isian berupa kata sandi atau sesuatu yang bersifat rahasia. Tipe ini akan mengubah semua karakter yang diketikkan ke dalam karakter bulat.
	- `radio` digunakan sebagai kolom isian bertipe pilihan yang menawarkan beberapa opsi kepada user namun tetapi hanya satu opsi saja yang boleh dipilih. Contohnya seperti jenis kelamin atau agama.Perlu diperhatikan bahwa untuk penggunaan tipe `radio` yang berkategori set pilihan yang sama mengharuskan nilai `name` -nya juga sama. Opsi default dapat dilakukan dengan menambahkan atribut `checked` pada elemen opsi yang dijadikan sebagai opsi default.
	- `checkbox` digunakan untuk memberikan daftar pilihan dalam satu set opsi. User dapat memilih satu atau bahkan lebih dari satu pilihan pada tipe ini. Hal ini berbeda dengan tipe sebelumnya yaitu `radio` yang hanya memungkinkan user untuk memilih satu pilhan saja. Contoh penggunaan `checkbox` seperti daftar makanan kesukaan, daftar olahraga yang tidak disukai, dan yang semisalnya. Perlu diperhatikan bahwa untuk penggunaan tipe `checkbox` yang berkategori set pilihan yang sama mengharuskan nilai `name` -nya juga sama.
	 - `number` digunakan untuk membatasi isian user hanya pada karakter numerik saja. Browser akan menambahkan dua buah tombol atas dan bawah untuk mengubah angka isian. Beberapa atribut untuk tip `number`:
		- `min` - menentukan angka minimal
		- `max` - menentukan angka 
		- `step` - menentukan kelipatan (nilai yang tidak sesuai kelipatan tidak bisa di-input, dan default dari atribut ini adalah `1`)
	- `date` digunakan untuk memberikan isian berupa tanggal. Atribut `min` dan `max` dapat pula difungsikan pada tipe ini untuk mengatur tanggal minimal dan tanggal maksimal yang diinginkan. Nilai `min` dan `max` tersebut ditulis dengan format: `YYYY-MM-dd`
	- `file` digunakan untuk memungkinkan pengguna memuat file. Atribut `accept` juga dapat disisipkan pada tipe ini dengan maksud untuk mengatur file apa saja yang boleh di-upload. Beberapa contoh value dari atribut `accept` yaitu:
		- `accept="image/png,image/jpg, image/jpeg"` - untuk file gambar seperti png, jpg, atau jpeg
		- `accept-".pdf"` - untuk file pdf
		- `accept=".pdf"` - untuk file pdf
		- `accept=".doc, .docx`" untuk file `doc` atau `docx`
		- `accept=".ppt, .pptx` - untuk file `ppt` atau `pptx`
	- `submit` ditampilkan dalam bentuk tombol untuk mengirim data pada `<form>` yang menjadi pembungkusnya. Atribut `value` digunakan untuk mengisi teks yang ingin ditampilkan pada tombol.
	- `reset` berguna untuk ==mengembalikan state (keadaan) atau data dari suatu _form_ ke nilai awalnya==. Jika nilai awal sebuah input adalah kosong, maka ketika direset ia akan kembali kosong. Tapi jika nilai awalnya sudah terisi sesuatu, maka ketika direset datanya akan kembali seperti yang sudah diset sebelumnya.
	- `button` berguna untuk membuat ==inputan berupa sebuah tombol==. Tombol ini nantinya bisa difungsikan sesuai dengan keinginan dari pengembang web.
___
## **Label**
- Elemen label memiliki fungsi khusus untuk melabeli sebuah kolom inputan. Ketika screen reader membaca konten halaman HTML, lalu menemukan sebuah inputan, ia akan membaca label yang bersangkutan.
- Fungsi lain dari tag `<label>` adalah ketika kita mengklik label, maka browser akan meletakkan fokus pada kolom isian yang terhubung dengannya. Syarat yang perlu diperhatikan yaitu dengan menghubungkan sebuah `<label>`dan `<input>` dengan atribut `<for>` untuk `<label>`, dan atribut `<id>` pada  dengan nilai untuk kedua atribut tersebut mesti sama persis.
___
## **Select**
- Elemen `<select>` berguna dalam mendefinisikan sebuah tombol ==dropdown== yang dimana user dapat memilih salah satu dari banyak pilihan. 
- `<aside>`Elemen `<select>` nantinya berperan sebagai kontainer atau pembungkus dari elemen `<option>` yang berperan sebagai daftar pilihan atau opsi.`</aside>`
- Elemen `<select>` hampir mirip fungsinya dengan `<input type=”radio">` akan tetapi baiknya elemen `<select>` digunakan untuk memilih satu pilihan yang terdapat banyak opsi di dalamnya, sedangkan `<input type=”radio">` lebih baiknya untuk digunakan jika  user diarahkan memilih hanya satu pilihan yang opsi pilihannya tidak terlalu banyak. Contoh penggunaan elemen ini seperti memasukkan pilihan berupa asal daerah atau yang semisalnya.Penting untuk diketahui  bahwasanya opsi yang aktif secara default adalah adalah opsi yang pertama. Akan tetapi, kita bisa mengatur opsi mana yang aktif secara default dengan menambahkan atribut selected pada suatu `<option>` yang ingin dijadikan sebagai opsi default. 
___
## **Text Area**
- Elemen `<textarea>` berguna untuk mengambil inputan user berupa teks yang dapat memuat *lebih dari satu baris*. Jika dibandingkan dengan elemen `<input>` teks biasa, elemen `<textarea>` memiliki ukuran tinggi yang lebih besar. Element textarea bisa diisi lebih dari satu baris dengan menekan enter. Atribut yang dapat digunakan untuk mengatur kuran dari textarea yaitu rows untuk jumlah baris, sedangkan atribut cols untuk lebarnya.
___
## **Button**
- Elemen `<button>` yang berada di dalam sebuah form akan otomatis dianggap sama fungsinya seperti `<input type="submit">`. Jika ingin membuat tombol biasa yang tidak men-submit `<form>` dapat dilakukan dengan menambahkan atribut type="button".
- Beberapa atribut yang digunakan pada contoh di atas yang perlu untuk diperjelas yaitu sebagai berikut:
```html
<h1>Formulir Pendaftaran</h1>
<form action="">
  <div>
    <label for="nama-lengkap"><b>Nama Lengkap:</b></label
    ><br />
    <input
      type="text"
      id="nama-lengkap"
      name="nama_lengkap"
      placeholder="Masukkan nama lengkap"
      required
    />
  </div>
  <div>
    <label for="password"><b>Password:</b></label
    ><br />
    <input
      type="password"
      id="password"
      name="password"
      placeholder="Masukkan password"
      required
    />
  </div>
  <div>
    <b>Jenis Kelamin:</b><br />
    <input id="lk" type="radio" name="jenis_kelamin" checked />
    <label for="lk">Laki-Laki</label>
    <input id="pr" type="radio" name="jenis_kelamin" />
    <label for="pr">Perempuan</label>
  </div>  
  <div>
    <label for="isian-usia"><b>Usia:</b></label
    ><br />
    <input
      type="number"
      id="isian-usia"
      name="usia"
      min="17"
      max="25"
      value="19"
      required
    />
    Tahun
  </div>
  <div>
    <label for="tgl-ijazah"><b>Tanggal Ijazah:</b></label> <br />
    <input
      type="date"
      id="tgl-ijazah"
      name="tgl_ijazah"
      min="2021-01-01"
      value="2023-06-20"
      required
    />
  </div>
  <div>
    <label for="opsi-agama"><b>Agama:</b></label
    ><br />
    <select id="opsi-agama" name="agama" required>
      <option disabled>---Pilih Agama----</option>
      <option value="islam">Islam</option>
      <option value="kristen">Kristen</option>
      <option value="katolik">Katolik</option>
      <option value="hindu">Hindu</option>
      <option value="buddha">Buddha</option>
      <option value="atheis" disabled>Atheis</option>
    </select>
  </div>
  <div>
    <label for="alamat"><b>Alamat:</b></label> <br />
    <textarea
      id="alamat"
      name="alamat"
      cols="25"
      rows="5"
      placeholder="Harap masukkan alamat secara lengkap"
      required
    ></textarea>
  </div>
  <div>
    <b>Kemampuan Berbahasa Asing:*</b><br />
    <input type="checkbox" id="inggris" name="bahasa_asing" />
    <label for="inggris">Inggris</label>
    <input type="checkbox" id="arab" name="bahasa_asing" />
    <label for="arab">Arab</label>
    <input type="checkbox" id="jepang" name="bahasa_asing" />
    <label for="jepang">Jepang</label>
  </div>
  <div>
    <label for="isian-foto"><b>Foto 4x6:*</b></label
    ><br />
    <input
      type="file"
      id="isian-foto"
      name="foto"
      accept="image/png,image/jpg,image/jpeg"
    />
  </div>
  <br />
  <input type="submit" value="Kirim" />
  <input type="reset" value="Batal" />
  <i>*opsional (tidak wajib diisi)</i>
</form>
```
- ***Result***
![image|](../asethtml/button.png)
 - Penjelasan
	- `name` - digunakan sebagai nama variabel yang akan diproses oleh web server (contoh menggunakan PHP)
	- `required` - digunakan untuk memastikan bahwa pengguna harus memasukkan nilai pada input tersebut sebelum dapat melakukan proses submit formulir
	- `placeholder` - menuliskan teks pada elemen input. Placeholder sangat bermanfaat untuk memberikan teks bantuan kepada user untuk inputan form yang kompleks
	- `value` - menentukan nilai awal dari sebuah elemen input
	- `disabled` - digunakan untuk menonaktifkan inputan pada elemen yang diberi atribut 
___
# Div & Span
## `<div>`
- `<div>` adalah tag HTML yang digunakan untuk membuat blok konten. Tag ini digunakan untuk mengelompokkan konten dan memberikan atribut tertentu pada blok tersebut, contoh;
```html
<!DOCTYPE html>
<html lang="en">
<head>
     <title>Document</title>
</head>
<body>
      <!--div digunakan untuk memblok satu areadengan tanda baris baru setelahnya-->
      <div>ini dibuat menggunakan div</div>
      <div>ini juga menggunakan div</div>
     </body>
</html>
```
- Result
![image](asethtml/div.png)
## `<span>`
- ini adalah tag HTML yang digunakan untuk membuat blok konten yang tidak memiliki atribut tertentu. Contoh;
```html
<!DOCTYPE html>
<html lang="en">
<head>
     <title>Document</title>
</head>
<body>
      <!--div digunakan untuk memblok satu areadengan tanda baris baru setelahnya-->
      <span>ini di buat menggunakan span</span>
      <span>ini juga menggunakan sapan</span>
     </body>
</html>
```
- Result
![image](../asethtml/span.png)
