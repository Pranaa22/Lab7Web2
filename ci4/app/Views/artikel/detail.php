<?= $this->include('template/header'); ?> 

<article class="entry"> 
    <h2><?= esc($artikel['judul']); ?></h2> 

    <!-- Menampilkan nama kategori -->
    <?php if (!empty($artikel['nama_kategori'])): ?>
        <p class="kategori-label">Kategori: <?= esc($artikel['nama_kategori']); ?></p>
    <?php endif; ?>

    <!-- Gambar Artikel -->
    <?php if (!empty($artikel['gambar'])): ?>
        <img src="<?= base_url('/gambar/' . $artikel['gambar']); ?>" alt="<?= esc($artikel['judul']); ?>"> 
    <?php endif; ?>

    <!-- Isi Artikel -->
    <p><?= esc($artikel['isi']); ?></p>
</article> 

<?= $this->include('template/footer'); ?> 
