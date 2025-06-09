# Praktikum 1-9 Pemrograman Web 2

```bash
Nama : Pranaja widyadhana Wardana
Nim  : 312310194
Kelas: TI.23.A2
Tugas: Pemrograman Web 2
```

# Daftar Praktikum

*   **[Praktikum 1](#praktikum-1)**
*   **[Praktikum 2](#praktikum-2)**
*   **[Praktikum 3](#praktikum-3)**
*   **[Praktikum 4](#praktikum-4)**
*   **[Praktikum 5](#praktikum-5)**
*   **[Praktikum 6](#praktikum-6)**
*   **[Praktikum 7](#praktikum-7)**
*   **[Praktikum 8](#praktikum-8)**
*   **[Praktikum 9](#praktikum-9)**

---

# Praktikum 1

# 1.1 Instalasi Codeigniter 4 

• Unduh Codeigniter dari website `https://codeigniter.com/download`<br>
• Extrak file zip Codeigniter ke direktori `htdocs/lab11_ci.`<br>
• Ubah nama direktory `framework-4.x.xx` menjadi `ci4.`<br> 
• Buka browser dengan alamat `http://localhost/lab11_ci/ci4/public/`<br> 
<img src="/IMAGE/1.1.png" img>

# 1.2 Menjalankan CLI (Command Line Interface) 
arahkan lokasi direktori sesuai dengan direktori kerja project dibuat `(xampp/htdocs/lab11_ci/p3web2/)`<br>
<img src="/IMAGE/1.2.png" img>

# 1.3 Menjalankan perintah
Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter:

```bash
php spark
```
<img src="/IMAGE/1.3..png" img>

# 1.4 Ubah nama file
Ubah nama file 'env' menjadi '.env' kemudian buka file tersebut dan ubah nilai variabel 
'CI_ENVIRINMENT' menjadi 'development'.<br>
<img src="/IMAGE/1.4.png" img>

# 1.5 Contoh error 
<img src="/IMAGE/1.5.png" img>

# 1.6 Uji coba error
Contoh error yang terjadi. Untuk mencoba error tersebut, ubah kode pada file 
'app/Controller/Home.php' hilangkan titik koma '(;)' pada akhir kode.
<img src="/IMAGE/1.6.png" img>

# 1.7 Struktur direktori
<img src="/IMAGE/1.7.png" img>

# 1.8 Letak route
Pada file `app/Config/Routes.php`. Tambahkan kode berikut:<br>

```bash
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
```

<img src="/IMAGE/1.8.png" img>

# 1.9 Buka cmd
Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan ikuti langkah 
berikut:<br> 
masuk directory `C:\xampp\htdocs\lab11_ci\ci4>` terlebih dahulu lalu jalankan
```bash
php spark routes
```
<img src="/IMAGE/1.9.png" img>

# 1.10 Ubah Method About
Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url 
`http://localhost:8080/about` 

<img src="/IMAGE/1.10.png" img>

# 1.11 Membuat controller
Buat file baru dengan nama `Page.php` pada direktori `Controllers` dan isi kodenya:

```bash
<?php
namespace App\Controllers;
class Page extends BaseController
{
   public function about()
   {
      echo "Ini halaman About";
   }
   public function contact()
   {
      echo "Ini halaman Contact";
   }
   public function faqs()
   {
      echo "Ini halaman FAQ";
   }
}
```
<img src="/IMAGE/1.11" img>

# 1.12 Akses kembali
Refresh kembali browser nya maka tampilannya akan seperti berikut:
<img src="/IMAGE/1.12.png" img>

# 1.13 Method baru
Pada `app/Controllers/Page.php` tambahkan kode berikut:

```bash
public function tos()
{
   echo "ini halaman Term of Services";
}
```
<img src="/IMAGE/1.13.png" img>

# 1.14 Akses method baru
Akses dengan alamat http://localhost:8080/lab11_ci/ci4/public/tos

<img src="/IMAGE/1.14.png" img>

# 1.15 Membuat view 
Pada direktori `app/Views` buat file baru dengan nama `about.php` dan tambahkan kode berikut:
```bash
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title><?= $title; ?></title>
</head>
<body>
   <h1><?= $title; ?></h1>
   <hr>
   <p><?= $content; ?></p>
</body>
</html>
```
<img src="/IMAGE/1.15.png" img>

# 1.16 Ubah Method About
Pada `app/Controllers/Page.php` ubah:
```bash
public function about()
{
   echo "Ini halaman About";
}
```
Menjadi:
```bash
public function about()
{
   return view('about', [
      'title' => 'Halaman About',
      'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi halaman ini.'
   ]);
}
```
<img src="/IMAGE/1.16.png" img>

# 1.17 Refresh Halaman

<img src="/IMAGE/1.17.png" img>

# 1.18 Membuat Layout Web dengan CSS
Buat file css pada direktori `public` dengan nama `style.css` (copy file dari praktikum 
`lab4_layout`). Kita akan gunakan layout yang pernah dibuat pada praktikum 4.

<img src="/IMAGE/1.18.png" img>

# 1.19 Buat Folder Template
Pada direktori `Views` buat folder `template`. Kemudian buat file `header.php`:

```bash
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>

<body>
    <div id="container">
        <header>
            <h1>Layout Sederhana</h1>
        </header>
        <nav>
            <a href="<?= base_url('/'); ?>" class="active">Home</a>
            <a href="<?= base_url('/artikel'); ?>">Artikel</a>
            <a href="<?= base_url('/about'); ?>">About</a>
            <a href="<?= base_url('/contact'); ?>">Kontak</a>
        </nav>
        <section id="wrapper">
            <section id="main">
```
dan `footer.php`:

```bash
 </section>
            <aside id="sidebar">
                <div class="widget-box">
                    <h3 class="title">Widget Header</h3>
                    <ul>
                        <li><a href="#">Widget Link</a></li>
                        <li><a href="#">Widget Link</a></li>
                    </ul>
                </div>
                <div class="widget-box">
                    <h3 class="title">Widget Text</h3>
                    <p>
                        Vestibulum lorem elit, iaculis in nisl volutpat, malesuada tincidunt arcu. Proin in leo fringilla, vestibulum mi porta,faucibus felis. Integer pharetra est nunc, nec pretium nunc pretium ac.
                    </p>
                </div>
            </aside>
        </section>
        <footer>
            <p>&copy; 2021 - Universitas Pelita Bangsa</p>
        </footer>
    </div>
</body>

</html>
```
<img src="/IMAGE/1.19.png" img>

# 1.20 Ubah File About
Ubah file `app/Views/about.php` dari:
```bash
<h1><?= $title; ?></h1>
<hr>
<p><?= $content; ?></p>
```
Menjadi:
```bash
<?= $this->include('template/header'); ?>

<h1><?= $title; ?></h1>
<hr>
<p><?= $content; ?></p>

<?= $this->include('template/footer'); ?>
```

<img src="/IMAGE/1.20.png" img>

# 1.21 Refresh Halaman About
Refresh tampilan pada alamat `http://localhost:8080/lab11_ci/ci4/public/about`
<img src="/IMAGE/1.21.png" img>

# Praktikum 2

# Praktikum 3

# Praktikum 4

# Praktikum 5

# Praktikum 6

# Praktikum 7

# Praktikum 8

# Praktikum 9





