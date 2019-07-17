<?php

namespace App\Http\Controllers;

use Request;
use App\Bookserch;

class FormController extends Controller {

  public function index()
    {
        return view('form');
    }

  public function booklist(Request $request){

        $title = Request::get('title');

        if ($title) {
            $item = Bookserch::where('name', 'LIKE', "%$title%")->simplePaginate(2);
        }else{
            $item = Bookserch::select('*')->simplePaginate(2);
            $title='全件表示';
        }
        
        return view('booklist',['items' => $item])->with('title',$title);
  }
}

