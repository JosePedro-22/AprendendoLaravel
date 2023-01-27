<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    //
    public function carrinhoList(){
        $items = \Cart::getContent();
        dd($items);
    }
}
