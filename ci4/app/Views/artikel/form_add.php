<?= $this->include('template/admin_header'); ?> 

<div class="form-container">
    <h2 class="form-title-inside"><?= $title; ?></h2>

    <!-- ✅ Tambahkan pesan error validasi -->
    <?php if (session()->has('validation')): ?>
        <div class="alert alert-danger">
            <?= session()->get('validation')->listErrors(); ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('admin/artikel/add'); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="judul">Judul Artikel</label>
            <input type="text" name="judul" id="judul" value="<?= old('judul'); ?>" required>
        </div>

        <div class="form-group">
            <label for="isi">Isi Artikel</label>
            <textarea name="isi" id="isi" rows="8" required><?= old('isi'); ?></textarea>
        </div>

        <div class="form-group">
            <label for="id_kategori">Kategori</label>
            <select name="id_kategori" id="id_kategori" required>
                <option value=""> Pilih Kategori </option>
                <?php foreach ($kategori as $k): ?>
                    <option value="<?= $k['id_kategori']; ?>">
                    <?= ucfirst($k['nama_kategori']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" id="gambar">
        </div>

        <button type="submit" class="btn-primary">Tambah</button>
    </form>
</div>

<?= $this->include('template/admin_footer'); ?>