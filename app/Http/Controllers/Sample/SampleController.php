<?php

namespace App\Http\Controllers\Sample;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'msg' => $request->hello,
        ];
        return view('hello.index',$data);
    }
    public function other(Request $request)
    {
        $data = [
            'msg'=>'S-OTHER',
        ];
        return view('hello.index',$data);
    }
}
