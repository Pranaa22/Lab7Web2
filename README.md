```bash
Nama : Pranaja widyadhana Wardana
Nim  : 312310194
Kelas: TI.23.A2
Tugas: Pemrograman Web 2
```

# Daftar Isi Praktikum

*   **[Improvisasi Fitur Tambahan](#improvisasi-fitur-tambahan)**
*   **[Praktikum 1](#praktikum-1)**
*   **[Praktikum 2](#praktikum-2)**
*   **[Praktikum 3](#praktikum-3)**
*   **[Praktikum 4](#praktikum-4)**
*   **[Praktikum 5](#praktikum-5)**
*   **[Praktikum 6](#praktikum-6)**
*   **[Praktikum 7](#praktikum-7)**
*   **[Praktikum 8](#praktikum-8)**
*   **[Praktikum 9](#praktikum-9)**
*   **[Praktikum 10](#praktikum-10)**
*   **[Praktikum 11](#praktikum-11)**
---

# Praktikum 1
<br>

# 1.1 Instalasi Codelgniter 4 

• Unduh Codeigniter dari website `https://codelgniter.com/download`<br>
• Extrak file zip Codeigniter ke direktori `htdocs/lab11_ci.`<br>
• Ubah nama direktory `framework-4.x.xx` menjadi `ci4.`<br> 
• Buka browser dengan alamat `http://localhost/lab11_ci/ci4/public/`<br> 

<img src="/IMAGE/1.1.png" img>

# 1.2 Menjalankan CLI (Command Line Interface) 
arahkan lokasi direktori sesuai dengan direktori kerja project dibuat `(xampp/htdocs/lab11_ci/p3web2/)`<br>

<img src="/IMAGE/1.2.png" img>

# 1.3 Menjalankan perintah
Perintah yang dapat dijalankan untuk memanggil CLI Codelgniter:

```bash
php spark
```
<br>
<img src="/IMAGE/1.3.png" img>

# 1.4 Ubah nama file
Ubah nama file 'env' menjadi '.env' kemudian buka file tersebut dan ubah nilai variabel 
'CI_ENVIRINMENT' menjadi 'development'.<br>
<img src="/IMAGE/1.4.png" img>

# 1.5 Contoh error 
<br>
<img src="/IMAGE/1.5.png" img>
<br>

# 1.6 Uji coba error
Contoh error yang terjadi. Untuk mencoba error tersebut, ubah kode pada file 
'app/Controller/Home.php' hilangkan titik koma '(;)' pada akhir kode.<br>
<br>
<img src="/IMAGE/1.6.png" img>

# 1.7 Struktur direktori
<br>
<img src="/IMAGE/1.7.png" img>

# 1.8 Letak route
Pada file `app/Config/Routes.php`. Tambahkan kode berikut:<br>

```bash
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
```
<br>
<img src="/IMAGE/1.8.png" img>

# 1.9 Buka cmd
Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan ikuti langkah 
berikut:<br> 
masuk directory `C:\xampp\htdocs\lab11_ci\ci4>` terlebih dahulu lalu jalankan
```bash
php spark routes
```
<br>
<img src="/IMAGE/1.9.png" img>

# 1.10 Ubah Method About
Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url 
`http://localhost:8080/about` 
<br>
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
<br>
<img src="/IMAGE/1.11.png" img>

# 1.12 Akses kembali
Refresh kembali browser nya maka tampilannya akan seperti berikut:<br>
<br>
<img src="/IMAGE/1.12.png" img>

# 1.13 Method baru
Pada `app/Controllers/Page.php` tambahkan kode berikut:

```bash
public function tos()
{
   echo "ini halaman Term of Services";
}
```
<br>
<img src="/IMAGE/1.13.png" img>

# 1.14 Akses method baru
Akses dengan alamat http://localhost:8080/lab11_ci/ci4/public/tos
<br>
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
<br>
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
<br>
<img src="/IMAGE/1.17.png" img>

# 1.18 Membuat Layout Web dengan CSS
Buat file css pada direktori `public` dengan nama `style.css` (copy file dari praktikum 
`lab4_layout`). Kita akan gunakan layout yang pernah dibuat pada praktikum 4.<br>
<br>
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
<br>
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
<br>
<img src="/IMAGE/1.20.png" img>

# 1.21 Refresh Halaman About
Refresh tampilan pada alamat `http://localhost:8080/lab11_ci/ci4/public/about`
<br>
<img src="/IMAGE/1.21.png" img>
<br>

# Praktikum 2
<br>

# 2.1 Buka Cmd
Pastikan MySQL Server sudah dapat dijalankan melalui 
XAMPP. Lalu jalankan perintah berikut:
<br>
<img src="/IMAGE/2.1.png" img>

# 2.2 Membuat Database dan Tabel
Membuat Database:
```bash
CREATE DATABASE lab_ci4; 
```
Membuat Tabel:
```bash
CREATE TABLE artikel ( 
id INT(11) auto_increment, 
judul VARCHAR(200) NOT NULL, 
isi TEXT, 
gambar VARCHAR(200), 
status TINYINT(1) DEFAULT 0, 
slug VARCHAR(200), 
PRIMARY KEY(id) 
);
```
<br>
<img src="/IMAGE/2.2.png" img>

# 2.3 Konfigurasi koneksi database 
Selanjutnya membuat konfigurasi untuk menghubungkan dengan database server
pada file .env 
<img src="/IMAGE/2.3.png" img>

# 2.4 Membuat Model 
Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada direktori `app/Models` dengan nama `ArtikelModel.php`<br>
<img src="/IMAGE/2.4.png" img>

# 2.5 Membuat Controller
Buat Controller baru dengan nama `Artikel.php` pada direktori `app/Controllers`.
```bash
<?php 
 
namespace App\Controllers; 
 
use App\Models\ArtikelModel; 
 
class Artikel extends BaseController 
{ 
    public function index()  
    { 
        $title = 'Daftar Artikel'; 
        $model = new ArtikelModel(); 
        $artikel = $model->findAll(); 
        return view('artikel/index', compact('artikel', 'title')); 
    }
}
```
<img src="/IMAGE/2.5.png" img>

# 2.6 Membuat view
Buat direktori baru dengan nama `artikel` pada direktori `app/views`, kemudian buat file baru dengan nama `index.php`.
```bash
<?= $this->include('template/header'); ?> 

<?php if($artikel): foreach($artikel as $row): ?> 
<article class="entry"> 
    <h2><a href="<?= base_url('/artikel/' . $row['slug']);?>"class="subjudul"><?= 
$row['judul']; ?></a> 
</h2>
    <p><?= substr($row['isi'], 0, 200); ?></p> 
</article> 
<hr class="divider" /> 
<?php  endforeach; else: ?> 
<article class="entry"> 
    <h2>Belum ada data.</h2> 
</article> 
<?php endif; ?> 

<?= $this->include('template/footer'); ?> 
```
<img src="/IMAGE/2.6.png" img>

# 2.7 Buka Browser 
 Buka browser kembali, dengan mengakses url `http://localhost:8080/artikel`.
 <br>
 <img src="/IMAGE/2.7.png" img>

# 2.8 Penambahan Data Dalam Database
Belum ada data yang diampilkan. Kemudian coba tambahkan beberapa data pada database agar dapat ditampilkan datanya. 
```bash
INSERT INTO artikel (judul, isi, slug) VALUE  
('Artikel pertama', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah 
menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak 
yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk 
menjadi sebuah buku contoh huruf.', 'artikel-pertama'),  
('Artikel kedua', 'Tidak seperti anggapan banyak orang, Lorem Ipsum 
bukanlah teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin 
klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah 
mencapai lebih dari 2000 tahun.', 'artikel-kedua'); 
```
<br>
<img src="/IMAGE/2.8.png" img>

# 2.9 Refresh Browser
Refresh kembali browser, sehingga akan ditampilkan hasilnya.
<br>
<img src="/IMAGE/2.9.png" img>

# 2.10 Membuat Tampilan Detail Artikel 
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada `Controller Artikel` dengan nama `view()`.
```bash
 public function view($slug) 
    { 
        $model = new ArtikelModel(); 
        $artikel = $model->where([ 
            'slug' => $slug 
        ])->first(); 
 
        // Menampilkan error apabila data tidak ada. 
        if (!$artikel)  
        { 
            throw PageNotFoundException::forPageNotFound(); 
        } 
 
        $title = $artikel['judul']; 
        return view('artikel/detail', compact('artikel', 'title')); 
    } 
```
<br>
<img src="/IMAGE/2.10.png" img>

# 2.11 Membuat View Detail
Buat view baru untuk halaman detail dengan nama `app/views/artikel/detail.php`.
```bash
<?= $this->include('template/header'); ?> 

<article class="entry"> 
    <h2><?= $artikel['judul']; ?></h2> 
    <img src="<?= base_url('/gambar/' . $artikel['gambar']);?>" alt="<?= 
$artikel['judul']; ?>"> 
    <p><?= $artikel['isi']; ?></p>
 
</article> 

<?= $this->include('template/footer'); ?> 
```
<br>
<img src="/IMAGE/2.11.png" img>

# 2.12 Membuat Routing untuk artikel detail 
Buka Kembali file `app/config/Routes.php`, kemudian tambahkan routing untuk artikel detail.
```bash
$routes->get('/artikel/(:any)', 'Artikel::view/$1'); 
```
<br>
<img src="/IMAGE/2.12.png" img>

# 2.13 Membuat Menu Admin 
Menu admin adalah untuk proses CRUD data artikel. Buat method baru pada `Controller Artikel` dengan nama `admin_index()`.
```bash
public function admin_index()  
{ 
   $title = 'Daftar Artikel'; 
   $model = new ArtikelModel(); 
   $artikel = $model->findAll(); 
   return view('artikel/admin_index', compact('artikel', 'title')); 
} 
```
<br>
<img src="/IMAGE/2.13.png" img>

# 2.14 Buat View Admin 
Selanjutnya buat view untuk tampilan admin dengan nama `admin_index.php`.
```bash
<?= $this->include('template/admin_header'); ?> 
 
<table class="table"> 
    <thead> 
        <tr> 
            <th>ID</th> 
            <th>Judul</th> 
            <th>Status</th> 
            <th>AKsi</th> 
        </tr> 
    </thead> 
    <tbody> 
    <?php if($artikel): foreach($artikel as $row): ?> 
    <tr> 
        <td><?= $row['id']; ?></td> 
        <td> 
            <b><?= $row['judul']; ?></b> 
            <p><small><?= substr($row['isi'], 0, 50); ?></small></p> 
        </td> 
        <td><?= $row['status']; ?></td> 
        <td> 
            <a class="btn" href="<?= base_url('/admin/artikel/edit/' . 
$row['id']);?>">Ubah</a> 
            <a class="btn btn-danger" onclick="return confirm('Yakin 
menghapus data?');" href="<?= base_url('/admin/artikel/delete/' . 
$row['id']);?>">Hapus</a> 
        </td> 
    </tr> 
    <?php  endforeach; else: ?> 
    <tr> 
        <td colspan="4">Belum ada data.</td> 
    </tr> 
    <?php endif; ?> 
    </tbody> 
    <tfoot> 
        <tr> 
            <th>ID</th> 
            <th>Judul</th> 
            <th>Status</th> 
            <th>AKsi</th> 
        </tr> 
    </tfoot> 
</table> 
 
<?= $this->include('template/admin_footer'); ?> 
```
<br>
<img src="/IMAGE/2.14.png" img>

# 2.15 Tambahkan Routing
Penambahan routing untuk menu admin seperti berikut: 
```bash
$routes->group('admin', function($routes) { 
   $routes->get('artikel', 'Artikel::admin_index'); 
   $routes->add('artikel/add', 'Artikel::add'); 
   $routes->add('artikel/edit/(:any)', 'Artikel::edit/$1'); 
   $routes->get('artikel/delete/(:any)', 'Artikel::delete/$1'); 
});
```
<br>
<img src="/IMAGE/2.15.png" img>

# 2.16 Akses Menu Admin 
Dengan url `http://localhost:8080/admin/artikel`. 
<br>
<img src="/IMAGE/2.16.png" img>

# 2.17 Menambah Data Artikel
Tambahkan fungsi/method baru pada `Controller Artikel` dengan nama `add()`. 
```bash
public function add()  
    { 
        // validasi data. 
        $validation =  \Config\Services::validation(); 
        $validation->setRules(['judul' => 'required']); 
        $isDataValid = $validation->withRequest($this->request)->run(); 

        if ($isDataValid) 
        { 
            $artikel = new ArtikelModel(); 
            $artikel->insert([ 
                'judul' => $this->request->getPost('judul'),
                'isi' => $this->request->getPost('isi'), 
                'slug' => url_title($this->request->getPost('judul')), 
            ]); 
            return redirect('admin/artikel'); 
        } 
        $title = "Tambah Artikel"; 
        return view('artikel/form_add', compact('title')); 
    }
```
<br>
<img src="/IMAGE/2.17.png" img>

# 2.18 Buat View Untuk Form Add
Buat dengan nama `form_add.php`.
```bash
<?= $this->include('template/admin_header'); ?> 
<h2><?= $title; ?></h2> 
<form action="" method="post"> 
    <p> 
        <input type="text" name="judul"> 
    </p> 
    <p> 
        <textarea name="isi" cols="50" rows="10"></textarea> 
    </p> 
    <p><input type="submit" value="Kirim" class="btn btn-large"></p> 
</form> 

<?= $this->include('template/admin_footer'); ?> 
```
<br>
<img src="/IMAGE/2.18.png" img> 
Maka hasilnya:
<br>
<img src="/IMAGE/2.19.png" img>

# 2.19 Mengubah Data 
Tambahkan fungsi/method baru pada `Controller Artikel` dengan nama `edit()`. 
```bash
  public function edit($id)  
    { 
        $artikel = new ArtikelModel(); 
 
        // validasi data. 
        $validation =  \Config\Services::validation(); 
        $validation->setRules(['judul' => 'required']); 
        $isDataValid = $validation->withRequest($this->request)->run(); 
 
        if ($isDataValid) 
        { 
            $artikel->update($id, [ 
                'judul' => $this->request->getPost('judul'), 
                'isi' => $this->request->getPost('isi'), 
            ]); 
            return redirect('admin/artikel'); 
        } 
 
        // ambil data lama 
        $data = $artikel->where('id', $id)->first(); 
        $title = "Edit Artikel"; 
        return view('artikel/form_edit', compact('title', 'data')); 
    } 
```
<br>
<img src="/IMAGE/2.20.png" img>

# 2.20 Buat View Untuk Form Edit 
Buat  dengan nama `form_edit.php`. 
```bash
<?= $this->include('template/admin_header'); ?> 
 
<h2><?= $title; ?></h2> 
<form action="" method="post"> 
    <p> 
        <input type="text" name="judul" value="<?= $data['judul'];?>" > 
    </p> 
    <p> 
        <textarea name="isi" cols="50" rows="10"><?= 
$data['isi'];?></textarea> 
    </p> 
    <p><input type="submit" value="Kirim" class="btn btn-large"></p> 
</form> 
 
<?= $this->include('template/admin_footer'); ?>
```
<br>
<img src="/IMAGE/2.21.png" img>
<img src="/IMAGE/2.22.png" img>

# 2.21 Menghapus Data 
Tambahkan fungsi/method baru pada `Controller Artikel` dengan nama `delete()`.
```bash
public function delete($id)  
{ 
   $artikel = new ArtikelModel(); 
   $artikel->delete($id); 
   return redirect('admin/artikel'); 
} 
```
<br>
<img src="/IMAGE/2.23.png" img>
<br>

# Praktikum 3
<br>

# 3.1 Membuat Layout Utama 
Buat folder layout di dalam `app/Views/` 
Buat file `main.php` di dalam folder `layout` dengan kode berikut: 
```bash
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title><?= $title ?? 'My Website' ?></title> 
    <link rel="stylesheet" href="<?= base_url('/style.css');?>"> 
</head> 
<body> 
    <div id="container"> 
        <header> 
            <h1>Layout Sederhana</h1> 
        </header> 
        <nav> 
            <a href="<?= base_url('/');?>" class="active">Home</a> 
            <a href="<?= base_url('/artikel');?>">Artikel</a> 
            <a href="<?= base_url('/about');?>">About</a> 
            <a href="<?= base_url('/contact');?>">Kontak</a> 
        </nav> 
        <section id="wrapper"> 
            <section id="main"> 
                  <?= $this->renderSection('content') ?> 
            </section> 
            <aside id="sidebar"> 
                <?= view_cell('App\\Cells\\ArtikelTerkini::render') ?> 
                <div class="widget-box"> 
                    <h3 class="title">Widget Header</h3> 
                    <ul> 
                        <li><a href="#">Widget Link</a></li> 
                        <li><a href="#">Widget Link</a></li> 
                    </ul> 
                </div> 
                <div class="widget-box"> 
                    <h3 class="title">Widget Text</h3> 
                    <p>Vestibulum lorem elit, iaculis in nisl volutpat, 
                        malesuada tincidunt arcu. Proin in leo fringilla, 
vestibulum mi porta, 
                        faucibus felis. Integer pharetra est nunc, nec pretium 
nunc pretium ac.</p> 
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
<img src="/IMAGE/3.1.png" img>
<br>

# 3.2 Modifikasi File View 
Ubah `app/Views/home.php` agar sesuai dengan layout baru:
```bash
<?= $this->extend('layout/main') ?> 
 
<?= $this->section('content') ?> 
 
<h1><?= $title; ?></h1>  
<hr>  
<p><?= $content; ?></p>  
 
<?= $this->endSection() ?> 
```
<img src="/IMAGE/3.2.png" img> <br>
Sesuaikan juga untuk halaman lainnya yang ingin menggunakan format layout yang baru. 
<br>

# 3.3 Membuat Class View Cell 
Buat folder `Cells` di dalam `app/` 
Buat `file ArtikelTerkini.php` di dalam `app/Cells/` dengan kode berikut:
```bash
<?php 
 
namespace App\Cells; 
 
use CodeIgniter\View\Cell; 
use App\Models\ArtikelModel; 
 
class ArtikelTerkini extends Cell 
{ 
    public function render() 
    { 
        $model = new ArtikelModel(); 
        $artikel = $model->orderBy('created_at', 'DESC')->limit(5)->findAll(); 
         
        return view('components/artikel_terkini', ['artikel' => $artikel]); 
    } 
} 
```
<img src="/IMAGE/3.3.png" img>
<br>

# 3.4 Membuat View untuk View Cell 
Buat folder `components` di dalam `app/Views/` 
Buat file `artikel_terkini.php` di dalam `app/Views/components/` dengan kode berikut: 
```bash
<h3>Artikel Terkini</h3> 
<ul> 
    <?php foreach ($artikel as $row): ?> 
    <li><a href="<?= base_url('/artikel/' . $row['slug']) ?>"><?= 
$row['judul'] ?></a></li> 
    <?php endforeach; ?> 
</ul>
```
<img src="/IMAGE/3.4.png" img>
<br>

# 3.5 Pertanyaan dan Tugas
1. Sesuaikan data dengan praktikum sebelumnya, perlu melakukan perubahan `field` pada 
database dengan menambahkan tanggal agar dapat mengambil data artikel terbaru.<br>
**Jawab:** <br>
   Untuk mengambil artikel terbaru,perlu menambahkan field `created_at` di tabel `artikel` pada cmd.
   ```bash
   ALTER TABLE artikel ADD created_at DATETIME DEFAULT CURRENT_TIMESTAMP;
   ```
   <img src="/IMAGE/3.5.1.png" img><br>
   
   field `created_at` berhasil di tambahkan pada tabel `artikel` yang akan terisi otomatis saat data ditambahkan. Field ini digunakan untuk menampilkan artikel terbaru menggunakan fitur `View Cell`.
   ```bash
   SELECT * FROM artikel;
   ```
   <img src="/IMAGE/3.5.2.png" img><br>
   
   Tampilan data yang sudah ada isi kolom created_at:
   ```bash
   SELECT id, judul, created_at FROM artikel ORDER BY created_at DESC LIMIT 5;
   ```
   <img src="/IMAGE/3.5.3.png" img><br>

2. Selesaikan programnya sesuai Langkah-langkah yang ada. Anda boleh melakukan 
improvisasi.<br>
   **Jawab:** <br>
   DONE!<br>
   
3. Apa manfaat utama dari penggunaan `View Layout` dalam pengembangan aplikasi?<br>
   **Jawab:** <br>
   Struktur layout (header, footer, sidebar) cukup ditulis sekali,<br>
   Halaman hanya fokus pada kontennya,<br>
   Memudahkan perawatan dan pengembangan desain antarmuka.<br>

4. Jelaskan perbedaan antara `View Cell` dan `View` biasa.<br>
   **Jawab:** <br>
   **View Biasa** dipakai untuk halaman utama, seperti home.php, artikel.php, dll.<br>
   Kita perlu kirim data dari controller ke view.<br>
   **View Cell** itu seperti komponen kecil dan mandiri, mirip seperti "widget" atau "partial".<br>
   Cocok banget untuk hal-hal seperti:<br>
   Sidebar “Artikel Terkini”:<br>
   Menu navigasi kecil:<br>
   Komentar terbaru:<br>
   Komponen yang bisa dipakai ulang di banyak halaman<br>

5. Ubah `View Cell` agar hanya menampilkan post dengan kategori tertentu.<br>
**Jawab:** <br>

   **5.1. Tambahkan Kolom kategori di Tabel `artikel`**<br>
   Jika belum ada, tambahkan kolom `kategori` pada tabel `artikel`:
   ```bash
   ALTER TABLE artikel ADD kategori VARCHAR(100) DEFAULT 'umum';
   ```
   Lalu isi nilainya secara manual (bisa via phpMyAdmin):
   ```bash
   UPDATE artikel SET kategori = 'teknologi' WHERE id = 3;
   UPDATE artikel SET kategori = 'umum' WHERE id IN (1, 2);
   ```
   **5.2. Modifikasi `View Cell Class` `ArtikelTerkini.php`**<br>
      File: `app/Cells/ArtikelTerkini.php`:<br>
      Tambahkan:
      ```bash
      <?php
      namespace App\Cells;
      
      use App\Models\ArtikelModel;
      
      class ArtikelTerkini
      {
          public function show()
          {
              $model = new ArtikelModel();
      
              // Ambil artikel dari 2 kategori: teknologi & umum
              $artikel = $model
                  ->whereIn('kategori', ['teknologi', 'umum'])
                  ->orderBy('created_at', 'DESC')
                  ->limit(5)
                  ->findAll();
      
              return view('components/artikel_terkini', ['artikel' => $artikel]);
          }
      }
      ```
   **5.3 Ubah View `artikel_terkini.php`**<br>
      File: `app/Views/components/artikel_terkini.php`<br>
      Tambahkan:
      ```bash
      <div class="widget-box">
          <h3 class="title">Artikel Terkini</h3>
          <ul>
              <?php foreach ($artikel as $row): ?>
                  <li>
                      <a href="<?= base_url('/artikel/' . $row['slug']) ?>">
                           <?= esc($row['judul']) ?> <small>(<?= esc($row['kategori']) ?>)</small>
                      </a>
                  </li>
              <?php endforeach; ?>
          </ul>
      </div>
      ```
   **5.4. Ubah File Layout `main.php` untuk Panggil `View Cell` dengan Kategori**<br>
      File: `app/Views/layout/main.php`<br>
      Tambahkan ini di `<aside id="sidebar">`:
      ```bash:
      <?= view_cell('App\\Cells\\ArtikelTerkini::show') ?>
      ```
      Ini akan menampilkan dua daftar: artikel teknologi dan artikel umum.<br>
   
   **5.5. Pastikan Halaman `/artikel` Extend Layout**<br>
      File: `app/Views/artikel/index.php`<br>
      Tambahkan:
      ```bash
      <?= $this->extend('layout/main') ?>
      
      <?= $this->section('content') ?>
      <h1><?= $title; ?></h1>
      
      <?php foreach ($artikel as $row): ?>
          <div class="artikel-box">
              <h2><?= esc($row['judul']) ?></h2>
              <p><?= esc(substr($row['isi'], 0, 120)) ?>...</p>
              <a href="<?= base_url('/artikel/' . $row['slug']) ?>">Baca selengkapnya</a>
          </div>
      <?php endforeach; ?>
      
      <?= $this->endSection() ?>
      ```
   **5.6. Penambahan dan Perubahan Pada File `css`**<br>
      File: `public/style.css`<br>
      Tambahkan:
      ```bash
      .widget-box {
          background-color: #e0f0ff;
          border: 1px solid #b0d4f1;
          padding: 10px;
          margin-bottom: 20px;
      }
      
      .widget-box .title {
          background-color: #2a6ebd;
          color: white;
          padding: 5px;
          font-weight: bold;
      }
      
      .widget-box ul {
          list-style-type: none;
          padding-left: 0;
      }
      
      .widget-box ul li {
          margin-bottom: 5px;
      }
      
      .artikel-box {
          background-color: #f9f9f9;
          border: 1px solid #ddd;
          padding: 15px;
          margin-bottom: 20px;
          border-radius: 5px;
      }
      
      ```
      Hasil Akhir :
   <img src="/IMAGE/3.5.0.png" img> <br>
   <br>
   
# Praktikum 4
<br>

# 4.1 Membuat Tabel: User Login
Untuk memulai membuat modul Login, yang perlu disiapkan adalah database server<br> 
menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP. 
```bash
CREATE TABLE user ( 
  id INT(11) auto_increment, 
  username VARCHAR(200) NOT NULL, 
  useremail VARCHAR(200), 
  userpassword VARCHAR(200), 
  PRIMARY KEY(id) 
); 
```

# 4.2 Membuat Model User 
Selanjutnya adalah membuat Model untuk memproses data Login. Buat file baru pada direktori 
`app/Models` dengan nama `UserModel.php`<br>
Tambahkan:
```bash
<?php 
 
namespace App\Models; 
 
use CodeIgniter\Model; 
 
class UserModel extends Model 
{ 
    protected $table = 'user'; 
    protected $primaryKey = 'id'; 

    protected $useAutoIncrement = true; 
    protected $allowedFields = ['username', 'useremail', 'userpassword'];
}
```

# 4.3 Membuat Controller User 
Buat `Controller` baru dengan nama `User.php` pada direktori `app/Controllers`. Kemudian 
tambahkan method `index()` untuk menampilkan daftar user, dan method `login()` untuk proses 
login. 
```bash
<?php 
 
namespace App\Controllers; 
 
use App\Models\UserModel; 
 
class User extends BaseController 
{ 
    public function index()  
    { 
        $title = 'Daftar User'; 
        $model = new UserModel(); 
        $users = $model->findAll(); 
        return view('user/index', compact('users', 'title')); 
    } 
 
    public function login() 
    { 
        helper(['form']); 
        $email = $this->request->getPost('email'); 
        $password = $this->request->getPost('password'); 
        if (!$email) 
        { 
            return view('user/login'); 
        } 
 
        $session = session(); 
        $model = new UserModel(); 
        $login = $model->where('useremail', $email)->first(); 
        if ($login) 
        { 
            $pass = $login['userpassword']; 
            if (password_verify($password, $pass)) 
            { 
                $login_data = [ 
                    'user_id' => $login['id'], 
                    'user_name' => $login['username'], 
                    'user_email' => $login['useremail'], 
                    'logged_in' => TRUE, 
                ]; 
                    $session->set($login_data); 
                return redirect('admin/artikel'); 
            } 
            else  
            { 
                $session->setFlashdata("flash_msg", "Password salah."); 
                return redirect()->to('/user/login'); 
            } 
        } 
        else 
        { 
            $session->setFlashdata("flash_msg", "email tidak terdaftar."); 
            return redirect()->to('/user/login'); 
        } 
    } 
} 
```

# 4.4 Membuat View Login 
Buat direktori baru dengan nama `user` pada direktori `app/views`, kemudian buat file baru 
dengan nama `login.php`.<br>
Tambahkan:
```bash
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Login</title> 
    <link rel="stylesheet" href="<?= base_url('/style.css');?>"> 
</head> 
<body> 
    <div id="login-wrapper"> 
            <h1>Sign In</h1> 
            <?php if(session()->getFlashdata('flash_msg')):?> 
                <div class="alert alert-danger"><?= session()
>getFlashdata('flash_msg') ?></div> 
            <?php endif;?> 
            <form action="" method="post"> 
                <div class="mb-3"> 
                    <label for="InputForEmail" class="form-label">Email 
address</label> 
                    <input type="email" name="email" class="form-control" 
id="InputForEmail" value="<?= set_value('email') ?>"> 
                </div> 
                <div class="mb-3"> 
                    <label for="InputForPassword" class="form
label">Password</label> 
                    <input type="password" name="password" class="form
control" id="InputForPassword"> 
                </div> 
                <button type="submit" class="btn btn- 
primary">Login</button> 
            </form> 
    </div> 
</body> 
</html> 
```

# 4.5 Membuat Database Seeder 
Database seeder digunakan untuk membuat data dummy. Untuk keperluan ujicoba modul<br> 
login, kita perlu memasukkan `data user` dan `password` kedaalam database. Untuk itu buat<br> 
database `seeder` untuk tabel `user`. Buka CLI, kemudian tulis perintah berikut:
```bash
php spark make:seeder UserSeeder
```
Selanjutnya, buka file `UserSeeder.php` yang berada di lokasi direktori<br> 
`/app/Database/Seeds/UserSeeder.php` kemudian isi dengan kode berikut:
```bash
<?php 
 
namespace App\Database\Seeds; 
 
use CodeIgniter\Database\Seeder; 
 
class UserSeeder extends Seeder 
{ 
    public function run() 
    { 
        $model = model('UserModel'); 
        $model->insert([ 
            'username' => 'admin', 
            'useremail' => 'admin@email.com', 
            'userpassword' => password_hash('admin123', PASSWORD_DEFAULT), 
        ]); 
    } 
}
```
Selanjutnya buka kembali `CLI` dan ketik perintah berikut: 
```bash
php spark db:seed UserSeeder 
```

# 4.6 Uji Coba Login
Selanjutnya buka url `http://localhost:8080/user/login` seperti berikut:<br>
<img src="/IMAGE/4.6.png" img> <br>

# 4.7 Menambahkan Auth Filter 
Selanjutnya membuat filer untuk halaman `admin`. Buat file baru dengan nama `Auth.php` pada<br>
direktori `app/Filters`.<br> 
Tambahkan:
```bash
<?php namespace App\Filters; 
  
use CodeIgniter\HTTP\RequestInterface; 
use CodeIgniter\HTTP\ResponseInterface; 
use CodeIgniter\Filters\FilterInterface; 
  
class Auth implements FilterInterface 
{ 
    public function before(RequestInterface $request, $arguments = null) 
    { 
        // jika user belum login 
        if(! session()->get('logged_in')){ 
            // maka redirct ke halaman login 
            return redirect()->to('/user/login'); 
        } 
    } 
  
    public function after(RequestInterface $request, ResponseInterface 
$response, $arguments = null) 
    { 
        // Do something here 
    } 
} 
```
Selanjutnya buka file `app/Config/Filters.php` tambahkan kode berikut:
```bash
'auth' => Auth::class,
```
<img src="/IMAGE/4.7.png" img> <br>

Selanjutnya buka `file app/Config/Routes.php` dan sesuaikan kodenya.
<img src="/IMAGE/4.7'2.png" img> <br>

# 4.8 Percobaan Akses Menu Admin 
Buka url dengan alamat `http://localhost:8080/admin/artikel` ketika alamat tersebut diakses 
maka, akan dimuculkan halaman `login`.<br>
<img src="/IMAGE/4.8.png" img> <br>

Jika berhasil masuk maka tampilan nya akan seperti ini:<br>
<img src="/IMAGE/4.8'2.png" img> <br>

# 4.9 Fungsi Logout 
Tambahkan method `logout` pada `Controller User` seperti berikut:
```bash
 public function logout()  
    { 
        session()->destroy(); 
        return redirect()->to('/user/login'); 
    } 
```
<br>

# Praktikum 5
<br>

# 5.1 Membuat Pagination
Pagination merupakan proses yang digunakan untuk membatasi tampilan yang panjang<br> 
dari data yang banyak pada sebuah website. Fungsi pagination adalah memecah tampilan<br> 
menjadi beberapa halaman tergantung banyaknya data yang akan ditampilkan pada setiap halaman.
<br>

Pada Codeigniter 4, fungsi pagination sudah tersedia pada Library sehingga cukup mudah<br> 
menggunakannya.
<br> 

Untuk membuat pagination, buka Kembali `Controller Artikel`, kemudian modifikasi kode 
pada method `admin_index`.
<br>
Dari:
```bash
public function admin_index()  
    { 
        $title = 'Daftar Artikel'; 
        $model = new ArtikelModel(); 
        $artikel = $model->findAll(); 
        return view('artikel/admin_index', compact('artikel', 'title')); 
    }
```
<br>

Menjadi:

```bash
public function admin_index()  
    { 
        $title = 'Daftar Artikel'; 
        $model = new ArtikelModel(); 
        $data = [
            'title'   => $title, 
            'artikel' => $model->paginate(10), #data dibatasi 10 record per halaman
            'pager'   => $model->pager,
            ]; 
        return view('artikel/admin_index', $data);  
    } 
```
<br>

Kemudian buka file `views/artikel/admin_index.php` dan tambahkan kode berikut<br> 
dibawah deklarasi tabel data.

```bash
<?= $pager->links(); ?> 
```
<br>
Selanjutnya buka kembali menu daftar artikel, tambahkan data lagi untuk melihat hasilnya.<br>
<img src="/IMAGE/5.1.png" img> <br>

# 5.2 Membuat Pencarian  
Pencarian data digunakan untuk memfilter data.
<br>
Untuk membuat pencarian data, buka kembali `Controller Artikel`, pada method 
`admin_index` ubah kodenya seperti berikut.
```bash
 public function admin_index()
    {
        $title = 'Daftar Artikel';
        $q = $this->request->getVar('q') ?? '';
        $model = new ArtikelModel();
        $data = [
            'title'   => $title,
            'q'       => $q,
            'artikel' => $model->like('judul', $q)->paginate(10),
            'pager'   => $model->pager,
        ];
        return view('artikel/admin_index', $data);
    }
```

Kemudian buka kembali file `views/artikel/admin_index.php` dan tambahkan form pencarian sebelum deklarasi tabel seperti berikut:
```bash
<form method="get" class="form-search">
    <input type="text" name="q" value="<?= $q; ?>" placeholder="Cari data">
    <input type="submit" value="Cari" class="btn btn-primary">
</form>
```
Dan pada link pager ubah seperti berikut.<br>
Ganti: 
```bash
<?= $pager->links(); ?>
```
Menjadi:
```bash
<?= $pager->only(['q'])->links(); ?>
```
<img src="/IMAGE/5.2.png" img> 
<br>

# Praktikum 6
<br>

# 6.1 Upload Gambar pada Artikel 
Menambahkan fungsi unggah gambar pada tambah artikel.<br>  
Buka kembali `Controller Artikel` pada project sebelumnya, sesuaikan kode pada `method`<br> 
`add` seperti berikut:
```bash
  public function add()  
    { 
        // validasi data. 
        $validation =  \Config\Services::validation(); 
        $validation->setRules(['judul' => 'required']); 
        $isDataValid = $validation->withRequest($this->request)->run(); 
 
        if ($isDataValid) 
        { 
            $file = $this->request->getFile('gambar'); 
            $file->move(ROOTPATH . 'public/gambar'); 
 
            $artikel = new ArtikelModel(); 
            $artikel->insert([ 
                'judul'  => $this->request->getPost('judul'), 
                'isi'    => $this->request->getPost('isi'), 
                'slug'   => url_title($this->request->getPost('judul')), 
                'gambar' => $file->getName(), 
            ]); 
            return redirect('admin/artikel'); 
        } 
        $title = "Tambah Artikel"; 
        return view('artikel/form_add', compact('title')); 
    } 
```
<br>

Kemudian pada file `views/artikel/form_add.php` tambahkan field input file seperti berikut:
```bash
 <p> 
        <input type="file" name="gambar">
</p>
```
<br>

Dan sesuaikan tag form dengan menambahkan `ecrypt type` seperti berikut.
```bash
<form action="" method="post" enctype="multipart/form-data">
```

Ujicoba file `upload` dengan mengakses menu `tambah artikel`.
<br>

<img src="/IMAGE/6.1.png" img> 
<br>

Isi Artikel :<br>

<img src="/IMAGE/6.1.2.png" img> 
<br>

# Praktikum 7
<br>

# 7.1 Membuat Tabel Kategori 
Pastikan MySQL Server sudah berjalan, dan buka database `lab_ci4`<br>
Kita akan membuat tabel baru bernama `kategori` untuk mengkategorikan artikel. Struktur Tabel `kategori`<br> 
Jalankan query berikut: <br>

```bash
CREATE TABLE kategori ( 
   id_kategori INT(11) AUTO_INCREMENT, 
   nama_kategori VARCHAR(100) NOT NULL, 
   slug_kategori VARCHAR(100), 
   PRIMARY KEY (id_kategori) 
); 
```

# 7.2  Mengubah Tabel Artikel 
Tambahkan foreign key `id_kategori` pada tabel `artikel` untuk membuat relasi dengan tabel `kategori`.<br>  
Query untuk menambahkan `foreign key`:<br>

```bash
ALTER TABLE artikel 
ADD COLUMN id_kategori INT(11), 
ADD CONSTRAINT fk_kategori_artikel 
FOREIGN KEY (id_kategori) REFERENCES kategori(id_kategori); 
```

# 7.3 Membuat Model Kategori 
Buat file model baru di `app/Models` dengan nama `KategoriModel.php`:<br>
```bash
<?php 
 
namespace App\Models; 
 
use CodeIgniter\Model; 
 
class KategoriModel extends Model 
{ 
    protected $table = 'kategori'; 
    protected $primaryKey = 'id_kategori'; 
    protected $useAutoIncrement = true; 
    protected $allowedFields = [nama_kategori', 'slug_kategori']; 
} 
```

# 7.4 Memodifikasi Model Artikel 
Modifikasi `ArtikelModel.php` untuk mendefinisikan relasi dengan `KategoriModel`:<br>

```bash
<?php 
 
namespace App\Models; 
 
use CodeIgniter\Model; 
 
class ArtikelModel extends Model 
{ 
   protected $table = 'artikel'; 
   protected $primaryKey = 'id'; 
   protected $useAutoIncrement = true; 
   protected $allowedFields = ['judul', 'isi', 'status', 'slug', 'gambar', 
'id_kategori']; 
 
   public function getArtikelDenganKategori() 
   { 
      return $this->db->table('artikel') 
                  ->select('artikel.*, kategori.nama_kategori') 
                  ->join('kategori', 'kategori.id_kategori = artikel.id_kategori')
                  ->get() 
                  ->getResultArray(); 
   } 
} 
```

 
Menambahkan method `getArtikelDenganKategori()` untuk mengambil data artikel beserta 
nama kategorinya menggunakan join.<br>

# 7.5 Memodifikasi Controller Artikel 
Modifikasi `Artikel.php` untuk menggunakan model baru dan menampilkan data relasi:<br>

```bash
<?php 
     
namespace App\Controllers; 
 
use App\Models\ArtikelModel; 
use App\Models\KategoriModel; 
 
class Artikel extends BaseController 
{ 
    public function index() 
    { 
        $title = 'Daftar Artikel'; 
        $model = new ArtikelModel(); 
        $artikel = $model->getArtikelDenganKategori(); // Use the new method 
 
        return view('artikel/index', compact('artikel', 'title')); 
    } 
 
    public function admin_index() 
    { 
        $title = 'Daftar Artikel (Admin)'; 
        $model = new ArtikelModel(); 
 
        // Get search keyword 
        $q = $this->request->getVar('q') ?? ''; 
        // Get category filter 
        $kategori_id = $this->request->getVar('kategori_id') ?? ''; 
 
        $data = [ 
            'title' => $title, 
            'q' => $q, 
            'kategori_id' => $kategori_id, 
        ]; 
 
        // Building the query 
        $builder = $model->table('artikel')
 ->select('artikel.*, kategori.nama_kategori') 
                        ->join('kategori', 'kategori.id_kategori = 
artikel.id_kategori'); 
 
        // Apply search filter if keyword is provided 
        if ($q != '') { 
            $builder->like('artikel.judul', $q); 
        } 
 
        // Apply category filter if category_id is provided 
        if ($kategori_id != '') { 
            $builder->where('artikel.id_kategori', $kategori_id); 
        } 
 
        // Apply pagination 
        $data['artikel'] = $builder->paginate(10); 
        $data['pager'] = $model->pager; 
 
        // Fetch all categories for the filter dropdown 
        $kategoriModel = new KategoriModel(); 
        $data['kategori'] = $kategoriModel->findAll(); 
 
        return view('artikel/admin_index', $data); 
    } 
 
    // ... (methods add, edit, delete remain largely the same, but update to 
handle id_kategori) 
 
    public function add() 
    { 
        // Validation... 
        if ($this->request->getMethod() == 'post' && $this->validate([ 
            'judul' => 'required', 
            'id_kategori' => 'required|integer' // Ensure id_kategori is 
required and an integer 
        ])) { 
            $model = new ArtikelModel(); 
            $model->insert([ 
                'judul' => $this->request->getPost('judul'), 
                'isi' => $this->request->getPost('isi'), 
                'slug' => url_title($this->request->getPost('judul')), 
                'id_kategori' => $this->request->getPost('id_kategori') 
            ]); 
            return redirect()->to('/admin/artikel'); 
        } else { 
            $kategoriModel = new KategoriModel(); 
            $data['kategori'] = $kategoriModel->findAll(); // Fetch categories 
for the form 
            $data['title'] = "Tambah Artikel";
  return view('artikel/form_add', $data); 
        } 
    } 
 
    public function edit($id) 
    { 
        $model = new ArtikelModel(); 
        if ($this->request->getMethod() == 'post' && $this->validate([ 
            'judul' => 'required', 
            'id_kategori' => 'required|integer' 
        ])) { 
            $model->update($id, [ 
                'judul' => $this->request->getPost('judul'), 
                'isi' => $this->request->getPost('isi'), 
                'id_kategori' => $this->request->getPost('id_kategori') 
            ]); 
            return redirect()->to('/admin/artikel'); 
        } else { 
            $data['artikel'] = $model->find($id); 
            $kategoriModel = new KategoriModel(); 
            $data['kategori'] = $kategoriModel->findAll(); // Fetch categories 
for the form 
            $data['title'] = "Edit Artikel"; 
            return view('artikel/form_edit', $data); 
        } 
    } 
 
    public function delete($id) 
    { 
        $model = new ArtikelModel(); 
        $model->delete($id); 
        return redirect()->to('/admin/artikel'); 
    } 
 
    public function view($slug) 
    { 
        $model = new ArtikelModel(); 
        $data['artikel'] = $model->where('slug', $slug)->first(); 
        if (empty($data['artikel'])) { 
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot 
find the article.'); 
        } 
        $data['title'] = $data['artikel']['judul']; 
        return view('artikel/detail', $data); 
    } 
} 
```

# 7.6 Memodifikasi View 
Buka folder `view/artikel` sesuaikan masing-masing view.<br>
`index.php`:

``` bash
<?= $this->include('template/header'); ?> 
     
<?php if ($artikel): foreach ($artikel as $row): ?> 
    <article class="entry"> 
        <h2><a href="<?= base_url('/artikel/' . $row['slug']); ?>"><?= 
$row['judul']; ?></a></h2> 
        <p>Kategori: <?= $row['nama_kategori'] ?></p> 
        <img src="<?= base_url('/gambar/' . $row['gambar']); ?>" alt="<?= 
$row['judul']; ?>"> 
        <p><?= substr($row['isi'], 0, 200); ?></p> 
    </article> 
    <hr class="divider" /> 
<?php endforeach; else: ?> 
    <article class="entry"> 
        <h2>Belum ada data.</h2> 
    </article> 
<?php endif; ?> 
 
<?= $this->include('template/footer'); ?> 
```

`admin_index.php`: 
```bash
<?= $this->include('template/admin_header'); ?> 
 
<h2><?= $title; ?></h2> 
 
<div class="row mb-3"> 
    <div class="col-md-6"> 
        <form method="get" class="form-inline"> 
            <input type="text" name="q" value="<?= $q; ?>" placeholder="Cari 
judul artikel" class="form-control mr-2"> 
            <select name="kategori_id" class="form-control mr-2"> 
                <option value="">Semua Kategori</option> 
                <?php foreach ($kategori as $k): ?> 
                    <option value="<?= $k['id_kategori']; ?>" <?= ($kategori_id 
== $k['id_kategori']) ? 'selected' : ''; ?>><?= $k['nama_kategori']; 
?></option> 
                <?php endforeach; ?> 
            </select> 
            <input type="submit" value="Cari" class="btn btn-primary"> 
        </form> 
    </div> 
</div> 
 
<table class="table"> 
    <thead> 
 <tr> 
            <th>ID</th> 
            <th>Judul</th> 
            <th>Kategori</th> 
            <th>Status</th> 
            <th>Aksi</th> 
        </tr> 
    </thead> 
    <tbody> 
        <?php if (count($artikel) > 0): ?> 
            <?php foreach ($artikel as $row): ?> 
                <tr> 
                    <td><?= $row->id; ?></td> 
                    <td> 
                        <b><?= $row->judul; ?></b> 
                        <p><small><?= substr($row->isi, 0, 50); ?></small></p> 
                    </td> 
                    <td><?= $row->nama_kategori; ?></td> 
                    <td><?= $row->status; ?></td> 
                    <td> 
                        <a class="btn btn-sm btn-info" href="<?= 
base_url('/admin/artikel/edit/' . $row->id); ?>">Ubah</a> 
                        <a class="btn btn-sm btn-danger" onclick="return 
confirm('Yakin menghapus data?');" href="<?= 
base_url('/admin/artikel/delete/' . $row->id); ?>">Hapus</a> 
                    </td> 
                </tr> 
            <?php endforeach; ?> 
        <?php else: ?> 
            <tr> 
                <td colspan="5">Tidak ada data.</td> 
            </tr> 
        <?php endif; ?> 
    </tbody> 
</table> 
 
<?= $pager->only(['q', 'kategori_id'])->links(); ?> 
 
<?= $this->include('template/admin_footer'); ?>
```

`form_add.php`:
```bash
<?= $this->include('template/admin_header'); ?> 
     
<h2><?= $title; ?></h2> 
 
<form action="" method="post"> 
    <p> 
        <label for="judul">Judul</label> 
<input type="text" name="judul" id="judul" required> 
    </p> 
    <p> 
        <label for="isi">Isi</label> 
        <textarea name="isi" id="isi" cols="50" rows="10"></textarea> 
    </p> 
    <p> 
        <label for="id_kategori">Kategori</label> 
        <select name="id_kategori" id="id_kategori" required> 
            <?php foreach($kategori as $k): ?> 
                <option value="<?= $k['id_kategori']; ?>"><?= 
$k['nama_kategori']; ?></option> 
            <?php endforeach; ?> 
        </select> 
    </p> 
    <p><input type="submit" value="Kirim" class="btn btn-large"></p> 
</form> 
 
<?= $this->include('template/admin_footer'); ?>
```


`form_edit.php`:
```bash
<?= $this->include('template/admin_header'); ?> 
 
<h2><?= $title; ?></h2> 
 
<form action="" method="post"> 
    <p> 
        <label for="judul">Judul</label> 
        <input type="text" name="judul" value="<?= $artikel['judul']; ?>" 
id="judul" required> 
    </p> 
    <p> 
        <label for="isi">Isi</label> 
        <textarea name="isi" id="isi" cols="50" rows="10"><?= $artikel['isi']; 
?></textarea> 
    </p> 
    <p> 
        <label for="id_kategori">Kategori</label> 
        <select name="id_kategori" id="id_kategori" required> 
            <?php foreach($kategori as $k): ?> 
                <option value="<?= $k['id_kategori']; ?>" <?= 
($artikel['id_kategori'] == $k['id_kategori']) ? 'selected' : ''; ?>><?= 
$k['nama_kategori']; ?></option> 
            <?php endforeach; ?> 
        </select> 
    </p> 
    <p><input type="submit" value="Kirim" class="btn btn-large"></p> 
</form> 
<?= $this->include('template/admin_footer'); ?> 
```

# 8. Testing 
Lakukan uji coba untuk memastikan semua fungsi berjalan dengan baik: 
• Menampilkan daftar artikel dengan nama kategori. 
• Menambah artikel baru dengan memilih kategori. 
• Mengedit artikel dan mengubah kategorinya. 
• Menghapus artikel. 
<br>

# Praktikum 8
<br>

teks

# Praktikum 9
<br>

teks

# Praktikum 10
<br>

teks

# Praktikum 11
<br>

teks

# Improvisasi Fitur Tambahan
<br>

# 1.1 Menambahkan Kolom `kategori` pada Form `Tambah` dan `Edit` Artikel
User bisa memilih `kategori` artikel saat `menambahkan` atau `mengedit` artikel. Saat user melakukan `edit`<br>
atau `tambah` pada artikel lalu memilih `kategori` yang diinginkan database otomatis merubah isi kolom `kategori` yang<br>
ada di dalam nya. Artikel yang baru di`tambah` ataupun di`edit` otomatis dikelompokkan sesuai `kategori`nya
<br>
<br>
Pilih kategori yang diinginkan:
<br>

<img src="/IMAGE/improve1.1.png" img> 
<br>

Maka pada bagian sidebar `Artikel Terkini` Artikel dikelompokkan sesuai  dengan `kategori` yang dipilih. 
<br>

Daftar Semua Artikel:
<img src="/IMAGE/improve1.2.1.png" img> 
<br>

Daftar Artikel Teknologi:
<img src="/IMAGE/improve1.2.2.png" img> 
<br>

Daftar Artikel Umum:
<img src="/IMAGE/improve1.2.3.png" img> 
<br>

📍 File: `app/Views/artikel/form_add.php` dan `form_edit.php`
```bash
<div class="form-group">
    <label for="kategori">Kategori</label>
    <select name="kategori" id="kategori" required>
        <option value="">-- Pilih Kategori --</option>
        <option value="umum">Umum</option>
        <option value="teknologi">Teknologi</option>
    </select>
</div>
```

Di form edit (form_edit.php), disesuaikan agar opsi terpilih default-nya mengikuti data yang sedang diedit:
```bash
<option value="umum" <?= $data['kategori'] === 'umum' ? 'selected' : '' ?>>Umum</option>
<option value="teknologi" <?= $data['kategori'] === 'teknologi' ? 'selected' : '' ?>>Teknologi</option>
```

# 1.2 Menyimpan Data Kategori di Controller
📍 File: `app/Controllers/Artikel.php`<br>
Lalu modifikasi fungsi index agar bisa mem-filter artikel berdasarkan `?kategori=...`:
```bash
public function index()
{
    $model = new ArtikelModel();
    $kategori = $this->request->getGet('kategori');

    if ($kategori) {
        $artikel = $model->where('kategori', $kategori)->paginate(5);
        $title = 'Daftar Artikel ' . ucfirst($kategori);
    } else {
        $artikel = $model->paginate(5);
        $title = 'Daftar Artikel';
    }

    return view('artikel/index', [
        'artikel' => $artikel,
        'title'   => $title,
        'pager'   => $model->pager,
        'kategori' => $kategori
    ]);
}
```
<br>

# 1.3 Menambahkan Field `kategori` di Model
📍 File: `app/Models/ArtikelModel.php`<br>
Tambahkan `kategori` ke dalam `$allowedFields`, agar bisa diproses oleh model:
```bash
protected $allowedFields = ['judul', 'isi', 'slug', 'gambar', 'kategori'];
```
Tanpa ini, CodeIgniter akan mengabaikan field kategori meskipun dikirim oleh form.
<br>

# 1.4 Menampilkan Kategori di Sidebar
📍 File: `app/Views/components/artikel_terkini.php`
```bash
<div class="widget-box">
    <h3 class="title">Artikel Terkini</h3>
    <ul>
        <?php foreach ($kategoriList as $row): ?>
            <li>
                <a href="<?= base_url('/artikel?kategori=' . urlencode($row['kategori'])); ?>">
                    Artikel <?= ucfirst($row['kategori']); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
```
<br>

# 1.5 Memperbaiki Tampilan Judul Halaman
File: `app/Views/artikel/index.php`<br>
Gunakan variabel `$title` agar judul halaman berubah tergantung kategori:
```bash
<h2 class="sub-judul"><?= $title; ?></h2>
```
<br>

Tambahkan `pagination` yang tetap mempertahankan kategori saat berpindah halaman:
```bash
<div class="pagination">
    <?= $pager->only(['kategori'])->links(); ?>
</div>
```





