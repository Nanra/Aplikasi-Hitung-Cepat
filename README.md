# Aplikasi Hitung Cepat

Aplikasi ini saya hibahkan untuk digunakan dalam proses hitung cepat Pilkada Kabupaten Padang Lawas 2018. Suara berasal dari jumlah suara sah yang dilaporkan oleh saksi dari setiap TPS. Dalam kasus ini terdapat 3 pasang calon.

![dashboard](https://user-images.githubusercontent.com/9511668/43037757-8e90886e-8d3b-11e8-8dbe-ed9a4f36df04.png)

## Getting Started
Aplikasi ini dapat langsung diakses dengan menggunakan **web browser**.
Namun sebelum menggunakan aplikasi ini silahkan perhatikan langkah-langkah di bawah ini terutama bagi Anda yang masih baru dalam pemrograman di lingkungan ***XAMPP***.

### Install Aplikasi Pendukung
Pastikan program-program di bawah ini sudah terinstall dalam komputer Anda:
``` 
Apache
PHP
MySQL
```
Untuk lebih mudahnya Anda bisa langsung menginstall [XAMPP](https://www.apachefriends.org/download.html) karena didalamnya sudah tersedia lengkap program-program diatas.

### Install Web Browser
```
Google Chrome 
*Mozilla Firefox
*Opera
Safari
```
Disarankan untuk menggunakan **Web Browser** yang diberi tanda * . Dan tekan ***F11*** untuk masuk ke mode fullscreen pada web browser Anda untuk tampilan yang lebih bagus.

### Database
Setelah selesai menginstall [XAMPP](https://www.apachefriends.org/download.html) dan **Web Browser**, selanjutnya buka [PHP Myadmin](http://localhost/phpmyadmin/) pada web browser Anda untuk membuat database baru. Buatlah database baru dengan nama **tondi**. Kemudian import file database [tondi.sql](https://github.com/Nanra/Aplikasi-Hitung-Cepat/tree/master/database/database%20baru) ke dalam database yang barusan Anda buat.

### HTDOCS
Bagi Anda yang sudah terbiasa bekerja dengan lingkungan ***XAMPP*** Anda bisa lewatkan step ini.
Namun bagi Anda yang masih baru silahkan simak dengan baik langkah-langkah berikut ini:
* Pertama Ekstrak file **Aplikasi-Hitung-Cepat-Master.zip**
* Ubah nama folder hasil ekstrak menjadi ***realcount***
* Kemudian pindahkan folder ***realcount*** tersebut secara utuh ke dalam folder berikut ini:

Pengguna Linux:
```
/opt/lampp/htdocs/

```
Pengguna Windows:
```
C:/xampp/htdocs/
```
* Selanjutnya buka **Web Browser** Anda dan ketikkan alamat berikut : http://localhost/realcount/
### Instal Text Editor
Untuk mengedit skrip program atau keperluan ***tweeking*** silahkan install salah satu dari text editor dibawah ini:
* [Atom](https://atom.io/)
* [Brackets](http://brackets.io/)
* [Sublime](https://www.sublimetext.com/)

