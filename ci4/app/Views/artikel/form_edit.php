<?= $this->include('template/admin_header'); ?> 

<div class="form-container">
    <h2 class="form-title-inside"><?= $title; ?></h2>

    <!-- ✅ Tambahkan pesan sukses -->
    <?php if (session()->has('success')): ?>
        <div class="alert alert-success">
            <?= session()->get('success'); ?>
        </div>
    <?php endif; ?>

    <!-- ✅ Tambahkan pesan error validasi -->
    <?php if (isset($validation)): ?>
        <div class="alert alert-danger">
            <?= $validation->listErrors(); ?>
        </div>
    <?php endif; ?>


    <form action="<?= base_url('admin/artikel/edit/' . $data['id']); ?>" method="post">
        <div class="form-group">
            <label for="judul">Judul Artikel</label>
            <input type="text" name="judul" id="judul" value="<?= esc($data['judul']); ?>" required>
        </div>

        <div class="form-group">
            <label for="isi">Isi Artikel</label>
            <textarea name="isi" id="isi" rows="8" required><?= esc($data['isi']); ?></textarea>
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

            <!-- ✅ Hanya gunakan dropdown id_kategori -->
        </div>

        <button type="submit" class="btn-primary">Update</button>
    </form>
</div>

<?= $this->include('template/admin_footer'); ?>