# Materi Eksplorasi Animation
- Anggota Kelompok
	- [ ] Muh Farhan Maulana
	- [ ] Nur Rahmat Ramadan
- Kelaszz
	- XI Rekaysa Perangkat Lunak (1)
## Apa Itu Animation
- **Animasi**/**Animation** CSS biasanya didefinisikan dengan menggunakan aturan `@keyframes`, yang memungkinkan Anda untuk menentukan perubahan-nilai properti pada titik-titik waktu tertentu selama animasi berlangsung. Selain itu, Anda juga dapat menggunakan properti-properti CSS seperti `animation-name`, `animation-duration`, `animation-timing-function`, `animation-delay`, `animation-iteration-count`, `animation-direction`, dan `animation-fill-mode` untuk mengontrol perilaku animasi
## Property & Value
**1. Animation Name** & **Keyframe**
- Property animation name dalam CSS digunakan untuk menamai sebuah animasi yang didefinisikan menggunakan aturan `@keyframes`. Ini memungkinkan Anda untuk merujuk kembali ke animasi tersebut dalam kode CSS atau JavaScript untuk memulai atau menghentikan animasi, atau untuk mengaitkan animasi tersebut dengan elemen tertentu dalam dokumen HTML
```css
/* Mendefinisikan animasi */
@keyframes nama-animasi {
  /* Aturan-aturan animasi */
}
/* Menggunakan animasi dengan nama tersebut */
.element {
  animation-name: nama-animasi;
}
```
-  **Keyframes** dalam CSS digunakan untuk mendefinisikan perubahan-nilai properti CSS pada titik-titik waktu tertentu selama animasi. Ini dilakukan dengan menggunakan aturan `@keyframes`, diikuti oleh nama animasi dan blok aturan yang berisi perubahan-nilai pada titik-titik waktu tertentu, seperti `0%`, `50%`, dan `100%`.
```css
@keyframes nama-animasi {
  0% {
    /* Nilai-nilai properti pada 0% waktu animasi */
  }
  50% {
    /* Nilai-nilai properti pada 50% waktu animasi */
  }
  100% {
    /* Nilai-nilai properti pada 100% waktu animasi */
  }
}
```

**2. Animation Duration** 
- `animation-duration` adalah properti dalam CSS yang digunakan untuk menentukan durasi dari suatu animasi. Properti ini menentukan waktu yang dibutuhkan untuk animasi dari awal hingga akhir. Nilainya bisa dalam satuan detik (s) atau milidetik (ms)
```css
.element {
  animation-duration: 5s; /* Animasi berlangsung selama 2 detik */
}
```
- **Contoh Hasil**
![image|230x160](aseteks/duration.jpg) ![image|238x158](aseteks/duration2.jpg)
> [! warning] Keterangan Hasil
Atribut `animation-duration` akan membuat box di atas bergerak dengan valuenya yaitu 5s(detik) dengan adanya `@keyframe` box akan bergeser dari kiri ke kanan dengan waktu yang telah di berikan.

**3. Animation Timing Function**
- Fungsi-timing animasi (animation timing function) dalam CSS digunakan untuk mengontrol bagaimana perubahan nilai animasi terjadi selama durasi animasi. Fungsi ini memungkinkan Anda untuk menentukan percepatan (acceleration) atau perlambatan (deceleration) dari animasi, atau bahkan membuat animasi terjadi dengan kecepatan konstan.
- Ada beberapa jenis fungsi-timing yang umum digunakan:
	- `ease`: Ini adalah fungsi-timing standar yang memberikan percepatan dan perlambatan perlahan ke dan dari animasi. Ini adalah default jika tidak ada fungsi-timing yang ditentukan.
	- `linear`: Memberikan kecepatan konstan selama animasi. Perubahan nilai berlangsung dengan laju konstan.
	- `ease-in`: Memberikan perlambatan pada awal animasi, tetapi percepatan konstan setelahnya.
	- `ease-out`: Memberikan percepatan pada awal animasi, tetapi perlambatan konstan saat berakhir.
	- `ease-in-out`: Memberikan perlambatan pada awal dan percepatan pada pertengahan animasi, serta perlambatan kembali saat berakhir.
	- `cubic-bezier()`: Fungsi-timing kustom yang memungkinkan Anda untuk mengontrol percepatan dan perlambatan dengan lebih detail menggunakan koordinat kubik bezier. Ini memungkinkan Anda membuat kurva-timing animasi yang sangat kustom.
```css
.element {
  animation-timing-function: ease-in-out; /* Menggunakan fungsi-timing ease-in-out */
}
}
```
- **Contoh Hasil**
![image|250](aseteks/timingf.jpg) ![image|250x180](aseteks/timingf2.jpg)
> [! warning] Keterangan Hasil
> Box di atas bergerak ke arah kiri dengan perintah `@keyframe` di `styles.css` dengan value `ease-in-out
> akan bergerak di awal dengan secara perlahan (ease-in) dan mecapai kecepetan penuh di tengah, dan
> kemudian berkurang kecepetannya secara perlahan (ease-out), ini memberi kesan pergerakan yang halus

**4. Animation Delay**
- `animation-delay` dalam CSS adalah properti yang memungkinkan Anda menunda awal dari suatu animasi. Dengan menentukan nilai delay, Anda dapat mengatur waktu tunggu sebelum animasi dimulai, baik dalam detik (s) atau milidetik (ms). Ini berguna untuk mengatur kapan animasi harus dimulai setelah suatu peristiwa tertentu, seperti saat elemen muncul di layar atau setelah interaksi pengguna tertentu terjadi.
```css
.element {
   animation-delay: 3s; /* Animasi akan dimulai setelah 0.5 detik */
}
```
- **Contoh Hasil**
![image|240](aseteks/delay.jpg) ![image|230](aseteks/delay2.jpg)
> [! warning] Keterangan Hasil
> Box di atas akan muncul dari yang awalnya tidak terlihat menjadi terlihat dengan opocity di dalam
> `@keyframe` box tersebut akan tetap diam selama 3s(detik) sesuai valuenya sebelum animasi fadein-nya
> dimulai yang dari awalnya warna box ini buram dan kemudian menjadi pekat atau cerah.

**5. Animation Iteration Count**
- `animation-iteration-count` dalam CSS digunakan untuk menentukan berapa kali sebuah animasi harus diulang. Nilai dari properti ini dapat berupa bilangan bulat (integer) atau kata kunci spesifik. Berikut adalah beberapa nilai yang dapat digunakan:
	1. `infinite`: Animasi akan terus diulang tanpa henti sampai dihentikan secara manual.
	2. Bilangan bulat positif: Menunjukkan jumlah kali animasi harus diulang. Misalnya, nilai 2 akan membuat animasi diulang dua kali.
```css
.element {
  animation-iteration-count: 3; /* Animasi akan diulang sebanyak 3 kali */
  /* atau bisa juga */
}
```
- **Contoh Hasil**
![image|180](aseteks/iterc.jpg) ![image|180](aseteks/iterc2.jpg) ![image|180x120](aseteks/iterc3.jpg)
> [! warning] Keterangan Hasil
>  Box di atas akan mengarah kekiri secara berulang sebanyak 3 kali dikarenakan valuenya adalah 3, dan
>  setiap animasi bergerak selama 2 detik setelah box terulang 3 kali maka animasi akan selesai dan box
>  akan berhenti bergerak.

**6. Animation Direction**
- `animation-direction` dalam CSS digunakan untuk menentukan arah perubahan nilai properti selama animasi. Properti ini memiliki beberapa nilai yang dapat digunakan:
	1. `normal`: Ini adalah nilai default. Animasi akan berjalan dari awal ke akhir sesuai dengan keyframes yang didefinisikan.
	2. `reverse`: Animasi akan berjalan dari akhir ke awal, membalik urutan keyframes yang didefinisikan.
	3. `alternate`: Animasi akan bergantian antara berjalan dari awal ke akhir dan dari akhir ke awal pada setiap iterasi.
	4. `alternate-reverse`: Mirip dengan `alternate`, namun animasi pertama kali berjalan dari akhir ke awal.
```css
.element {
  animation-direction: reverse; /* Animasi akan berjalan dari akhir ke awal */
}
```
- **Contoh Hasil**
![image|230](aseteks/direc.jpg) ![image|220x167](aseteks/direc2.jpg)
> [! warning] Keterangan Hasil
> Property ini akan mengatur arah animasi akan kemana disini terdapat value `reverse` jadi box ini akan
> bergerak dari akhir ke awal atau dari kanan ke kiri layar.

**7. Animation Fill Mode**
- `animation-fill-mode` dalam CSS digunakan untuk menentukan bagaimana nilai properti animasi diterapkan sebelum dan setelah animasi berjalan. Properti ini memengaruhi perilaku animasi sebelum dan setelah animasi sesuai dengan siklus animasi dan apakah animasi dimulai dan berhenti.
- Properti `animation-fill-mode` memiliki beberapa nilai yang dapat digunakan:
	1. `none`: Ini adalah nilai default. Tidak ada nilai properti animasi yang diterapkan sebelum atau setelah animasi berjalan.
	2. `forwards`: Properti animasi diterapkan pada elemen target setelah animasi selesai. Artinya, nilai terakhir dari animasi tetap berlaku setelah animasi selesai.
	3. `backwards`: Properti animasi diterapkan pada elemen target sebelum animasi dimulai. Ini berarti nilai pertama dari animasi diterapkan bahkan sebelum animasi dimulai.
	4. `both`: Kombinasi dari `forwards` dan `backwards`, yang berarti properti animasi diterapkan sebelum animasi dimulai dan tetap berlaku setelah animasi selesai.
```css
.element {
  animation-fill-mode: forwards; /* Nilai terakhir animasi akan diterapkan setelah animasi selesai */
}
```
- **Contoh Hasil**
![image|200x150](aseteks/fillMod.jpg) ![image|200x150](aseteks/fillMod2.jpg)
> [! warning] Keterangan Hasil 
> Dis sini box akan bergerak dari arah kiri ke kanan dengan adanya value `forwards` dengan kata lain box
> dari posisi A akan bergerak ke posisi B ketika animasi selesai box akan tetap berada di posisi B.

**8. Animation Play State**
- `animation-play-state` dalam CSS digunakan untuk mengontrol apakah suatu animasi sedang berjalan atau dijeda. Properti ini memungkinkan Anda untuk mengontrol secara dinamis status animasi menggunakan CSS
- Properti `animation-play-state` memiliki dua nilai yang dapat digunakan:
	1. `running`: Ini adalah nilai default. Animasi sedang berjalan.
	2. `paused`: Animasi dijeda pada titik waktu saat ini. Animasi akan berhenti pada posisi di mana ia dijeda.
```css
.element {
  animation-play-state: running; /* Animasi bergerak */
}
```
- **Contoh Hasil**
![image|200x150](aseteks/pls.jpg) ![image|200x150](aseteks/pls2.jpg)
> [! warning] Keterangan Hasil
> Animasi menggunakan aturan `@keyframe` untuk mendefinisikan posisi awal dan akhir box akan bergerak cepat karena valuenya adalah `running` dimana box akan bergerakn tanpa hambatan dan akan terus bergerak dengan tambahan property `animaton-iteration-count: infinite;`

## Implementasi
```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Animations</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <img src="./IMG20220906111847.jpg" alt="Icon" class="icon">
    <img src="./IMG20220906111847.jpg" alt="Icon" class="icon infinite-hover">
    <img src="./IMG20220906111847.jpg" alt="Icon" class="icon infinite">
</div>
</body>
</html>
```
**Index.html**
- Ini adalah file HTML dasar yang menampilkan gambar sebagai ikon.
- Pada bagian `<head>`, kita memuat file CSS eksternal (`styles.css`) untuk memberikan tata letak dan animasi.
- Di dalam `<body>`, terdapat sebuah `<div>` dengan kelas `container` yang berisi tiga gambar

```css
body{
    background-color: rgb(53, 20, 20);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
} 

.icon {
    width: 100px;
    height: 100px;
    background-color: #ccc;
    display: inline-block;
    margin: 20px;
    font-size: 2em;
    border-radius: 50%;
    transition: transform 0.3s ease;
} 

/* Rotasi saat dihover */
.icon:hover {
    animation: rotate-hover 2s linear forwards;
} 

/* Rotasi tak hingga saat dihover */
.icon.infinite-hover:hover {
    animation: rotate-hover-infinite 2s infinite linear;
} 

/* Rotasi tak hingga tanpa interaksi */
.icon.infinite {
    animation: rotate-infinite 2s infinite linear;
} 

@keyframes rotate-hover {
    100% {
        transform: rotate(360deg);
    }
}

@keyframes rotate-hover-infinite {
    100% {
        transform: rotate(360deg);
    }
} 

@keyframes rotate-infinite {
    100% {
        transform: rotate(360deg);
    }
}
```
**Styles.css**
- Ini adalah file CSS yang menentukan tata letak dan animasi untuk ikon.
- Di bagian `body`, kita mengatur tata letak halaman dengan menggunakan `display: flex` untuk membuat konten berada di tengah layar.
- Kelas `.icon` menetapkan properti untuk gambar, termasuk ukuran, warna latar belakang, dan transisi animasi rotasi.
- Terdapat tiga jenis animasi rotasi yang ditentukan menggunakan keyframes:
    - `rotate-hover`: rotasi saat dihover.
    - `rotate-hover-infinite`: rotasi tak hingga saat dihover.
    - `rotate-infinite`: rotasi tak hingga tanpa interaksi.
Dengan demikian, kombinasi dari file HTML dan CSS ini akan membuat tiga gambar ikon yang masing-masing memiliki animasi rotasi yang berbeda sesuai dengan interaksi pengguna.

**Hasil**
![image](asetcss/hasil.png)
> [! danger] Disclamer!!!
> Hasil di atas berekstensi Mp4(video), tapi disini di tampilkan dengan ekstensi png/jpg(foto), 
> tetapii saya akan Menjelaskannya dengan singkat dan dapat dipahami.

**Penjelasa Hasil Tampilan**
1. Gambar/Image Pertama
	Gambar pertama ketika di arahkan dengan kursor maka gambar tersebut akan berputar dalam 2 detik dan berputar manjadi 360 derajat dan akan berhenti ketika setelah sekali putaran.

2. Gambar/Image Kedua
	Kemudian gambar kedua ini akan berputar 360 derajat dan tidak akan berhenti kecuali kursor tidak diarahkan ke gambar/image  Bombom.

3. Gambar/Image Ketiga
	Terakhir gambar Bombom akan otomatis terputar saat setelah kode program dijalankan dan akan terus menerus berputar tanpa henti alias infinite
