<?php

namespace App\Controllers;
use App\Models\M_materi;

class Pages extends BaseController
{
    public function index()
    {
        return view('Page/User_homepage');
    }
    public function signin()
    {
        return view('Page/signin');
    }
    public function signup()
    {
        return view('Page/signin');
    }
    public function about()
    {
        return view('Page/about');
    }
    public function subject()
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
        return view('Page/LanguagePage');
    }
    public function dashboard()
    {
        return view('Page/Homepage');
    }
    public function edit()
    {
        return view('Page/profileEdit');
    }
    public function news()
    {
        $data=[
            'title1' => 'Welcome!',
            'content1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.',
            'title2' => 'Learn today!',
            'content2' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.',
            'title3' => 'Explore new skill!',
            'content3' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.',
            'title4' => 'Take a tour today!',
            'content4' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.',
            'title5' => 'Bright future is ahead of you!',
            'content5' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.',
        ];
        return view('Page/News', $data);
    }
    public function editChapter($id_mapel, $chapter)
    {
        $model = new M_materi();
        $data=[
            'id_mapel' => $id_mapel,
            'chapter' => $chapter,
            'judul' => $model->get_Materi($id_mapel, $chapter)->judul,
            'konten'=> $model->get_Materi($id_mapel, $chapter)->konten,
        ];

        return view('Page/editChapter', $data);
    }
}
