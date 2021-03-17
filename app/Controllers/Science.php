<?php

namespace App\Controllers;

use App\Models\M_mapel;
use App\Models\M_materi;

class Science extends Subject
{
    protected $subject = 'science';

    public function index()
    {
        return view('Page/sciencePage');
    }

    public function math()
    {
        $model = new M_materi();
        $id = 1;
        $pengajar = $this->getPengajar($id);
        $data = [
            'subject' => $this->subject,
            'id' => $id,
            'title' => 'Math',
            'mapel' => 'math',
            'chapter1' => $model->get_Materi($id, 1)->judul,
            'chapter2' => $model->get_Materi($id, 2)->judul,
            'chapter3' => $model->get_Materi($id, 3)->judul,
            'chapter4' => $model->get_Materi($id, 4)->judul,
            'chapter5' => $model->get_Materi($id, 5)->judul,
            'nama_pengajar' => $pengajar->nama_pengajar,
            'telepon_pengajar' => $pengajar->telepon,
            'graded' => $this->isGraded($id),
        ];

        $enrolled = $this->enrolled($data);

        if ($enrolled) {
            return view('Page/mapel', $data);
        }

        return view('Page/enroll_sciencePage', $data);
    }

    public function physics()
    {
        $model = new M_materi();
        $id = 2;
        $pengajar = $this->getPengajar($id);
        $data = [
            'subject' => $this->subject,
            'id' => $id,
            'title' => 'Physics',
            'mapel' => 'physics',
            'chapter1' => $model->get_Materi($id, 1)->judul,
            'chapter2' => $model->get_Materi($id, 2)->judul,
            'chapter3' => $model->get_Materi($id, 3)->judul,
            'chapter4' => $model->get_Materi($id, 4)->judul,
            'chapter5' => $model->get_Materi($id, 5)->judul,
            'nama_pengajar' => $pengajar->nama_pengajar,
            'telepon_pengajar' => $pengajar->telepon,
            'graded' => $this->isGraded($id),
        ];
        $enrolled = $this->enrolled($data);

        if ($enrolled) {
            return view('Page/mapel', $data);
        }

        return view('Page/enroll_sciencePage', $data);
    }

    public function chemistry()
    {
        $model = new M_materi();
        $id = 3;
        $pengajar = $this->getPengajar($id);
        $data = [
            'subject' => $this->subject,
            'id' => $id,
            'title' => 'Chemistry',
            'mapel' => 'chemistry',
            'chapter1' => $model->get_Materi($id, 1)->judul,
            'chapter2' => $model->get_Materi($id, 2)->judul,
            'chapter3' => $model->get_Materi($id, 3)->judul,
            'chapter4' => $model->get_Materi($id, 4)->judul,
            'chapter5' => $model->get_Materi($id, 5)->judul,
            'nama_pengajar' => $pengajar->nama_pengajar,
            'telepon_pengajar' => $pengajar->telepon,
            'graded' => $this->isGraded($id),
        ];
        $enrolled = $this->enrolled($data);

        if ($enrolled) {
            return view('Page/mapel', $data);
        }

        return view('Page/enroll_sciencePage', $data);
    }

    public function biology()
    {
        $model = new M_materi();
        $id = 4;
        $pengajar = $this->getPengajar($id);
        $data = [
            'subject' => $this->subject,
            'id' => $id,
            'title' => 'Biology',
            'mapel' => 'biology',
            'chapter1' => $model->get_Materi($id, 1)->judul,
            'chapter2' => $model->get_Materi($id, 2)->judul,
            'chapter3' => $model->get_Materi($id, 3)->judul,
            'chapter4' => $model->get_Materi($id, 4)->judul,
            'chapter5' => $model->get_Materi($id, 5)->judul,
            'nama_pengajar' => $pengajar->nama_pengajar,
            'telepon_pengajar' => $pengajar->telepon,
            'graded' => $this->isGraded($id),
        ];
        $enrolled = $this->enrolled($data);

        if ($enrolled) {
            return view('Page/mapel', $data);
        }

        return view('Page/enroll_sciencePage', $data);
    }
}
