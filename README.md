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

# 1.9 Membuat View
Buat file baru 
dengan nama about.php pada direktori view (app/view/about.php) kemudian isi kodenya 
seperti berikut. 
```html
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
<img src="/IMAGE/membuatview.png" img>

# 1.10 Ubah Method About
Ubah method about pada class Controller Page menjadi seperti berikut: 
<img src="/IMAGE/methodabout.png" img>

# 1.11 Tampilan Halaman
<img src="/IMAGE/tampilanabout.png" img>

# 1.12 Membuat Layout Web dengan CSS 
Buat file style.css pada direktori public. Pada praktikum lab4_layout CSS sudah pernah dibuat, copy saja filenya ke direktori public.
<img src="/IMAGE/12.png" img>

# Praktikum 2





