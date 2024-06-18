# Anatomi CSS 
```css
  selektor{
    /*Preperty dan Nilai */
  }
  
/* Contoh */
 p{
    color: white;
 }
```
- `p` Ini merupakan Selektor,selektor adalah bagian dari aturan CSS yang menentukan elemen HTML mana yang akan di-styling. Selektor bisa berupa nama elemen HTML, kelas, ID, atau kombinasi dari hal-hal tersebut
- `color` Merupakan property atribut sedangkan `white` adalah nilai dari atribut
# Percobaan Pertama CSS
```html
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <style>
        p{
            color: red;
        }
    </style>
</head>
<body>
    <p>Selamat Datang</p>
</body>
</html>
```
- `<!DOCTYPE html>` Tag yang menentukan versi HTML yang digunakan adalah versi 5
- `<head>` Ini adalah bagian dari dokumen HTML yang berisi meta-informasi tentang dokumen, seperti karakter set yang digunakan, viewport, judul dokumen, dan referensi ke berkas CSS atau JavaScript.
- `<title>` Ini adalah judul dokumen yang akan ditampilkan di bilah judul atau tab peramban.
- `<style>` Tag ini digunakan untuk menyematkan gaya CSS ke dalam dokumen HTML.
- `<p>` Ini adalah selektor CSS yang memilih semua elemen `<p>` (paragraf) dalam dokumen HTML.
- `{ color: red; }` - Ini adalah blok deklarasi yang berisi satu properti CSS, yaitu `color`, yang ditetapkan ke nilai `red`. Artinya, semua teks dalam elemen `<p>` akan ditampilkan dengan warna merah.
![IMAGE](asetcss/1.png)
# Percobaan Kedua CSS
## Kode
 ```css
 button {
     width: 150px;
     height: 150px:
     backround-color: crimson;
     color: aqua;
     font-size: 50pt;
 }
```
___
## backround-color
Before:
![image](asetcss/button.png)
After:
![image](asetcss/bgcolor.png)
Penjelasan:
- Ketika program dari tag button di beri atribut `backround-color: crimson;` maka warna latar dari button akan berubah sesuai dengan yang di inginkan, terlihat perbedaannya sebelum di beri atribut `backround-color: crimson;` warna dari latar button tetap berwarna putih alias default.
## color:
Before:
![image](asetcss/button.png)
After:
![image](asetcss/color.png)
Penjelasan:
- Ketika program dari tag button di beri atribut `color: aqua:` maka warna font dari button tersebut berubah menjadi warna sesuai yang di inginkan terlihat perbedaan sebelum di beri atribut `color: aqua;` warma dari font button tersebut tetap berwana hitam alias default.
## Font-size
Before:
![image](asetcss/button.png)
After:
![image](asetcss/font.png)
Penjelasan:
- Terlihat di atas perbedaannya ketika button di beri atribut `font-size: 50pt;` ukuran dari buttob tersebut langsung berubah menjadi besar karena atribut tersebut.
# Cara Pemanggilan CSS
## Inline
- **Inline CSS** Gaya CSS disematkan langsung ke dalam elemen HTML menggunakan atribut `style`. Contohnya:
```html
 <p style="color: red;">Selamat Datang</p>
```
![image](asetcss/1.png)
## Internal
**Internal CSS** Aturan gaya CSS ditempatkan di dalam elemen `<style>` di bagian `<head>` dokumen HTML. Contohnya:
```html
    <style>
        p{
            color:red;
        }
    </style>
```
![image](asetcss/1.png)
## External
**External CSS** Aturan gaya CSS ditempatkan di dalam berkas terpisah dengan ekstensi `.css` dan disematkan ke dalam dokumen HTML menggunakan tag `<link>`. Contoh jika aturan gaya disimpan dalam berkas bernama `style.css`.
```html
<link rel="stylesheet" type="text/css" href="style.css">
```
Dengan menggunakan metode eksternal CSS, Anda dapat memiliki satu berkas CSS yang diterapkan ke banyak halaman HTML, sehingga memungkinkan untuk mengelola gaya secara terpusat dan memisahkan struktur dari presentasi dalam halaman web Anda.
```css
p{
color: red;
}
```
Dalam pemanggilan CSS, Anda dapat menetapkan gaya untuk berbagai elemen HTML menggunakan selektor CSS. Beberapa contoh selektor CSS yang umum meliputi:
- **Nama Elemen**: Misalnya, `p` untuk paragraf, `h1`, `h2`, dll., untuk judul.
- **Kelas**: Ditandai dengan titik (`.`) diikuti dengan nama kelas. Contoh: `.class-name`.
- **ID**: Ditandai dengan tanda pagar (`#`) diikuti dengan nama ID. Contoh: `#id-name`.
![image](asetcss/1.png)
# Selektor
## Elemen
```css
 p{
    color: red;
}
``` 
- **Penjelasan**: Dalam contoh ini, kita memiliki sebuah selektor elemen `p`. Ini berarti kita sedang memilih semua elemen paragraf dalam dokumen. Gaya CSS yang didefinisikan akan diterapkan pada semua elemen tersebut. Dalam kasus ini, elemen-elemen tersebut akan memiliki ukuran font 16 piksel dan jarak antar baris (line-height) sebesar 1.5.
## ID
```css
#css {
    color: red;
}
```    
- **Penjelasan**: Dalam contoh ini, kita memiliki sebuah selektor ID `#css`. Ini berarti kita sedang memilih elemen dengan ID "header". Gaya CSS yang didefinisikan akan diterapkan pada elemen tersebut. Dalam kasus ini, elemen tersebut akan memiliki latar belakang berwarna biru muda, teks berwarna putih, dan padding sebesar 10 piksel.
## Class
```css
.css {     
    color: white;
}
```   
- **Penjelasan**: Dalam contoh ini, kita memiliki sebuah selektor class `.button`. Ini berarti kita sedang memilih semua elemen yang memiliki kelas "button". Gaya CSS yang didefinisikan akan diterapkan pada semua elemen tersebut. Dalam kasus ini, elemen-elemen tersebut akan memiliki latar belakang hijau, teks berwarna putih, padding sebesar 8 piksel di atas dan bawah serta 16 piksel di kiri dan kanan, tidak ada border, dan sudut-sudut yang diperbulatkan
# Text
## Text Align
- Digunakan untuk mengatur penataan horizontal teks di dalam sebuah elemen.
- Properti `text-align` dapat diatur ke nilai seperti `left`, `right`, `center`, atau `justify`.
```css
.text{
    text-align: /*Nilai*/;
}
```
- **Left**: Mengatur teks agar berada di sebelah kiri elemen.
```css
.text {     
    text-align: left; 
}
```
![image](asetcss/left.png)
- **Right**: Mengatur teks agar berada di sebelah kanan elemen.    
 ```css
.text { 
    text-align: right; 
}
```
![image](asetcss/right.png)
- **Center**: Mengatur teks agar berada di tengah elemen.
```css 
.text {     
    text-align: center;
}
```
![image](asetcss/center.png)
- **Justify**: Mengatur teks agar rata kiri dan kanan, kecuali pada baris terakhir yang bisa berada di sebelah kiri.
```css 
.text {
    text-align: justify;
}
```
![image](asetcss/just.png)
## Text Decoration
- Mengatur dekorasi teks seperti garis bawah, garis atas, atau garis melintang.
- Properti `text-decoration` memiliki nilai seperti `none`, `underline`, `overline`, `line-through`, dan `inherit`.
```css
.text{
    text-decoration: /*Nilai*/;
}
```
**None**: Tidak ada dekorasi pada teks.
```css
.text {
    text-decoration: none;
}
```
![image](asetcss/left.png)
- **Underline**: Menambahkan garis bawah pada teks.
```css
.text {
    text-decoration: underline;
}
```
![image](asetcss/under.png)
**Overline**: Menambahkan garis di atas teks.
```css
.text {
    text-decoration: overline;
}
```
![image](asetcss/over.png)
**Line-through**: Menambahkan garis melintang pada teks.
```css
.text {
    text-decoration: line-through;
}
```
![image](asetcss/trough.png)
## Text Transfrom
**None**: Tidak ada transformasi pada teks (kapitalisasi tidak diubah).
```css
.text {
    text-transform: none;
}
```
**Uppercase**: Mengubah semua huruf dalam teks menjadi huruf besar (uppercase).
```css
.text {
    text-transform: uppercase;
}
```
![image](asetcss/upper.png)
**Lowercase**: Mengubah semua huruf dalam teks menjadi huruf kecil (lowercase).
```css
.text {
    text-transform: lowercase;
}
```
![image](asetcss/lower.png)
**Capitalize**: Mengubah setiap awal kata dalam teks menjadi huruf besar (uppercase).
```css
.text {
    text-transform: capitalize;
}
```
![image](asetcss/capital.png)
## Text Indent
- Mengatur jarak indentasi dari awal baris pertama dalam sebuah paragraf atau elemen.
- Properti `text-indent` diukur dalam satuan seperti piksel atau persen.
```css
.text {
    text-indent: 20px;
}
```
![image](asetcss/indent.png)
## Letter Spacing
- Mengatur jarak antara setiap huruf dalam teks.
- Properti `letter-spacing` dapat diatur dengan nilai positif (untuk meningkatkan jarak) atau negatif (untuk mengurangi jarak).
```css
.text {
    letter-spacing: 5px;
}
```
![image](asetcss/letter.png)
## Line Height
- Mengatur tinggi baris dalam teks.
- Properti `line-height` dapat diatur sebagai nilai numerik, persentase, atau menggunakan nilai `normal`.
```css
.text {
    line-height: 1.5;
}
```
![image](asetcss/line.png)
## Word Spacing
- Dan terakhir ialah word-spacing fungsinya untuk memberi jarak di antara setiap kata dan valuenya dapat di atur sesuai keinginan kita
```css
.test{
    word-spacing: 10px;
}
```
![item](asetcss/wrds.png)
# Background
- Mempelajari value dan atribut dari materi backround
## Background image
- Atribut ini digunakan untuk memberi gambar di tampilan web dan bisa di sempurnakan bentuknya menggunakan atribut lain, hasil di bawah ini berbeda karena hanya menggunakan satu atribut
```css
.test{
    background-image: url(naon.jpg);
}
```
![image](asetcss/bckr.png)
## Background Size
- Background size kita mengatur size/ukuran dari background yang kita gunakan dan valuenya dapat kita atur sesuai dengan keinginan kita.
```css
.test{
   background-image: url(naon.jpg);
   width: 100%;
   height: 100VH;

   background-size: 50%;
```
![image](asetcss/bsize.png)
## Background Repeat
- Background-repeat ini mengulang gambar dalam ukurannya dan untuk penggunaannya
```css
.container{
 background-image: url(./naon.jpg);
 width: 100%;
 height: 100VH;
 background-size: 50px;
 background-repeat: repeat;
 }
```
![image](asetcss/bgrepeat.png)
## Background Attachment
- background-attachment ini mengatur ketetapan image yang di gunakan contohnya ialah seperti penggunaan value "fixed" yang membuat gambar tetap berada di posisinya walau di scroll
```css
.container{
         background-image: url(naon.jpg);
         width: 400px;
         height: 70px;
         background-size: 90%;
         background-attachment: fixed;
        }
```
![image](asetcss/fix.png)
# Background Position
- dan yang terakhir ialah background-postion dan fungsinya ialah untuk mengatur posisi dari background yang digunakan, untuk contoh penggunaanya aka seperti dibawah ini :
```css
.container {
    background-position:10% ,50% ;
}
```
![image](asetcss/pos.png)
# Font
## Font Size
Font-size adalah properti CSS yang digunakan untuk mengatur ukuran font teks dalam sebuah elemen HTML.

### Kode Program
```css
.element{
     font-size : 100px;
}
```
### Hasil
![image](asetcss/fsize.png)
### Kesimpulan
properti font-size: 100px;, ukuran font dalam elemen tersebut akan diperbesar menjadi 100 piksel.
## Font-style italic
Font-style adalah properti CSS yang digunakan untuk menentukan gaya huruf (font style) dari sebuah teks.
italic: Menampilkan teks dalam gaya miring (italic), jika font tersebut mendukung.
### Kode program
```css
.element{
     font-style: italic ;
}
```
### Hasil
![image](asetcss/fstyle.png)
### Kesimpulan
properti `font-style: italic;`, teks dalam elemen tersebut akan ditampilkan dengan gaya huruf miring.

## Font-weight Bold
`font-weight: bold;` dalam CSS, teks dalam elemen yang diberi aturan tersebut akan ditampilkan dengan ketebalan huruf yang lebih tebal dari biasanya. 
### Kode program
```css
.element{
     font-weight: bold ;
}
```
### Hasil
![image](asetcss/fw.png)
### Kesimpulan
`font-weight: bold;`, teks dalam elemen tersebut akan memiliki gaya huruf tebal.

## Font-family Arial
`Font-family justify`properti ini mengatur teks agar rata di kedua sisi, sehingga ruang antara kata-kata disesuaikan untuk mengisi seluruh lebar elemen dengan cara yang seragam.
### Kode Program
```css
.element{
    font-family: arial;
}
```
### Hasil
![image](asetcss/ff.png)
### Kesimpulan
atribut `font-family: aria;;` akan mengubah gaya text dari default ke gaya arial
# Box Model
## Border-Width
`Border-wkdth`digunakan untuk menentukan lebar border dari sebuah elemen.
### Kode Program
```css
.element{
    border-width: 5px;
}
```
### Hasil
![image](asetcss/bw.png)
### Kesimpulan
Dalam CSS, properti `border-width` digunakan untuk mengatur lebar dari border sebuah elemen

## Border-style solid
`border-style: solid;` adalah properti CSS yang mengatur gaya border menjadi garis lurus dan solid.
### Kode program
```css
.element{
   ​​​​border-style: solid;
}
```
### Hasil
![image](asetcss/sl.png)
### Kesimpulan
`border-style: solid;` adalah properti CSS yang mengatur gaya border menjadi garis lurus dan solid.

## Border-color orangered
`border-color: orangered`; adalah properti CSS yang mengatur warna border dari sebuah elemen menjadi oranye merah (orangered). 
## Kode program
```css
.element{
      border-color: orangered;
}
```
## Hasil 
![image](asetcss/bc.png)
### Kesimpulan
Mengatur warna atau memberikan warna orangered pada pinggiran  border 
# Box Model(Tantangan)
## Penjelasan HTML
- `<!DOCTYPE html>`: Mendefinisikan jenis dokumen HTML.
- `<html lang="en">`: Mengawali dokumen HTML dengan bahasa Inggris.
- `<head>`: Bagian kepala dokumen yang berisi informasi meta dan judul.
- `<meta charset="UTF-8">`: Mendefinisikan karakter set dokumen sebagai UTF-8.
- `<meta name="viewport" content="width=device-width, initial-scale=1.0">`: Mengatur tampilan responsif di perangkat dengan lebar layar yang berbeda.
- `<title>Document</title>`: Judul halaman web.
- `<link rel="stylesheet" href="tampilanweb.css">`: Menghubungkan halaman HTML dengan file CSS eksternal.
- `<body bgcolor="purple">`: Mengatur warna latar belakang halaman menjadi ungu (purple).
- `<span>`: Membuat bagian teks menjadi bagian inline.
- `<div class="text">`: Membuat sebuah div dengan kelas "text" yang berisi teks "Selamat datang".
- `<span class="text2">`: Membuat sebuah span dengan kelas "text2" yang berisi teks "di web Rahmat".
- `<img src="naon.jpg" class="foto">`: Menampilkan gambar dengan nama "naon.jpg" dengan kelas "foto".
- `<button class="tombol">Klik ini</button>`: Membuat sebuah tombol dengan teks "Klik ini" dan kelas "tombol".
## Penjelasan CSS
- `.text` dan `.text2`: Mengatur gaya teks untuk kelas "text" dan "text2". Menggunakan font Times New Roman, ukuran font 30mm, dan warna putih.
- `.foto`: Mengatur tampilan gambar dengan kelas "foto". Menerapkan display block, membuat sudut gambar menjadi bulat dengan border-radius, mengatur lebar dan tinggi gambar, mengatur posisi gambar dengan margin-left dan margin-top, serta memberikan border putih dengan lebar 10px dan gaya solid.
- `.tombol`: Mengatur tampilan tombol dengan kelas "tombol". Memberikan warna teks dan border oranye, mengatur lebar dan tinggi tombol, mengatur tampilan tombol dengan display block, memberikan warna latar belakang transparan, mengatur border dengan lebar 3px dan gaya solid, mengatur posisi tombol dengan margin-top dan margin-left, serta mengatur ukuran font.
## Kode Program
```HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tampilanweb.css">
</head>
<body bgcolor="purple">
    <span>
        <div class="text">Selamat datang
        </div>
    </span><br>
    <span class="text2">di web Rahmat</span><br>
    <img src="naon.jpg" class="foto">
    <button class="tombol">Klik ini</button>
</body>
</html>
```

```CSS
.text{
    font-family: 'Times New Roman';
    font-size: 30mm;
    color: white;
}

.text2{
    font-family: 'Times New Roman';
    font-size: 30mm;
    color: white;
}

.foto{
    display: block;
    border-radius: 1000px;
    width: 400px;
    height: 400px;
    margin-left: 735px;
    margin-top: -215px;
    border-width: 10px;
    border-color: white;
    border-style: solid;
}

.tombol{
    color: orangered;
    border-color: orangered;
    width: 160px;
    height: 85px;
    display: block;
    background-color: transparent;
    border-width: 3px;
    border-style: solid;
    margin-top: -200px;
    margin-left: 13cm;
    font-size: 20px;
}
```
## Hasil
![image](asetcss/webdis.png)
# Padding
## Padding-left
`padding-left` adalah properti CSS yang digunakan untuk menentukan jarak atau ruang tambahan di sebelah kiri konten dalam sebuah elemen. 
### Kode Program
```css
.element{
    padding-left: 29px;
}
```
### Hasil
![image](asetcss/pl.png)
### Kesimpulan
elemen HTML yang memiliki kelas "element" akan memiliki ruang tambahan di bagian kiri sebesar 29 piksel.  Dan membuat tulisan klik disini tidak terlalu ke kiri. 
## Padding-bottom
`padding-bottom` adalah properti CSS yang digunakan untuk menentukan jarak atau ruang tambahan di bagian bawah konten dalam sebuah elemen. 
### Kode Program
```css
.element{
    padding-bottom: 25px;
}
```
### Hasil
![image](asetcss/pb.png)
### Kesimpulan
 elemen HTML yang memiliki kelas "element" akan memiliki ruang tambahan di bagian bawah sebesar 25 piksel.  Dan membuat tulisan klik disini tidak terlalu ke bawah. 
## Padding-Right
`padding-right` adalah properti CSS yang digunakan untuk menentukan jarak atau ruang tambahan di sebelah kanan konten dalam sebuah elemen. 
### Kode Program
```css
.element{
    padding-right: 29px;
}
```
### Hasil
![image](asetcss/pr.png)
### Kesimpulan
elemen HTML yang memiliki kelas "element" akan memiliki ruang tambahan di bagian kanan sebesar 29 piksel.  Dan membuat tulisan klik disini tidak terlalu ke kanan. 
## Padding-top
`padding-top`adalah properti CSS yang digunakan untuk menentukan jarak atau ruang tambahan di bagian atas konten dalam sebuah elemen.
### Kode program
```css
.element{
    padding-top: 20px;
}
```
### Hasil
![image](asetcss/pt.png)
### Kesimpulan
elemen HTML yang memiliki kelas "element" akan memiliki ruang tambahan di bagian atasnya sebesar 20 piksel.  Dan membuat tulisan klik disini tidak terlalu ke atas. 
# Margin
## Margin-Left
`margin-left`adalah properti CSS yang digunakan untuk menentukan jarak atau ruang tambahan di sebelah kiri dari sebuah elemen terhadap elemen lain di sekitarnya. 
### Kode Program
```css
.element{
    margin-left: 600px;
}
```
### Hasil
![image](asetcss/ml.png)
## Margin-Top
`margin-top` adalah properti CSS yang digunakan untuk menentukan jarak atau ruang tambahan di bagian atas dari sebuah elemen terhadap elemen lain di atasnya.
### Kode Program
```css
.element{
    margin-top: 50px;
}
```
### Hasil
![image](asetcss/mt.png)
### Kesimpulan
atura gaya ini memengaruhi tata letak (layout) elemen-elemen HTML dengan selector class "element" dengan menambahkan margin di bagian atas sebesar 60 piksel.
## Margin-Right
`margin-right` adalah properti CSS yang digunakan untuk menentukan jarak atau ruang tambahan di sebelah kanan dari sebuah elemen terhadap elemen lain di sekitarnya.
### Kode program
```css
.element{
    margin-right: 60px;
}
```
### Hasil
![image](asetcss/mr.png)
### Kesimpulan
elemen-elemen HTML dengan class "element" akan memiliki jarak atau spasi tambahan sebesar 60 piksel di sebelah kanan. 
## Margin-Bottom
`margin-bottom` adalah properti CSS yang digunakan untuk menentukan jarak atau ruang tambahan di bagian bawah dari sebuah elemen terhadap elemen lain di bawahnya. 
### Kode program
```css
.element{
    Margin-bottom: 90px
}
```
### Hasil
![image](asetcss/mb.png)
### Kesimpulan
elemen-elemen yang memiliki kelas "element" akan memiliki jarak atau spasi sebesar 90 piksel di bagian bawahnya.
# Pseudo-classes
##  Hover
- Dalam HTML, kita memiliki sebuah div dengan kelas `.box`.
- Dalam CSS, kita memberikan gaya kepada `.box`, termasuk ukuran, latar belakang, border, dan lainnya.
- Dengan menggunakan selector `:hover`, kita menentukan perubahan gaya saat pengguna mengarahkan kursor ke atas elemen dengan kelas `.box`.
- Pada contoh ini, ketika pengguna melakukan hover, latar belakang elemen `.box` berubah menjadi lightblue dengan transisi yang halus.
### Kode program
```css
.box {
  width: 200px;
  height: 100px;
  background-color: #f0f0f0;
  border: 2px solid #333; 
  text-align: center;
  line-height: 100px;
  transition: background-color 0.3s ease; 
}

.box:hover {
  background-color: lightblue;

}
```
### Hasil
![image](asetcss/hv.png)
### Kesimpulan
Sebuah kotak dengan latar belakang abu-abu, tetapi saat kursor mengarah ke atasnya, latar belakangnya berubah menjadi lightblue.
## Active
- Dalam HTML, kita memiliki sebuah tombol (`<button>`) dengan kelas` .btn`.
- Dalam CSS, kita memberikan gaya kepada `.btn`, termasuk ukuran, warna, dan gaya border.
- Dengan menggunakan selector `:active`, kita menentukan perubahan gaya saat pengguna menekan tombol.
- Pada contoh ini, ketika tombol ditekan, latar belakangnya berubah menjadi abu-abu gelap (`#666`) dengan transisi yang halus.
### Kode program
```css
.btn {
  padding: 10px 20px;
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease; /* transisi perubahan warna latar belakang */
}

.btn:hover {
  background-color: lightblue; /* saat hover, latar belakang berubah menjadi lightblue */
}
  
.btn:active {
 background-color: #666; /* saat ditekan, latar belakang berubah menjadi abu-abu gelap */
}
```
### Hasil
![image](asetcss/ac.png)
### Kesimpulan
Hasilnya adalah sebuah tombol dengan latar belakang abu-abu saat ditekan.

# Transition 
### Penjelasan
+ `Transition`:  untuk mengatur pertunjukan perubahan, mengubah penampilan elemen dari satu keadaan ke keadaan lain, memberikan dinamika visual yang menarik dalam desain web Anda.
+ `Transition-delay`: properti ini memberikan momen kejutan atau antisipasi sebelum perubahan yang dijanjikan terjadi, menambah dramatisasi pada tampilan elemen.
- `Transition-duration`: menentukan lamanya waktu ketika elemen berubah, memungkinkan Anda untuk mengatur seberapa lama penonton (pengguna) menikmati perubahan tersebut.
- `Transition-property`: menentukan apa yang akan berubah, seperti warna, ukuran, atau posisi, menciptakan efek transisi yang beragam dan menarik.
- `Transition-timing-function`:  properti ini mengatur ritme perubahan, menentukan apakah transisi akan bergerak dengan lembut dan halus seperti aliran air, atau tiba-tiba dan dramatis seperti petir yang menyambar.
### Kode program
```css
.btn {
  padding: 10px 20px;
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease; 
}

.btn:hover {
  background-color: lightblue;
}
}
```
## Hasil
![vid](asetcss/trs.mp4)
# Transition(Tantangan)
## Kode Program
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="tugasflex.css">
</head>
<body bgcolor="purple">
    <div class="main-container">
    <div class="hero-container"> 
        <div class="item p">
            <p> Selamat Datang <br>
            di <b>Web Rahmat</b> </P>
            <button> klik saya </button>
        </div>
        <div>
            <span class="img">
                <img src="./naon.jpg" width="350px" height="350px" align="right">
            </span>
    </div>
    </div>
</div>
</body>
</html>
```
## Penjelasan HTML
- `<!DOCTYPE html>`, `<html lang="en">`, `<head>`, `<title>Document</title>`: Bagian awal dari dokumen HTML yang mendefinisikan tipe dokumen, bahasa, dan judul halaman.
- `<style>`: Mulai dari bagian CSS yang didefinisikan dalam dokumen HTML.
- `<body bgcolor="purple">`: Memberikan warna latar belakang halaman dengan atribut `bgcolor`.
- `<div class="main-container">`, `<div class="hero-container">`: Membuat dua div yang bertindak sebagai wadah utama dan sub-wadah.
- `<div class="item p">`: Sebuah div dengan kelas `item` dan `p` yang berisi teks dan tombol.
- `<p> Selamat Datang <br> di <b>Web Rahmat</b> </p>`: Menampilkan teks "Selamat Datang" di web Rahmat.
- `<button> klik saya </button>`: Menampilkan tombol dengan teks "klik saya".
- `<img src="./naon.jpg" width="350px" height="350px" align="right">`: Menampilkan gambar dengan atribut `src`, `width`, `height`, dan `align`.

```CSS
 .main-container {
    display:flex;
    height: 100vh;
    justify-content: space-around ;
    align-items: center  ;
    background-color: purple;
}

.hero-container {
    display:flex;
    height: 100vh;
    justify-content: space-between;
    align-items: center  ;
    background-color: purple;
}

.item {
    width: 500px;
    height: 250px;
    background-color: none;
}

 .p{
    font-size: 65px;
    font-family: 'arial';
    margin-top: 40px;
    margin-bottom: 100px;
    margin-left: 50px;
    margin-right: 100px;  
    color: aliceblue;
}

 img {
    margin-right: 100px;
    margin-top: -10px;  
    border: 10px solid white;
    border-radius: 1500px 1500px;
}

 button {
    background-color: purple;
    width: 150px;
    height: 50px;
    border-width: 2px;
    color: orange;
    border-color: orange;
    margin-bottom: 20px;
    margin-left: 290px;  
    box-shadow: 20px;
}

 button:hover {
    background-color: orange;
    color: white;
    width: 150px;
    transition: all 0.3s esse-in;
    cursor: pointer;
}

 button:active {
    transform:scale(0.5);
}
```
## Penjelasan CSS
- `.main-container`, `.hero-container`: Membuat tata letak menggunakan flexbox dengan menentukan dimensi, warna latar belakang, dan penempatan.
- `.item`: Mengatur dimensi dan warna latar belakang untuk item.
- `.p`: Mengatur gaya teks untuk paragraf.
- `img`: Mengatur margin dan gaya border untuk gambar.
- `button`: Mengatur gaya untuk tombol, termasuk dimensi, warna latar belakang, warna teks, dan margin.
- `button:hover`: Mengatur gaya tombol saat dihover dengan mengubah warna latar belakang, warna teks, dan ukuran tombol.
- `button:active`: Mengatur gaya tombol saat ditekan dengan melakukan transformasi scaling
## Hasil

# Transform 
### Penjelasan
- `transform: scale(0.5);`= Mengubah ukuran elemen menjadi setengah dari ukuran aslinya.
- `transform: scalex(0.5);`= Hanya mengubah skala elemen secara horizontal menjadi setengah dari ukuran aslinya.
- `transform: rotate(45deg);`= Memutar elemen sebesar 45 derajat searah jarum jam.
- `transform: skewX(-25deg);`= Membengkokkan elemen secara horizontal sebesar -25 derajat (ke arah kiri).
- `transform: skew(25deg,5deg);`= Membengkokkan elemen sebesar 25 derajat secara horizontal (ke kanan) dan 5 derajat secara vertikal (ke atas).
- `transform: translate(50px,52px);`= Menggeser elemen sebesar 50 piksel ke kanan dan 52 piksel ke bawah.
- `transform: matrix(0.7,-0.5,0.5,0.4,0.5,0.7);`= Menggambarkan transformasi menggunakan matriks 2D den
### Kode Program
```css
.box {
  width: 200px;
  height: 200px;
  background-color: #333;
  color: #fff;
  text-align: center;
  line-height: 200px;
  transform: rotate(45deg);
}
```
### Hasil
![image](asetcss/tfr.png)
### Kesimpulan
Setiap properti transform mengubah tampilan elemen dengan cara yang berbeda-beda sesuai dengan property. 

# Flexbox 
## Display Flex
`display: flex`, kita dapat dengan mudah mengatur tata letak elemen-elemen di dalamnya dengan properti-properti seperti `flex-direction`, `justify-content`, `align-items`, dan lain-lain.
### Kode Program
```css
.box-container{
  display: flex; /* Item-item di dalam flex container juga menjadi flex items */
}
```
### Hasil
![image](asetcss/fb.png)
### Kesimpulan
`display: flex`, kita dapat dengan mudah mengatur tata letak elemen-elemen di dalamnya menggunakan properti-properti seperti `flex-direction`, `justify-content`, `align-items`, dan properti lainnya yang terkait dengan model tata letak flexbox.
### Flex-Direction
- `flex-direction: column;`: Mengatur tata letak dari flex container menjadi vertikal, sehingga flex items diatur dari atas ke bawah.
- `flex-direction: column-reverse;`: Mengatur tata letak dari flex container menjadi vertikal terbalik, sehingga flex items diatur dari bawah ke atas.
- `flex-direction: row;`: Mengatur tata letak dari flex container menjadi horizontal, sehingga flex items diatur dari kiri ke kanan.
- `flex-direction: row-reverse;`: Mengatur tata letak dari flex container menjadi horizontal terbalik, sehingga flex items diatur dari kanan ke kiri.
### Kode Program
```css
.container{
  flex-direction: column;
}
```
### Hasil
![image](asetcss/fd.png)
### Kesimpulan
Setiap properti flex-direction mengubah tampilan elemen dengan cara yang berbeda-beda sesuai dengan property. 
Contoh`column` untuk tata letak vertikal dari atas ke bawah.
`column-reverse` untuk tata letak vertikal terbalik dari bawah ke atas. `row` untuk tata letak horizontal dari kiri ke kanan.`row-reverse` untuk tata letak horizontal terbalik dari kanan ke kiri.
### Align-Items
- `align-items: center;`: Flex items akan diatur di tengah-tengah sumbu silang dari flex container.
- `align-items: flex-start;`: Flex items akan diatur pada awal sumbu silang dari flex container.
- `align-items: flex-end;`: Flex items akan diatur pada akhir sumbu silang dari flex container.
- `align-items: baseline;`: Flex items akan diatur sedemikian rupa sehingga garis dasar dari teks pada masing-masing item berada pada level yang sama.
- `align-items: stretch;`: Flex items akan diperpanjang untuk mencapai tinggi maksimal flex container, mengisi ruang kosong di sepanjang sumbu silang.
### Kode Program
```css
.box-container{
  align-items:center ;
}
```
### Hasil
![image](asetcss/ai.png)
### Kesimpulan
Setiap properti align-items mengubah tampilan elemen dengan cara yang berbeda-beda sesuai dengan property. 
Contoh`center` untuk menempatkan flex items di tengah-tengah sumbu silang.`flex-start` untuk menempatkan flex items di awal sumbu silang.`flex-end` untuk menempatkan flex items di akhir sumbu silang.`baseline` untuk menempatkan flex items sehingga garis dasar teks masing-masing item berada pada level yang sama.`stretch` untuk memperpanjang flex items sehingga mencapai tinggi maksimal flex container, mengisi ruang kosong di sepanjang sumbu silang.
### Justify-Content
 - `justify-content: flex-start;`: Mengatur fleks item ditempatkan di bagian awal (mulai) dari sumbu utama flex container.
- `justify-content: flex-end;`: Mengatur fleks item ditempatkan di bagian akhir (akhir) dari sumbu utama flex container.
- `justify-content: center;`: Mengatur fleks item ditempatkan di tengah-tengah sumbu utama flex container.
- `justify-content: space-around;`: Mengatur fleks item didistribusikan secara merata di sekitar sumbu utama flex container, dengan ruang yang sama di antara mereka.
- `justify-content: space-between;`: Mengatur fleks item didistribusikan secara merata di sepanjang sumbu utama flex container, dengan ruang yang sama di antara fleks item pertama dan terakhir, tetapi tidak ada ruang di antara fleks item yang berdekatan.
### Kode Program
```css
.box-container{
  justify-content: center ;
}
```
### Hasil
![image](asetcss/jsc.png)
### Kesimpulan
Setiap properti justify-Content mengubah tampilan elemen dengan cara yang berbeda-beda sesuai dengan property. 
Contoh`flex-start` untuk menempatkan flex items di awal (mulai) sumbu utama.`flex-end` untuk menempatkan flex items di akhir (akhir) sumbu utama.`center` untuk menempatkan flex items di tengah-tengah sumbu utama.`space-around` untuk mendistribusikan flex items secara merata di sekitar sumbu utama dengan ruang yang sama di antara mereka.`space-between` untuk mendistribusikan flex items secara merata di sepanjang sumbu utama dengan ruang yang sama di antara flex items pertama dan terakhir, tetapi tidak ada ruang di antara flex items yang berdekatan.
# Flex Box(Tantangan)
## Kode Program
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body bgcolor="purple">
    <div class="main-container">
    <div class="hero-container"> 
        <div class="item p">
            <p> Selamat Datang <br>
            di <b>Web Rahmat</b> </P>
            <button> klik saya </button>
        </div>
        <div>
            <span class="img">
                <img src="./naon.jpg" width="350px" height="350px" align="right">
            </span>
    </div>
    </div>
</div>
</body>
</html>
```
## Penjelasan HTML
- `<!DOCTYPE html>`, `<html lang="en">`, `<head>`, `<title>Document</title>`: Bagian awal dari dokumen HTML yang mendefinisikan tipe dokumen, bahasa, dan judul halaman.
- `<style>`: Mulai dari bagian CSS yang didefinisikan dalam dokumen HTML.
- `<body bgcolor="purple">`: Memberikan warna latar belakang halaman dengan atribut `bgcolor`.
- `<div class="main-container">`, `<div class="hero-container">`: Membuat dua div yang bertindak sebagai wadah utama dan sub-wadah.
- `<div class="item p">`: Sebuah div dengan kelas `item` dan `p` yang berisi teks dan tombol.
- `<p> Selamat Datang <br> di <b>Web Rahmat</b> </p>`: Menampilkan teks "Selamat Datang" di web Rahmat.
- `<button> klik saya </button>`: Menampilkan tombol dengan teks "klik saya".
- `<img src="./naon.jpg" width="350px" height="350px" align="right">`: Menampilkan gambar dengan atribut `src`, `width`, `height`, dan `align`.
```css
.main-container {
    display:flex;
    height: 100vh;
    justify-content: space-around ;
    align-items: center  ;
    background-color: purple;

}

.hero-container {
    display:flex;
    height: 100vh;
    justify-content: space-between;
    align-items: center  ;
    background-color: purple;
}

.item {
    width: 500px;
    height: 250px;
    background-color: none;
}

.p {
    font-size: 65px;
    font-family: 'arial';
    margin-top: 40px;
    margin-bottom: 100px;
    margin-left: 50px;
    margin-right: 100px;  
    color: aliceblue;
}

img {
    margin-right: 100px;
    margin-top: -10px;  
    border: 10px solid white;
    border-radius: 1500px 1500px;
}

button {
    background-color: purple;
    width: 150px;
    height: 50px;
    border-width: 2px;
    color: orange;
    border-color: orange;
    margin-bottom: 20px;
    margin-left: 290px;  
    box-shadow: 20px;
}
```
## Penjelasan CSS
- `.main-container`, `.hero-container`: Membuat tata letak menggunakan flexbox dengan menentukan dimensi, warna latar belakang, dan penempatan.
- `.item`: Mengatur dimensi dan warna latar belakang untuk item.
- `.p`: Mengatur gaya teks untuk paragraf.
- `img`: Mengatur margin dan gaya border untuk gambar.
- `button`: Mengatur gaya untuk tombol, termasuk dimensi, warna latar belakang, warna teks, dan margin.
## Hasil
![image](asetcss/pos2.png)
## Kesimpulan
Program ini menggabungkan HTML untuk struktur konten dan CSS untuk merancang tampilan. Elemen-elemen seperti teks, gambar, dan tombol diberikan gaya agar terlihat menarik dan responsif. Penggunaan flexbox dalam CSS memungkinkan penataan elemen-elemen secara fleksibel dalam layout halaman. Dengan demikian, program ini menciptakan halaman web sederhana dengan desain yang menarik dan responsif.
# Position
## Position Relative
### Penjelasan
- Dalam HTML, kita memiliki sebuah div dengan kelas `.container` yang berisi tiga div dengan kelas `.box`.
- Dalam CSS, kita menerapkan `position: relative` pada `.container` untuk membuatnya menjadi referensi bagi posisi kotak-kotak anaknya yang memiliki `position: absolute`.
- Setiap kotak diberi properti `position: absolute` untuk memungkinkan kita menentukan posisi mereka relatif terhadap posisi normalnya.
- Properti `top` dan `left` diberikan pada masing-masing kotak untuk menentukan jarak vertikal dan horizontal dari posisi normalnya.
### Kode Program
```css
.container {
  position: relative;
  width: 400px;
  height: 200px;
  border: 2px solid #333;
}

.box {
  position: relative;
  width: 100px;
  height: 100px;
  background-color: #333;
  color: #fff;
  text-align: center;
  line-height: 100px;
}
```
### Hasil 
![image](asetcss/prl.png)
### Kesimpulan
- Ketika sebuah elemen diberi `position: relative`, itu akan tetap berada dalam aliran dokumen normal, tetapi kita dapat menggunakan properti `top`, `right`, `bottom`, atau `left` untuk menyesuaikan posisinya relatif terhadap posisi normalnya.
- Ini berguna ketika kita ingin menyesuaikan posisi sebuah elemen tetapi tetap mempertahankan ruangnya dalam aliran dokumen normal.
- Elemen-elemen dengan `position: relative` akan mempengaruhi posisi elemen lain dalam dokumen.
## Position Absolute
### Penjelasan
- Dalam HTML, kita memiliki sebuah div dengan kelas `.container` yang berisi tiga div dengan kelas `.box`.
- Dalam CSS, kita menerapkan `position: relative` pada `.container` untuk membuatnya menjadi referensi bagi posisi kotak-kotak yang memiliki `position: absolute`.
- Setiap `.box` diberi properti `position: absolute` untuk memungkinkan kita menentukan posisi mereka relatif terhadap `.container`.
- Properti `top` dan `left` diberikan pada masing-masing `.box` untuk menentukan jarak vertikal dan horizontal dari posisi `.container`.
### Kode Program
```css
.container {
  position: absolute;
  width: 400px;
  height: 200px;
  border: 2px solid #333;
}

.box {
  position: absolute; /* Menggunakan posisi absolut */
  width: 100px;
  height: 100px;
  background-color: #333;
  color: #fff;
  text-align: center;
  line-height: 100px;
}
```
### Hasil 
![image](asetcss/pal.png)
### Kesimpulan
- Ketika sebuah elemen diberi `position: absolute`, itu akan dihapus dari aliran dokumen normal dan diposisikan relatif terhadap kontainer terdekat yang memiliki `position: relative`.
- Ini berguna ketika kita ingin menempatkan elemen secara spesifik di dalam kontainer atau dalam hubungan terhadap elemen lain tanpa memengaruhi layout aliran dokumen.
- Elemen-elemen dengan `position: absolute` tidak mempengaruhi posisi elemen lain dalam dokumen, kecuali elemen yang memiliki `position: relative` dan menjadi kontainernya.
## Position Fixed
### Kode Program
```css
.fixed-box {
  position: fixed; /* Menggunakan posisi fixed */
  top: 80px; 
  left: 50px; 
  width: 200px;
  height: 100px;
  background-color: #333;
  color: #fff;
  padding: 10px;
}
```
### Hasil 
![image](asetcss/px.png)
### Kesimpulan
position: fixed, elemen akan tetap berada pada posisinya yang ditentukan jika discrool.properti top dan left digunakan untuk menentukan jarak elemen dari tepi atas dan kiri. 
## Position Sticky
### Penjelasan
- Kami memiliki sebuah div untuk konten (`content`) di HTML.
- Di CSS, kami memberikan padding pada `.content` untuk memberikan ruang di sekitar konten.
- Kami menambahkan sebuah div dengan kelas `.sticky-box`, yang akan dijadikan elemen sticky. Properti `position: sticky` diterapkan untuk membuatnya tetap menempel di bagian atas layar saat pengguna menggulir.
### Kode Program
```css
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.content {
    padding: 20px;
}

.sticky-box {
    background-color: #333;
    color: #fff;
    text-align: center;
    position: sticky;
    top: 0;
    width: 100%;
    padding: 20px;
}
```
### Hasil
![image](asetcss/pstk.png)
### Kesimpulan
`position: sticky`, elemen akan seperti posisi relatif sampai jarak scroll mencapai nilai tertentu. elemen akan tetap berada pada posisi yang telah ditentukan saat jarak scroll mencapai nilai tertentu, sambil tetap mengikuti pergeseran scroll di bawahnya.
# Positon(Tantangan)
## Kode Program
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tantangan Position</title>
</head>
<body>
    <div class="container">
        <div class="item1">
            <img src="./naon.jpg" alt="" >
        </div>
        <div class="item2">
            <p class="text1">Thursday,July 16, 2015</p>
            <h4 class="text2">The standard chunk of Lorem Ipsum</h4>
            <p class="text3">Sed posuere consectectur est at lobortis.Anean eu leo quam.</p>
        </div>
        <div class="item3">
            <p class="text4">Read more</p>
            <img src="./arrow.jpeg" alt="">
        </div>
          <div class="like">
              <button>
              <img src="./like.jpeg" alt="">
            </button>
        </div>
    </div>
</body>
</html>
```
## Penjelasan HTML
- `<!DOCTYPE html>`: Mendefinisikan tipe dokumen HTML.
- `<html lang="en">`: Menandakan awal dari dokumen HTML dengan bahasa Inggris.
- `<head>`: Bagian kepala dokumen HTML yang berisi metadata dan referensi ke stylesheet.
- `<meta charset="UTF-8">`: Menentukan pengkodean karakter dokumen sebagai UTF-8.
- `<meta http-equiv="X-UA-Compatible" content="IE=edge">`: Menentukan versi IE yang kompatibel.
- `<meta name="viewport" content="width=device-width, initial-scale=1.0">`: Menyesuaikan tampilan halaman dengan lebar perangkat.
- `<title>Tantangan Position</title>`: Memberikan judul halaman.
- `<style>`: Mulai dari bagian CSS yang didefinisikan dalam dokumen HTML.
- `<body>`: Bagian utama dari dokumen HTML yang berisi konten yang akan ditampilkan di browser.
- `<div class="container">`: Sebuah div yang bertindak sebagai wadah untuk semua konten. Ini memiliki beberapa div anak yang akan di-styling.
- `<div class="item1">`, `<div class="item2">`, `<div class="item3">`: Div-div yang bertindak sebagai item atau bagian-bagian dari konten.
- `<img>`: Elemen gambar untuk menampilkan gambar.
- `<p>`, `<h4>`: Elemen paragraf dan heading untuk menampilkan teks.
- `<button>`: Tombol untuk berbagai fungsi, seperti menyukai konten.
- `<div class="like">`: Sebuah div yang berisi tombol "suka" atau "like".

```css
        body{
            background-color: aqua;
        }

        .container {
            display: flex;
            flex-direction: column;
            background-color: white;
            height: 458px;
            width: 300px;
            border-radius: 10px;
            margin-top: 150px;
            margin-left: 720px;
            position: relative;
        }

        .item1{
            background-color: red;
            height: 250px;
            width: 300px;
            border-radius: 10px 10px 0px 0px;
        }

        img {
            width:100%;
            height:100%;
            border-radius: 5px 5px 0px 0px;
        }

        .item2{
            background-color: whitesmoke;
            height: 175px;
            width: 300px;
            justify-content: center;
            align-items: center;
        }

        .text1 {
            font-size: small;
            font-family: Arial, Helvetica, sans-serif;
            margin-left: 20px;
        }

        .text2 {
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
            margin-left: 20px;
        }

        .text3 {
            margin-left: 20px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: medium;
            margin-bottom: 30px;
        }  

        .item3 {
            display: flex;
            flex-direction: row;
            padding: 2px;
            background-color: gainsboro;
            border-radius: 0px 0px 5px 5px;
            width: 296px;
            justify-content: space-between;
            font-weight: bold;
        }

        .text4 {
            margin-left: 20px;
            font-family: Arial, Helvetica, sans-serif;
        }

        button {
            width: 62px;
            height: 55px;
            background-color: transparent;
            border: none;
            border-radius: 100px 100px 100px 100px;
            position: fixed;
            background-repeat: no-repeat;
            top: 350px;
            right: 520px;

        }

        .like img {
            border-radius: 100% ;
            margin-right: 110px;
            margin-left: 135px;
            position: absolute;
        }

        .item3 img {
            height: 30px;
            width: 30px;
            border-radius: 100% 100% ;
            align-items: center;
            justify-items: center;
            margin-right: 25px;
            margin-top: 10px;
        }
```
## Penjelasan CSS
- `body`: Memberi warna latar belakang aqua pada halaman.
- `.container`: Membuat tata letak kontainer menggunakan flexbox, memberi warna latar belakang putih, dan menentukan dimensi dan posisi.
- `.item1`, `.item2`, `.item3`: Masing-masing memberikan warna latar belakang dan menentukan dimensi dan posisi elemen.
- `img`: Mengatur dimensi gambar dan memberikan efek sudut melengkung pada beberapa gambar.
- `.text1`, `.text2`, `.text3`, `.text4`: Mengatur gaya teks untuk paragraf dan judul.
- `button`: Mengatur gaya untuk tombol, termasuk dimensi, warna latar belakang transparan, dan posisi.
- `.like img`: Mengatur gaya untuk gambar di dalam tombol "suka".
- `.item3 img`: Mengatur gaya untuk gambar di dalam item 3.
## Hasil
![image](asetcss/pos1.png)
## Kesimpulan
Program ini menggunakan HTML untuk membuat struktur konten dan CSS untuk merancang tampilannya. Elemen-elemen seperti gambar, teks, dan tombol diberikan gaya untuk menciptakan tampilan yang menarik dan responsif. Penggunaan posisi relatif, absolut, dan sticky memungkinkan penempatan yang tepat dari elemen-elemen tersebut di halaman.