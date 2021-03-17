<?php

namespace App\Controllers;

use App\Models\M_materi;

class Physics extends Science 
{
    private $course = 'Physics';
    private $mapel = 'physics';
    private $id = '2';

    public function index(){
        return redirect()->to('/science/physics');
    }
    public function chapter1(){
        $model = new M_materi();
        $id_materi = 6;
        $data=[
            'id_pengajar' => $this->getIdPengajar($this->id),
            'id_mapel' => $this->id,
            'id_materi' => $id_materi,
            'course' => $this->course,
            'chapter' => 'Chapter 1',
            'num' => 1,
            'prev' => '/',
            'materi' => (string)$model->getMateri(6)->judul,
            'isi' => (string)$model->getMateri(6)->konten,
            'next' => '/'.$this->mapel.'/chapter2',
        ];
        return view('Page/Content',$data);
    }

    public function chapter2(){
        $model = new M_materi();
        $id_materi = 7;
        $data=[
            'id_pengajar' => $this->getIdPengajar($this->id),
            'id_mapel' => $this->id,
            'id_materi' => $id_materi,
            'course' => $this->course,
            'chapter' => 'Chapter 2',
            'num' => 2,
            'prev' => '/'.$this->mapel.'/chapter1',
            'materi' => (string)$model->getMateri(7)->judul,
            'isi' => (string)$model->getMateri(7)->konten,
            'next' => '/'.$this->mapel.'/chapter3',
        ];
        return view('Page/Content',$data);
    }

    public function chapter3(){
        $model = new M_materi();
        $id_materi = 8;
        $data=[
            'id_pengajar' => $this->getIdPengajar($this->id),
            'id_mapel' => $this->id,
            'id_materi' => $id_materi,
            'course' => $this->course,
            'chapter' => 'Chapter 3',
            'num' => 3,
            'prev' => '/'.$this->mapel.'/chapter2',
            'materi' => (string)$model->getMateri(8)->judul,
            'isi' => (string)$model->getMateri(8)->konten,
            'next' => '/'.$this->mapel.'/chapter4',
        ];
        return view('Page/Content',$data);
    }

    public function chapter4(){
        $model = new M_materi();
        $id_materi = 9;
        $data=[
            'id_pengajar' => $this->getIdPengajar($this->id),
            'id_mapel' => $this->id,
            'id_materi' => $id_materi,
            'course' => $this->course,
            'chapter' => 'Chapter 4',
            'num' => 4,
            'prev' => '/'.$this->mapel.'/chapter3',
            'materi' => (string)$model->getMateri(9)->judul,
            'isi' => (string)$model->getMateri(9)->konten,
            'next' => '/'.$this->mapel.'/chapter5',
        ];
        return view('Page/Content',$data);
    }

    public function chapter5(){
        $model = new M_materi();
        $id_materi = 10;
        $data=[
            'id_pengajar' => $this->getIdPengajar($this->id),
            'id_mapel' => $this->id,
            'id_materi' => $id_materi,
            'course' => $this->course,
            'num' => 5,
            'prev' => '/'.$this->mapel.'/chapter4',
            'materi' => (string)$model->getMateri(10)->judul,
            'isi' => (string)$model->getMateri(10)->konten,
            'next' => '/'.$this->mapel.'/midtest',
        ];
        return view('Page/Content',$data);
    }

    public function midTest(){
        $score = $this->getMidTest($this->id);

        $data=[
            'title' => $this->course,
            'mapel' => $this->mapel,
            'id' => $this->id,
            'score' => $score,
        ];

        $graded = $this->isGraded($this->id);

        if($graded){
            return view('Page/midTest_score', $data);
        }

        return view('Page/midTest', $data);
    }
}