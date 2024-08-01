---
sticker: emoji//1f97a
---
# Apa itu Anonymous Function
- Fungsi anonim, juga dikenal sebagai lambda atau closure, adalah fungsi yang tidak memiliki nama. Fungsi anonim digunakan untuk menulis fungsi cepat dan seringkali digunakan sebagai argumen untuk fungsi lain atau ditetapkan ke variabel. Dalam bahasa Dart, fungsi anonim memungkinkan Anda untuk membuat fungsi tanpa harus memberinya nama, yang sangat berguna dalam situasi di mana fungsi hanya digunakan sekali atau dalam konteks tertentu.
## Penggunaan Dasar Anonymous Function
1. Menetapkan Fungsi Anonim ke Variabel
2. Menggunakan Fungsi Anonim sebagai Argumen
3. Menggunakan Fungsi Anonim dalam Pengolahan Koleksi
4. Menangkap Variabel Leksikal dengan Closures
___
- **Menetapkan ke Variabel**: Fungsi anonim dapat ditetapkan ke variabel dan digunakan seperti fungsi biasa.
- **Argumen untuk Fungsi Lain**: Fungsi anonim sering digunakan sebagai argumen untuk fungsi lain, terutama dalam callback dan metode pengolahan koleksi.
- **Pengolahan Koleksi**: Fungsi anonim digunakan dalam metode seperti `map`, `forEach`, `where`, dan lain-lain untuk mengolah elemen-elemen dalam koleksi.
- **Closures**: Fungsi anonim dapat menangkap variabel dari lingkup sekitarnya dan mempertahankan nilainya di antara pemanggilan fungsi.
## Contoh Anonymous Function
### Fungsi Anonim sebagai Callback
- **Callback** adalah fungsi yang dilewatkan sebagai argumen ke fungsi lain, yang akan dipanggil kembali (dieksekusi) di suatu titik setelah fungsi lain selesai menjalankan tugasnya. Callback digunakan untuk menangani tugas asynchronous atau untuk memberikan fleksibilitas pada fungsi lain untuk mengeksekusi kode khusus.
```dart
void main() {
  // Fungsi yang menerima callback sebagai parameter
  void performOperation(int a, int b, Function callback) {
    var result = callback(a, b);
    print('Hasil operasi: $result');
  }

  // Menggunakan fungsi anonim sebagai callback
  performOperation(5, 3, (int x, int y) {
    return x + y; // Fungsi anonim yang menjumlahkan dua angka
  });

  // Fungsi anonim lain sebagai callback
  performOperation(5, 3, (int x, int y) {
    return x * y; // Fungsi anonim yang mengalikan dua angka
  });
}
```
### Fungsi Anonim dalam Metode Map
- Metode `map` adalah fungsi yang diterapkan pada koleksi (seperti list atau array) untuk memproses setiap elemen dalam koleksi tersebut dan mengembalikan koleksi baru dengan hasil dari fungsi yang diterapkan. Fungsi yang diterapkan (callback) mengambil setiap elemen sebagai argumen dan mengembalikan nilai baru.
```dart
void main() {
  // Daftar angka
  var numbers = [1, 2, 3, 4, 5];

  // Menggunakan metode map untuk menggandakan setiap elemen
  var doubled = numbers.map((num) => num * 2);

  // Mengubah hasil iterasi menjadi daftar
  print(doubled.toList()); // Output: [2, 4, 6, 8, 10]
}

```
### Menangkap Variabel dengan Closures
- **Closure** adalah fungsi anonim yang menangkap variabel dari scope sekitarnya dan mempertahankan nilai-nilai variabel tersebut di antara pemanggilan fungsi. Closures dapat mengakses dan memodifikasi variabel yang dideklarasikan dalam lingkup (scope) tempat mereka dibuat.
```dart
void main() {
  // Fungsi yang mengembalikan closure
  Function makeAdder(int addBy) {
    return (int i) => addBy + i;
  }

  // Membuat closure yang menambah 2
  var add2 = makeAdder(2);

  // Menggunakan closure
  print(add2(3)); // Output: 5
  print(add2(5)); // Output: 7
}

```
### Fungsi Anonim dalam Metode where (Filter)
- Metode `where` adalah fungsi yang digunakan untuk menyaring elemen dalam koleksi berdasarkan kondisi tertentu. Mirip dengan `filter` dalam bahasa lain, `where` mengembalikan koleksi baru yang hanya berisi elemen yang memenuhi kondisi yang diberikan oleh callback.
```dart
void main() {
  // Daftar angka
  var numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

  // Menggunakan metode where untuk memfilter angka genap
  var evenNumbers = numbers.where((num) => num.isEven);

  // Mengubah hasil iterasi menjadi daftar
  print(evenNumbers.toList()); // Output: [2, 4, 6, 8, 10]
}

```
## Kesimpulan Tentang Anonymous Function
### Pengertian
- **Fungsi Anonim**: Fungsi yang tidak memiliki nama. Biasanya ditulis cepat untuk tugas-tugas sederhana.
### Kegunaan Utama
- **Callback**: Fungsi yang dilewatkan sebagai argumen dan dipanggil kembali setelah tugas selesai.
- **Metode `map`**: Memproses setiap elemen dalam koleksi dan mengembalikan koleksi baru dengan hasil pemrosesan.
- **Metode `filter`/`where`**: Menyaring elemen dalam koleksi berdasarkan kondisi tertentu, mengembalikan koleksi baru dengan elemen yang memenuhi kondisi.
- **Closures**: Fungsi anonim yang menangkap dan mempertahankan variabel dari scope sekitarnya.
- **Metode `where`**: Menyaring elemen dalam koleksi berdasarkan kondisi tertentu, sama seperti `filter`.
### Manfaat
- **Sederhana dan Ringkas**: Membuat kode lebih pendek dan mudah dibaca.
- **Efisiensi**: Tidak perlu mendefinisikan fungsi terpisah untuk tugas kecil yang digunakan sekali.
- **Fleksibilitas**: Mudah digunakan di mana pun dibutuhkan perilaku fungsi sementara.
___
# Apa itu Scope
- Scope adalah konteks di mana variabel dan fungsi dapat diakses. Dalam Dart, scope adalah leksikal, yang berarti scope variabel hanya bisa diakses di dalam blok kode di mana variabel tersebut dideklarasikan. Scope membantu mengatur visibilitas dan waktu hidup variabel dalam program.
## Penggunaan dasar Scope
- terdapat 2 dasar penggunaan scope dalam bahasa dart
### Scope Global
**Scope global** mengacu pada variabel atau fungsi yang dideklarasikan di luar semua fungsi atau blok kode lainnya. Variabel atau fungsi ini dapat diakses dari mana saja dalam program, baik di dalam maupun di luar fungsi atau blok kode lain.
**Ciri-ciri Scope Global:**
1. **Deklarasi di luar fungsi/blok**: Variabel global dideklarasikan di luar semua fungsi dan blok kode.
2. **Akses dari mana saja**: Dapat diakses dari fungsi atau blok kode mana saja dalam program.
3. **Waktu hidup sepanjang program**: Variabel global tetap ada dan dapat diakses sepanjang program berjalan.
```dart
// Variabel global
var globalVar = 'Saya variabel global';

void main() {
  print(globalVar); // Bisa diakses di sini
  anotherFunction(); // Memanggil fungsi lain yang juga mengakses variabel global
}
void anotherFunction() {
  print(globalVar); // Bisa diakses di sini juga
}

```
### Scope Lokal
**Scope lokal** mengacu pada variabel atau fungsi yang dideklarasikan di dalam fungsi atau blok kode. Variabel atau fungsi ini hanya dapat diakses di dalam fungsi atau blok kode tempat mereka dideklarasikan.
**Ciri-ciri Scope Lokal:**
1. **Deklarasi di dalam fungsi/blok**: Variabel lokal dideklarasikan di dalam fungsi atau blok kode.
2. **Akses terbatas**: Hanya dapat diakses di dalam fungsi atau blok kode tempat mereka dideklarasikan.
3. **Waktu hidup terbatas**: Variabel lokal hanya ada selama eksekusi fungsi atau blok kode tempat mereka dideklarasikan.
```dart
void main() {
  // Variabel lokal dalam fungsi main
  var localVar = 'Saya variabel lokal';
  print(localVar); // Bisa diakses di sini
  void nestedFunction() {
    // Variabel lokal dalam nestedFunction
    var innerLocalVar = 'Saya variabel lokal dalam nestedFunction';
    print(innerLocalVar); // Bisa diakses di sini
  }
  nestedFunction();
  // print(innerLocalVar); // Tidak bisa diakses di sini, akan menyebabkan error
}
// print(localVar); // Tidak bisa diakses di sini, akan menyebabkan error
```
## Perbedaan Utama Scope Global & Lokal
1. **Lokasi Deklarasi**:
    - **Global**: Di luar semua fungsi.
    - **Lokal**: Di dalam fungsi atau blok kode.
2. **Aksesibilitas**:
    - **Global**: Dapat diakses dari mana saja dalam program.
    - **Lokal**: Hanya dapat diakses di dalam fungsi atau blok kode tempat variabel tersebut dideklarasikan.
3. **Waktu Hidup**:
    - **Global**: Tetap ada sepanjang program berjalan.
    - **Lokal**: Hanya ada selama fungsi atau blok kode tempat variabel tersebut dideklarasikan sedang berjalan.
