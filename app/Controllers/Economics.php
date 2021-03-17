<?php

namespace App\Controllers;

use App\Models\M_materi;

class Economics extends Social
{
    private $course = 'Economics';
    private $mapel = 'economics';
    private $id = 5;
    
    public function index(){
        return redirect()->to('/social/economics');
    }
    public function chapter1(){
        $model = new M_materi();
        $id_materi = 21;
        $data=[
            'id_pengajar' => $this->getIdPengajar($this->id),
            'id_mapel' => $this->id,
            'id_materi' => $id_materi,
            'course' => $this->course,
            'chapter' => 'Chapter 1',
            'num' => 1,
            'prev' => '/',
            'materi' => (string)$model->getMateri(21)->judul,
            'isi' => (string)$model->getMateri(21)->konten,
            'next' => '/'.$this->mapel.'/chapter2',
        ];
        return view('Page/Content',$data);
    }

    public function chapter2(){
        $model = new M_materi();
        $id_materi = 22;
        $data=[
            'id_pengajar' => $this->getIdPengajar($this->id),
            'id_mapel' => $this->id,
            'id_materi' => $id_materi,
            'course' => $this->course,
            'chapter' => 'Chapter 2',
            'num' => 2,
            'prev' => '/'.$this->mapel.'/chapter1',
            'materi' => (string)$model->getMateri(22)->judul,
            'isi' => (string)$model->getMateri(22)->konten,
            'next' => '/'.$this->mapel.'/chapter3',
        ];
        return view('Page/Content',$data);
    }

    public function chapter3(){
        $model = new M_materi();
        $id_materi = 23;
        $data=[
            'id_pengajar' => $this->getIdPengajar($this->id),
            'id_mapel' => $this->id,
            'id_materi' => $id_materi,
            'course' => $this->course,
            'chapter' => 'Chapter 3',
            'num' => 3,
            'prev' => '/'.$this->mapel.'/chapter2',
            'materi' => (string)$model->getMateri(23)->judul,
            'isi' => (string)$model->getMateri(23)->konten,
            'next' => '/'.$this->mapel.'/chapter4',
        ];
        return view('Page/Content',$data);
    }

    public function chapter4(){
        $model = new M_materi();
        $id_materi = 24;
        $data=[
            'id_pengajar' => $this->getIdPengajar($this->id),
            'id_mapel' => $this->id,
            'id_materi' => $id_materi,
            'course' => $this->course,
            'chapter' => 'Chapter 4',
            'num' => 4,
            'prev' => '/'.$this->mapel.'/chapter3',
            'materi' => (string)$model->getMateri(24)->judul,
            'isi' => (string)$model->getMateri(24)->konten,
            'next' => '/'.$this->mapel.'/chapter5',
        ];
        return view('Page/Content',$data);
    }

    public function chapter5(){
        $model = new M_materi();    
        $id_materi = 25;
        $data=[
            'id_pengajar' => $this->getIdPengajar($this->id),
            'id_mapel' => $this->id,
            'id_materi' => $id_materi,
            'course' => $this->course,
            'chapter' => 'Chapter 5',
            'num' => 5,
            'prev' => '/'.$this->mapel.'/chapter4',
            'materi' => (string)$model->getMateri(25)->judul,
            'isi' => (string)$model->getMateri(25)->konten,
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