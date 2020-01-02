<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index (Request $request) {
        $sort = $request->sort;
        if (is_null($sort)) {
            $sort = 'id';
        }
        // 5項目ずつレコードを取り出す
        // DBクラスを使った場合
        $items = DB::table('people')->orderBy($sort, 'asc')->simplePaginate(5);
        // Personモデルを使った場合
        // $items = Person::simplePaginate(5);
        // $items = DB::select('select * from people');
        $param = ['items' => $items, 'sort' => $sort];
        return view('hello.index', $param);
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
