<?php

namespace App\Controllers;

use App\Models\M_materi;
use CodeIgniter\Controller;

class Materi extends Controller
{
    public function createMateri(){
        $model = new M_materi();
        $data = array(
            'id' => $this->request->getPost('id'),
            'judul' => $this->request->getPost('judul'),
            'konten' => $this->request->getPost('konten'),
            'id_mapel' => $this->request->getPost('id_mapel')
        );
        $create = $model->saveMateri($data);
        if ($create) {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('info', 'Materi berhasil dibuat!');
            return redirect()->to('/');
        }
    }   

    public function editMateri(){
        $model = new M_materi();
        $id = $this->request->getPost('id');
        $data = array(
            'id' => $this->request->getPost('id'),
            'judul' => $this->request->getPost('judul'),
            'konten' => $this->request->getPost('konten'),
            'id_mapel' => $this->request->getPost('id_mapel')
        );
        $edit=$model->updateMateri($data,$id);
        if ($edit) {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('info', 'Materi berhasil diedit!');
            return redirect()->to('/');
        }
    }
}