<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index ($id='noname', $pass='unknown') {
        $data = ['msg'=>'メッセージ', 'id'=>$id, 'pass'=>$pass];
        return view('hello.index', $data);
    }

    public function rest (Request $request) {
        return view('hello.rest');
    }

    public function ses_get (Request $request) {
        $sesdata = $request->session()->get('msg');
        dump($sesdata);
        return view('hello.session', ['session_data' => $sesdata]);
    }

    public function ses_put (Request $request) {
        $msg = $request->input;
        dump($msg);
        $request->session()->put('msg', $msg);
        return redirect('hello/session');
    }
}
