<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'judul', 'isi', 'slug', 'gambar', 'status',
        'created_at', 'id_kategori' // Hapus 'kategori'
    ];

    public function getArtikelDenganKategori($paginate = false, $slugKategori = null)
    {
    $this->select('artikel.*, kategori.nama_kategori, kategori.slug_kategori');
    $this->join('kategori', 'kategori.id_kategori = artikel.id_kategori', 'left');

    if ($slugKategori) {
        $this->where('kategori.slug_kategori', $slugKategori);} // INI YANG BENAR
    

    return $paginate ? $this->paginate(5) : $this->findAll();
    }

}