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
}```
<br>
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
<img src="/IMAGE/1.21.png" img><br>
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

2. Selesaikan programnya sesuai Langkah-langkah yang ada. Anda boleh melakukan 
improvisasi.<br>

3. Apa manfaat utama dari penggunaan `View Layout` dalam pengembangan aplikasi?<br>
   **Jawab:** Struktur layout (header, footer, sidebar) cukup ditulis sekali,<br>
   Halaman hanya fokus pada kontennya,<br>
   Memudahkan perawatan dan pengembangan desain antarmuka.<br>

4. Jelaskan perbedaan antara `View Cell` dan `View` biasa.<br>
   **Jawab:**
   | View Biasa                                     | View Cell                                                                                     |
   | ---------------------------------------------- | --------------------------------------------------------------------------------------------- |
   | Digunakan untuk menampilkan data utama halaman | Digunakan untuk menampilkan komponen kecil yang bisa dipakai ulang (widget/sidebar)           |
   | Dipanggil langsung dari controller             | Dipanggil dari view menggunakan `view_cell()`                                                 |
   | Kurang modular jika digunakan berulang-ulang   | Sangat cocok untuk komponen dinamis & modular seperti "Artikel Terkini", "Popular Posts", dsb |
<br>

5. Ubah `View Cell` agar hanya menampilkan post dengan kategori tertentu.<br>




# Praktikum 4

# Praktikum 5

# Praktikum 6

# Praktikum 7

# Praktikum 8

# Praktikum 9





