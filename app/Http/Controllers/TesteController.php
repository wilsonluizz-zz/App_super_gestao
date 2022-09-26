<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    // public function teste( int $p1, int $p2){
    //     return view('teste', ['p1' => $p1, 'p2' => $p2]);
    // passagem de parâmetros usando array associativo}

    // public function teste( int $p1, int  $p2){
    //     return view('teste', compact('p1', 'p2'));
    //  passagem de parametros com compact, passamos o nome e não a variável}

    public function teste(int $p1, int $p2){
        return view('teste')->with('p1', $p1,)->with('p2', $p2);
    }
}
