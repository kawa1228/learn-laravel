<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index (Request $request) {
        // 5項目ずつレコードを取り出す
        // $items = DB::table('people')->simplePaginate(5);
        $items = DB::select('select * from people');
        return view('hello.index', ['items' => $items]);
    }

    public function rest (Request $request) {
        return view('hello.rest');
    }

    public function ses_get (Request $request) {
        $sesdata = $request->session()->get('msg');
        return view('hello.session', ['session_data' => $sesdata]);
    }

    public function ses_put (Request $request) {
        $msg = $request->input;
        $request->session()->put('msg', $msg);
        return redirect('hello/session');
    }

    public function sample ($id='noname', $pass='unknown') {
        $data = ['msg'=>'メッセージ', 'id'=>$id, 'pass'=>$pass];
        return view('hello.sample', $data);
    }
}
