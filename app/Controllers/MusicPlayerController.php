<?php
// app/Controllers/MusicPlayerController.php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\MusicModel;

class MusicPlayerController extends BaseController
{
    
    public function Music()
    {
        $main = new MusicModel();
        $data['Music'] = $main->findAll();
        $data['symphony'] = [];
        return view('Music', $data);
    }

    public function playMusic()
    {
       $Upload = new MusicModel();
       $data['Music'] = $Upload->findAll();
        $data['symphony'] = [];
        return view('playlist');
    }

}

