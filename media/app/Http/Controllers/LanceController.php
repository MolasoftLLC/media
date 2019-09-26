<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lancer;
use SebastianBergmann\Environment\Console;

class LanceController extends Controller
{
    public function index()
    {
        
        $lancer = Lancer::all()->take(6);
        return $lancer;
    }

    public function lancer($id)
    {
        // $lancer = Lancer::all()->take(1);
        $person = Lancer::where('id',$id)->get();
        return $person;
    }

    public function search($tag)
    {
        $tags = Lancer::where('tags',$tag)->get();
        return $tags;
    }

    public function all()
    {
        
        $lancer = Lancer::all()->take(12);
        return $lancer;
    }


    public function speaker()
    {
        // $lancer = Lancer::all()->take(1);
        // $lancer_it = Lancer::where('occupation','it')->get();
        $speaker = Lancer::all()->take(3);
        return $speaker;
    }
}
