<?php

namespace App\Http\Controllers;

use App\MyClass\MyServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Facades\MyService;
use App\Jobs\Myjob;

// use App\MyClass\MyService;

class HelloController extends Controller
{
    private $faname;

    public function __construct()
    {
        $this->fname = 'sample.txt';
    }

    public function index(MyServiceInterface $myservice , int $id = -1)
    {
    
        // $myservice = app()->make('App\MyClass\MyService');
        Myjob::dispatch();
        MyService::setId($id);
        $data = [
            'msg' => MyService::say(),
            'data' => MyService::alldata()
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
