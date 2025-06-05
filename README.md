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

# 1.1 Install codeigniter

Link download: https://codeigniter.com/download

<img src="/IMAGE/gambar1.png" img>

# 1.2 Menjalankan CLI
<img src="/IMAGE/picture2.png" img>

# 1.3 Mengaktifkan Mode Debugging
<img src="/IMAGE/debug.png" img>
Jika Error Tampilannya Akan Seperti Berikut:
<img src="/IMAGE/error.png" img>

# 1.4 Routing dan Controller
<img src="/IMAGE/routebaru.png" img>
<img src="/IMAGE/routebaru1.png" img>
```
Ketika diakses akan mucul tampilan error 404 file not found, itu artinya file/page tersebut tidak
ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu Controller yang
sesuai dengan routing yang dibuat yaitu Controller Page.
```

# 1.5 Membuat Controller
<img src="/IMAGE/controller1.png" img>
<img src="/IMAGE/controller2.png" img>

# 1.6 Penambahan Auto Routing
<img src="/IMAGE/autoroute.png" img>

# 1.7 Penambahan Method Baru
<img src="/IMAGE/methodbaru.png" img>

# 1.8 Tampilan Autoroute
<img src="/IMAGE/tampilanautoroute.png" img>

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





