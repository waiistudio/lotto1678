<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HuayController extends Controller
{
    public function addHuay()
    {
        $header = 'เพิ่มหวย';
        
        return \view('huays.add', \compact('header'));
    }
}
