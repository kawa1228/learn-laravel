<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index ($id='noname', $pass='unknown') {
        $data = ['msg'=>'メッセージ', 'id'=>$id, 'pass'=>$pass];
        return view('hello.index', $data);
    }
}
