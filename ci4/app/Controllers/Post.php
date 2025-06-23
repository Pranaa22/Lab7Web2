<?php 
  
namespace App\Controllers; 
  
use CodeIgniter\RESTful\ResourceController; 
use CodeIgniter\API\ResponseTrait; 
use App\Models\ArtikelModel; 
  
class Post extends ResourceController 
{ 
    use ResponseTrait; 
    
    // all users 
    public function index() 
    { 
        $model = new ArtikelModel(); 
        $data['artikel'] = $model->orderBy('id', 'DESC')->findAll(); 
        return $this->respond($data); 
    } 

    // create 
    public function create()
    {
        $json = $this->request->getJSON();
        if ($json) {
            $data = [
                'judul' => $json->judul,
                'isi'   => $json->isi,
                'status' => $json->status ?? 'draft' // ✅ tambahkan status, default draft
            ];

            $model = new \App\Models\ArtikelModel();
            if ($model->insert($data)) {
                return $this->respondCreated(['status' => 'success', 'message' => 'Data berhasil ditambahkan']);
            } else {
                return $this->fail('Gagal menyimpan data', 400);
            }
        }

        return $this->fail('Data tidak valid', 400);
    }


    // single user 
    public function show($id = null) 
    { 
         $model = new ArtikelModel(); 
        $data = $model->where('id', $id)->first(); 
        if ($data) { 
            return $this->respond($data); 
        } else { 
            return $this->failNotFound('Data tidak ditemukan.'); 
        } 
    } 

    // update 
    public function update($id = null)
    {
        $json = $this->request->getJSON();
        if ($json && $id) {
            $data = [
                'judul' => $json->judul,
                'isi'   => $json->isi,
                'status' => $json->status, // ✅ tambahkan status juga di update
            ];

            $model = new \App\Models\ArtikelModel();
            if ($model->update($id, $data)) {
                return $this->respond(['status' => 'success', 'message' => 'Data berhasil diupdate']);
            } else {
                return $this->fail('Gagal mengupdate data', 400);
            }
        }

        return $this->fail('Data tidak valid atau ID tidak ditemukan', 400);
    }


    // delete 
    public function delete($id = null) 
    { 
        $model = new ArtikelModel(); 
        $data = $model->where('id', $id)->delete($id); 
        if ($data) { 
            $model->delete($id); 
            $response = [ 
                'status'   => 200, 
                'error'    => null, 
                'messages' => [ 
                    'success' => 'Data artikel berhasil dihapus.' 
                ] 
            ]; 
            return $this->respondDeleted($response); 
        } else { 
            return $this->failNotFound('Data tidak ditemukan.'); 
        } 
    } 
}