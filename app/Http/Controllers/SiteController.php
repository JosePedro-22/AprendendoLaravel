<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Controllers\ProdutoController;
use App\Models\Produto;


class SiteController extends Controller
{
    //
    public function index()
    {
        //return "index";

        /* $produtos = Produto::all(); */
        $produtos = Produto::paginate(2);
        return view('site.home', compact('produtos'));

        /* return view('site.home'); */

    }
}
