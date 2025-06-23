<div class="widget-box">
   <h3 class="title">Artikel Terkini</h3>
  <ul>
    <?php foreach ($kategori as $k): ?>
      <li>
        <a href="<?= base_url('kategori/' . $k['slug_kategori']); ?>">
          Artikel <?= ucfirst($k['nama_kategori']); ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
