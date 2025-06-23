<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<h2 class="sub-judul"><?= $title; ?></h2>
<hr>


<?php foreach ($artikel as $row): ?>
    <div class="artikel-box">
        <h2><?= esc($row['judul']) ?></h2>
        <p class="kategori-label">
        Kategori: <?= esc($row['nama_kategori']); ?>
        </p>
             <p><?= esc(substr($row['isi'], 0, 120)) ?>...</p>
        <a href="<?= base_url('/artikel/' . $row['slug']) ?>">Baca selengkapnya</a>
    </div>
<?php endforeach; ?>

<div class="pager-container">
    <?= $pager->links(); ?>
</div>


<?= $this->endSection() ?>
