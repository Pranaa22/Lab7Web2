<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>

<!-- Toolbar Pencarian dan Tambah -->
<div class="container">
  <div class="toolbar" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
    <form id="search-form" style="display: flex; gap: 10px;">
      <input type="text" name="q" id="search-box" class="form-control" placeholder="Cari judul artikel" />
      
      <select name="kategori_id" id="category-filter" class="form-control">
        <option value="">Semua Kategori</option>
        <?php foreach ($kategori as $k): ?>
          <option value="<?= $k['id_kategori']; ?>" <?= ($kategori_id == $k['id_kategori']) ? 'selected' : ''; ?>>
            <?= $k['nama_kategori']; ?>
          </option>
        <?php endforeach; ?>
      </select>

      <button type="submit" class="btn btn-primary">Cari</button>
    </form>

    <a href="<?= base_url('admin/artikel/add') ?>" class="btn btn-primary">+ Artikel (AJAX)</a>
  </div>
</div>

<!-- Loader -->
<div id="loading" style="display: none; text-align: center; margin-top: 20px;">
  <div class="spinner"></div>
  <p>Mencari artikel...</p>
</div>

<!-- Tabel Artikel akan dirender di sini -->
<div id="article-container"></div>

<!-- Pagination akan dirender di sini -->
<div id="pagination-container" class="pagination-container" style="margin-top: 20px;"></div>

<!-- jQuery -->
<script src="<?= base_url('assets/js/jquery-3.6.0.min.js'); ?>"></script>
<script>
  $(document).ready(function () {
    const articleContainer = $('#article-container');
    const paginationContainer = $('#pagination-container');
    const searchForm = $('#search-form');
    const searchBox = $('#search-box');
    const categoryFilter = $('#category-filter');
    const loading = $('#loading');

    const fetchData = (url, showLoading = false) => {
      if (showLoading) loading.show();

      $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        success: function (data) {
          renderArticles(data.artikel);
          renderPagination(data.pager, data.q, data.kategori_id);
          if (showLoading) setTimeout(() => loading.hide(), 800);
        },
        error: function () {
          articleContainer.html('<p style="color:red;">Gagal mengambil data.</p>');
          loading.hide();
        }
      });
    };

    const renderArticles = (articles) => {
      let html = '<table class="table">';
      html += '<thead><tr><th>ID</th><th>Judul</th><th>Kategori</th><th>Status</th><th>Aksi</th></tr></thead><tbody>';
      if (articles.length > 0) {
        articles.forEach(article => {
          html += `
            <tr>
              <td>${article.id}</td>
              <td>
                <strong>${article.judul}</strong><br>
                <small>${article.isi.substring(0, 50)}...</small>
              </td>
              <td>${article.nama_kategori}</td>
              <td>${article.status}</td>
              <td>
                <a class="btn btn-sm btn-info" href="/admin/artikel/edit/${article.id}">Ubah</a>
                <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin menghapus data?');" href="/admin/artikel/delete/${article.id}">Hapus</a>
              </td>
            </tr>
          `;
        });
      } else {
        html += '<tr><td colspan="5">Tidak ada data.</td></tr>';
      }
      html += '</tbody></table>';
      articleContainer.html(html);
    };

    const renderPagination = (pager, q, kategori_id) => {
      if (!pager || !pager.links) return;
      let html = '<nav><ul class="pagination">';
      pager.links.forEach(link => {
        const url = link.url ? `${link.url}&q=${q}&kategori_id=${kategori_id}` : '#';
        html += `<li class="page-item ${link.active ? 'active' : ''}">
                    <a class="page-link pagination-link" href="${url}">${link.title}</a>
                 </li>`;
      });
      html += '</ul></nav>';
      paginationContainer.html(html);
    };

    // Saat form cari dikirim
    searchForm.on('submit', function (e) {
      e.preventDefault();
      const q = searchBox.val();
      const kategori_id = categoryFilter.val();
      fetchData(`/admin/artikel?q=${q}&kategori_id=${kategori_id}`, true);
    });

    // Saat ganti kategori
    categoryFilter.on('change', function () {
      searchForm.trigger('submit');
    });

    // Handler pagination diklik
    $(document).on('click', '.pagination-link', function (e) {
      e.preventDefault();
      const href = $(this).attr('href');
      if (href && href !== '#') {
        fetchData(href, true);
      }
    });

    // Load awal
    fetchData('/admin/artikel', false);
  });
</script>

<?= $this->include('template/admin_footer'); ?>
