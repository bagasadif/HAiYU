<?php

namespace App\Controllers;

use App\Models\M_materi;

class History extends Social
{
    private $course = 'History';
    private $mapel = 'history';
    private $id = 6;
    
    public function index(){
        return redirect()->to('/social/history');
    }
    public function chapter1(){
        $model = new M_materi();
        $id_materi = 26;
        $data=[
            'id_pengajar' => $this->getIdPengajar($this->id),
            'id_mapel' => $this->id,
            'id_materi' => $id_materi,
            'course' => $this->course,
            'chapter' => 'Chapter 1',
            'num' => 1,
            'materi' => (string)$model->getMateri(26)->judul,
            'isi' => (string)$model->getMateri(26)->konten,
            'next' => '/'.$this->mapel.'/chapter2',
        ];
        return view('Page/Content',$data);        
    }

    public function chapter2(){
        $model = new M_materi();
        $id_materi = 27;
        $data=[
            'id_pengajar' => $this->getIdPengajar($this->id),
            'id_mapel' => $this->id,
            'id_materi' => $id_materi,
            'course' => $this->course,
            'chapter' => 'Chapter 2',
            'num' => 2,
            'materi' => (string)$model->getMateri(27)->judul,
            'isi' => (string)$model->getMateri(27)->konten,
            'next' => '/'.$this->mapel.'/chapter3',
        ];
        return view('Page/Content',$data);
    }

    public function chapter3(){
        $model = new M_materi();
        $id_materi = 28;
        $data=[
            'id_pengajar' => $this->getIdPengajar($this->id),
            'id_mapel' => $this->id,
            'id_materi' => $id_materi,
            'course' => $this->course,
            'chapter' => 'Chapter 3',
            'num' => 3,
            'materi' => (string)$model->getMateri(28)->judul,
            'isi' => (string)$model->getMateri(28)->konten,
            'next' => '/'.$this->mapel.'/chapter4',
        ];
        return view('Page/Content',$data);
    }

    public function chapter4(){
        $model = new M_materi();
        $id_materi = 29;
        $data=[
            'id_pengajar' => $this->getIdPengajar($this->id),
            'id_mapel' => $this->id,
            'id_materi' => $id_materi,
            'course' => $this->course,
            'chapter' => 'Chapter 4',
            'num' => 4,
            'materi' => (string)$model->getMateri(29)->judul,
            'isi' => (string)$model->getMateri(29)->konten,
            'next' => '/'.$this->mapel.'/chapter5',
        ];
        return view('Page/Content',$data);
    }

    public function chapter5(){
        $model = new M_materi();
        $id_materi = 30;
        $data=[
            'id_pengajar' => $this->getIdPengajar($this->id),
            'id_mapel' => $this->id,
            'id_materi' => $id_materi,
            'course' => $this->course,
            'chapter' => 'Chapter 5',
            'num' => 5,
            'materi' => (string)$model->getMateri(30)->judul,
            'isi' => (string)$model->getMateri(30)->konten,
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