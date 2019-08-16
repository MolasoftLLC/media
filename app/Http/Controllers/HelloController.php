<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HelloController extends Controller
{
    private $faname;

    public function __construct()
    {
        $this->fname = 'sample.txt';
    }

    public function index(Request $request)
    {
        $sample_msg = $this->fname;
        $sample_data = Storage::get($this->fname);
        $data = [
            'msg' => $sample_msg,
            'data' => explode(PHP_EOL,$sample_data)
        ];
        return view('hello.index', $data);
    }

    public function other(Request $request)
    {
        return Storage::download($this->fname); //ダウンロードさせるのめっちゃ便利
    }

    public function upload(Request $request)
    {
        $msg = 'please input';
        $keys =[];
        $values =[];

        if($request->isMethod('post')){
            $form = $request->all();
            $keys = array_keys($form);
            $values = array_values($form);
            Storage::disk('public')->putfile('imgs', $request->file('file')); //sampleimgフォルダにアップロード
        }

        $data = [
            'msg' => $msg,
            'keys' => $keys,
            'values' => $values,
        ];
        return view('hello.index',$data);
    }
}
