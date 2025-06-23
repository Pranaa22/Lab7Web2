<?php 
 
namespace App\Models; 
 
use CodeIgniter\Model; 
 
class KategoriModel extends Model 
{ 
   protected $table = 'kategori'; 
   protected $primaryKey = 'id_kategori'; 
   protected $useAutoIncrement = true; 
   protected $allowedFields = ['judul', 'isi', 'status', 'slug', 'gambar', 'id_kategori']; 
   protected $returnType = 'array';
 
   public function getArtikelDenganKategori() 
   { 
      return $this->db->table('artikel') 
                  ->select('artikel.*, kategori.nama_kategori') 
                  ->join('kategori', 'kategori.id_kategori = artikel.id_kategori')
                  ->get() 
                  ->getResultArray(); 
   } 
}