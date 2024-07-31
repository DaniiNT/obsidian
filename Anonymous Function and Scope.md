---
sticker: emoji//1f97a
---
# Apa itu Anonymous Function
- Fungsi anonim, juga dikenal sebagai lambda atau closure, adalah fungsi yang tidak memiliki nama. Fungsi anonim digunakan untuk menulis fungsi cepat dan seringkali digunakan sebagai argumen untuk fungsi lain atau ditetapkan ke variabel. Dalam bahasa Dart, fungsi anonim memungkinkan Anda untuk membuat fungsi tanpa harus memberinya nama, yang sangat berguna dalam situasi di mana fungsi hanya digunakan sekali atau dalam konteks tertentu.
## Penggunaan Dasar Anonymous Function dalam Bahasa 
1. Menetapkan Fungsi Anonim ke Variabel
2. Menggunakan Fungsi Anonim sebagai Argumen
3. Menggunakan Fungsi Anonim dalam Pengolahan Koleksi
4. Menangkap Variabel Leksikal dengan Closures
___
- **Menetapkan ke Variabel**: Fungsi anonim dapat ditetapkan ke variabel dan digunakan seperti fungsi biasa.
- **Argumen untuk Fungsi Lain**: Fungsi anonim sering digunakan sebagai argumen untuk fungsi lain, terutama dalam callback dan metode pengolahan koleksi.
- **Pengolahan Koleksi**: Fungsi anonim digunakan dalam metode seperti `map`, `forEach`, `where`, dan lain-lain untuk mengolah elemen-elemen dalam koleksi.
- **Closures**: Fungsi anonim dapat menangkap variabel dari lingkup sekitarnya dan mempertahankan nilainya di antara pemanggilan fungsi.
## Contoh Program Anonymous Function
#### Contoh 1: Fungsi Anonim sebagai Callback
- **Callback** adalah fungsi yang dilewatkan sebagai argumen ke fungsi lain, yang akan dipanggil kembali (dieksekusi) di suatu titik setelah fungsi lain selesai menjalankan tugasnya. Callback digunakan untuk menangani tugas asynchronous atau untuk memberikan fleksibilitas pada fungsi lain untuk mengeksekusi kode khusus.
Fungsi anonim sering digunakan sebagai callback, terutama dalam metode seperti `forEach`, `map`, dan `where`.
```dart
void main() {
  var list = [1, 2, 3, 4, 5];

  // Menggunakan fungsi anonim dalam metode forEach
  list.forEach((num) {
    print(num * 2); // Output: 2, 4, 6, 8, 10
  });
}

```
#### Contoh 2: Fungsi Anonim dalam Metode Map
- Metode `map` adalah fungsi yang diterapkan pada koleksi (seperti list atau array) untuk memproses setiap elemen dalam koleksi tersebut dan mengembalikan koleksi baru dengan hasil dari fungsi yang diterapkan. Fungsi yang diterapkan (callback) mengambil setiap elemen sebagai argumen dan mengembalikan nilai baru.
Menggunakan fungsi anonim untuk memetakan (mengubah) setiap elemen dalam sebuah koleksi.
```dart
void main() {
  var list = [1, 2, 3, 4, 5];

  // Menggunakan fungsi anonim dalam metode map
  var squared = list.map((num) => num * num).toList();

  print(squared); // Output: [1, 4, 9, 16, 25]
}

```
### Contoh 3: Menangkap Variabel dengan Closures
- **Closure** adalah fungsi anonim yang menangkap variabel dari scope sekitarnya dan mempertahankan nilai-nilai variabel tersebut di antara pemanggilan fungsi. Closures dapat mengakses dan memodifikasi variabel yang dideklarasikan dalam lingkup (scope) tempat mereka dibuat.
```dart
void main() {
  var counter = 0;

  var increment = () {
    counter++;
    return counter;
  };

  print(increment()); // Output: 1
  print(increment()); // Output: 2
  print(increment()); // Output: 3
}

```
### Contoh 4: Fungsi Anonim dalam Metode where (Filter)
- Metode `where` adalah fungsi yang digunakan untuk menyaring elemen dalam koleksi berdasarkan kondisi tertentu. Mirip dengan `filter` dalam bahasa lain, `where` mengembalikan koleksi baru yang hanya berisi elemen yang memenuhi kondisi yang diberikan oleh callback.
```dart
void main() {
  var list = [1, 2, 3, 4, 5];

  // Menggunakan fungsi anonim dalam metode where (filter)
  var evenNumbers = list.where((num) => num % 2 == 0);

  print(evenNumbers); // Output: (2, 4)
}

```
## Kesimpulan Tentang Fungsi Anonim dalam Bahasa Dart
### Pengertian
- **Fungsi Anonim**: Fungsi yang tidak memiliki nama. Biasanya ditulis cepat untuk tugas-tugas sederhana.
### Dasar-dasar
- Ditulis langsung tanpa nama.
- Bisa ditetapkan ke variabel atau digunakan sebagai argumen fungsi lain.
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
- Scope adalah konteks di mana variabel dan fungsi dapat diakses. Dalam Dart, scope adalah leksikal, yang berarti scope variabel ditentukan oleh posisi mereka dalam kode sumber. Scope membantu mengatur visibilitas dan waktu hidup variabel dalam program.
## Penggunaan dasar Scope
- terdapat 3 dasar penggunaan scope dalam bahasa dart
### Scope Global
Variabel yang dideklarasikan di luar semua fungsi atau blok adalah variabel global. Variabel global dapat diakses dari mana saja dalam program.
```dart
var globalVar = 'Saya global';

void main() {
  print(globalVar); // Mengakses variabel global
}

void anotherFunction() {
  print(globalVar); // Mengakses variabel global
}

```
### Scope Lokal
Variabel yang dideklarasikan di dalam fungsi atau blok adalah variabel lokal. Variabel lokal hanya dapat diakses di dalam fungsi atau blok tempat mereka dideklarasikan.
```dart
void main() {
  var localVar = 'Saya lokal';
  print(localVar); // Mengakses variabel lokal

  void nestedFunction() {
    print(localVar); // Mengakses variabel lokal dari fungsi luar
  }

  nestedFunction();
  // print(innerLocalVar); // Akan menyebabkan error karena innerLocalVar tidak dapat diakses di sini
}

```
### Closure
Closure adalah fungsi anonim yang menangkap variabel dari scope sekitarnya dan mempertahankan nilai-nilai variabel tersebut di antara pemanggilan fungsi.
```dart
void main() {
  var counter = 0;

  var increment = () {
    counter++;
    return counter;
  };

  print(increment()); // Output: 1
  print(increment()); // Output: 2
  print(counter); // Output: 2
}

```
### Contoh Program
Berikut adalah contoh program lengkap yang menggunakan berbagai jenis scope:
```dart
// Variabel global
var globalCounter = 0;

void main() {
  // Variabel lokal di dalam fungsi main
  var localCounter = 0;

  // Closure yang menangkap variabel globalCounter dan localCounter
  var incrementGlobal = () {
    globalCounter++;
    return globalCounter;
  };

  var incrementLocal = () {
    localCounter++;
    return localCounter;
  };

  print(incrementGlobal()); // Output: 1
  print(incrementGlobal()); // Output: 2
  print(globalCounter); // Output: 2

  print(incrementLocal()); // Output: 1
  print(incrementLocal()); // Output: 2
  print(localCounter); // Output: 2

  void nestedFunction() {
    // Variabel lokal di dalam nestedFunction
    var nestedCounter = 0;

    nestedCounter++;
    print(nestedCounter); // Output: 1
  }

  nestedFunction();
  // print(nestedCounter); // Akan menyebabkan error karena nestedCounter tidak dapat diakses di sini
}

void anotherFunction() {
  // Mengakses variabel global
  print(globalCounter); // Output: 2
}

```
- Hasilnya akan seperti sebagai berikut:
![image](asetdart/dart1.png)
Dalam contoh di atas:
- `globalCounter` adalah variabel global yang dapat diakses dari mana saja.
- `localCounter` adalah variabel lokal dalam fungsi `main`.
- `nestedCounter` adalah variabel lokal dalam `nestedFunction`.
- Fungsi anonim `incrementGlobal` dan `incrementLocal` adalah closure yang menangkap dan memodifikasi variabel dari scope sekitarnya.
## Kesimpulan
- **Scope Global**: Variabel yang dapat diakses dari mana saja dalam program. Membantu dalam mengatur variabel yang diperlukan di seluruh program.
- **Scope Lokal**: Variabel yang hanya dapat diakses di dalam fungsi atau blok tempat mereka dideklarasikan. Membantu dalam menjaga keamanan dan menghindari konflik nama variabel.
- **Closure**: Fungsi anonim yang menangkap dan mempertahankan variabel dari scope sekitarnya. Berguna untuk menjaga state variabel dalam fungsi.
