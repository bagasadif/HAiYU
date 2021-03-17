<?php

namespace App\Controllers;

use App\Models\M_materi;

class Social extends Subject
{
    private $subject = 'social';

    public function index()
    {
        return view('Page/socialPage');
    }

    public function economics()
    {
        $model = new M_materi();
        $id = 5;
        $pengajar = $this->getPengajar($id);
        $data = [
            'subject' => $this->subject,
            'id' => $id,
            'title' => 'Economics',
            'mapel' => 'economics',
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

        return view('Page/enroll_socialPage', $data);
    }

    public function history()
    {
        $model = new M_materi();
        $id = 6;
        $pengajar = $this->getPengajar($id);
        $data = [
            'subject' => $this->subject,
            'id' => $id,
            'title' => 'History',
            'mapel' => 'history',
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

        return view('Page/enroll_socialPage', $data);
    }

    public function geography()
    {
        $model = new M_materi();
        $id = 7;
        $pengajar = $this->getPengajar($id);
        $data = [
            'subject' => $this->subject,
            'id' => $id,
            'title' => 'Geography',
            'mapel' => 'geography',
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

        return view('Page/enroll_socialPage', $data);
    }

    public function sociology()
    {
        $model = new M_materi();
        $id = 8;
        $pengajar = $this->getPengajar($id);
        $data = [
            'subject' => $this->subject,
            'id' => $id,
            'title' => 'Sociology',
            'mapel' => 'sociology',
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

        return view('Page/enroll_socialPage', $data);
    }
}
