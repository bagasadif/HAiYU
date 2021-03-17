<?php

namespace App\Controllers;

use App\Models\M_materi;

class Language extends Subject
{
    private $subject = 'language';

    public function index()
    {
        return view('Page/LanguagePage');
    }

    public function english()
    {
        $model = new M_materi();
        $id = 9;
        $pengajar = $this->getPengajar($id);
        $data = [
            'subject' => $this->subject,
            'id' => $id,
            'title' => 'English',
            'mapel' => 'english',
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

        return view('Page/enroll_LanguagePage', $data);
    }

    public function indonesian()
    {
        $model = new M_materi();
        $id = 10;
        $pengajar = $this->getPengajar($id);
        $data = [
            'subject' => $this->subject,
            'id' => $id,
            'title' => 'Indonesian',
            'mapel' => 'indonesian',
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

        return view('Page/enroll_LanguagePage', $data);
    }
}
