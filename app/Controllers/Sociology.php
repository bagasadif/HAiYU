<?php

namespace App\Controllers;

use App\Models\M_materi;

class Sociology extends Social
{
    private $course = 'Sociology';
    private $mapel = 'sociology';
    private $id = 8;
    
    public function index(){
        return redirect()->to('/social/sociology');
    }
    public function chapter1(){
        $model = new M_materi();
        $id_materi = 36;
        $data=[
            'id_pengajar' => $this->getIdPengajar($this->id),
            'id_mapel' => $this->id,
            'id_materi' => $id_materi,
            'course' => $this->course,
            'chapter' => 'Chapter 1',
            'num' => 1,
            'prev' => '/',
            'materi' => (string)$model->getMateri(36)->judul,
            'isi' => (string)$model->getMateri(36)->konten,
            'next' => '/'.$this->mapel.'/chapter2',
        ];
        return view('Page/Content',$data);
    }

    public function chapter2(){
        $model = new M_materi();
        $id_materi = 37;
        $data=[
            'id_pengajar' => $this->getIdPengajar($this->id),
            'id_mapel' => $this->id,
            'id_materi' => $id_materi,
            'course' => $this->course,
            'chapter' => 'Chapter 2',
            'num' => 2,
            'prev' => '/'.$this->mapel.'/chapter1',
            'materi' => (string)$model->getMateri(37)->judul,
            'isi' => (string)$model->getMateri(37)->konten,
            'next' => '/'.$this->mapel.'/chapter3',
        ];
        return view('Page/Content',$data);
    }

    public function chapter3(){
        $model = new M_materi();
        $id_materi = 38;
        $data=[
            'id_pengajar' => $this->getIdPengajar($this->id),
            'id_mapel' => $this->id,
            'id_materi' => $id_materi,
            'course' => $this->course,
            'chapter' => 'Chapter 3',
            'num' => 3,
            'prev' => '/'.$this->mapel.'/chapter2',
            'materi' => (string)$model->getMateri(38)->judul,
            'isi' => (string)$model->getMateri(38)->konten,
            'next' => '/'.$this->mapel.'/chapter4',
        ];
        return view('Page/Content',$data);
    }

    public function chapter4(){
        $model = new M_materi();
        $id_materi = 39;
        $data=[
            'id_pengajar' => $this->getIdPengajar($this->id),
            'id_mapel' => $this->id,
            'id_materi' => $id_materi,
            'course' => $this->course,
            'chapter' => 'Chapter 4',
            'num' => 4,
            'prev' => '/'.$this->mapel.'/chapter3',
            'materi' => (string)$model->getMateri(39)->judul,
            'isi' => (string)$model->getMateri(39)->konten,
            'next' => '/'.$this->mapel.'/chapter5',
        ];
        return view('Page/Content',$data);
    }

    public function chapter5(){
        $model = new M_materi();
        $id_materi = 40;
        $data=[
            'id_pengajar' => $this->getIdPengajar($this->id),
            'id_mapel' => $this->id,
            'id_materi' => $id_materi,
            'course' => $this->course,
            'chapter' => 'Chapter 5',
            'num' => 5,
            'prev' => '/'.$this->mapel.'/chapter4',
            'materi' => (string)$model->getMateri(40)->judul,
            'isi' => (string)$model->getMateri(40)->konten,
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