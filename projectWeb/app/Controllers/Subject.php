<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function science()
    {
        return view('Page/sciencePage');
    }
    public function social()
    {
        return view('Page/socialPage');
    }
}