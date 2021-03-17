<?php

namespace App\Controllers;

use App\Models\M_mapel;
use App\Models\M_belajar;
use App\Models\M_materi;
use CodeIgniter\Controller;

class Subject extends Controller
{
    public function index()
    {
        return view('Page/subject_user');
    }
    public function science()
    {
        return view('Page/sciencePage');
    }
    public function social()
    {
        return view('Page/socialPage');
    }
    public function language()
    {
        return view('Page/languagePage');
    }
    public function enrolled($data = [])
    {
        $level = session()->get('level');
        if($level == 2){
            return true;
        }

        $userdata = new M_belajar();
        $table = 'belajar';
        $id_siswa = session()->get('id');
        $id_mapel = $data['id'];
        $row = $userdata->get_data_belajar($id_siswa, $id_mapel, $table);
        if ($row == null) {
            return false;
        }
        return true;
    }

    public function enroll(){
        $id_siswa = session()->get('id');
        $id_mapel = $this->request->getPost('id_mapel');
        $page = $this->request->getPost('page');
        $userdata = new M_belajar();
        $data = array(
            'id_siswa' => $id_siswa,
            'id_mapel' => $id_mapel,
        );

        $userdata->saveBelajar($data);

        return redirect()->to($page);
    }

    public function unenroll(){
        $id_siswa = session()->get('id');
        $id_mapel = $this->request->getPost('id_mapel');
        $subject = $this->request->getPost('subject');
        $userdata = new M_belajar();

        $userdata->deleteBelajar($id_siswa, $id_mapel);
        return redirect()->to($subject);
    }

    public function getPengajar($id_mapel){
        $mapel = new M_mapel;
        $pengajar = $mapel->get_data_pengajar($id_mapel);

        return $pengajar;
    }

    public function getIdPengajar($id_mapel){
        $mapel = new M_mapel;
        $id_pengajar = $mapel->get_id_pengajar($id_mapel);

        return $id_pengajar;
    }

    public function isGraded($id_mapel)
    {
        $level = session()->get('level');
        if($level == 2){
            return true;
        }
        $id_siswa = session()->get('id');
        $userdata = new M_belajar();
        $table = 'belajar';
        $row = $userdata->get_data_belajar($id_siswa, $id_mapel, $table);
        if ($row == null) {
            return false;
        }
        if ($row->mid_test == null) {
            return false;
        }
        return true;
    }

    public function getMidTest($id_mapel)
    {
        $level = session()->get('level');
        if($level == 2){
            return true;
        }
        $id_siswa = session()->get('id');
        $userdata = new M_belajar();
        $table = 'belajar';
        $row = $userdata->get_data_belajar($id_siswa, $id_mapel, $table);
        return $row->mid_test;
    }

    public function editChapter()
    {
        $model = new M_materi();
        $model2 = new M_mapel();
        $id_mapel = $this->request->getPost('id_mapel');
        $nama_mapel = $model2->getMapel($id_mapel)->nama;
        $chapter = $this->request->getPost('chapter');
        $judul = $this->request->getPost('judul');
        $konten = $this->request->getPost('konten');
        $data = [
            'judul' => $judul,
            'konten' => $konten,
        ];
        $model->update_Materi($data, $id_mapel, $chapter);
        
        return redirect()->to("/$nama_mapel/chapter$chapter");
    }
}
