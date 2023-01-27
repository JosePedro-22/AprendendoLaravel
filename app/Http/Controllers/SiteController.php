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

    public function details($slug){
        $produto  = Produto::where('slug', $slug)->first();
        return view('site.details', compact('produto'));
    }

    public function categoria($id){
        $produtos  = Produto::where('id_categoria', $id)->paginate(2);
        return view('site.categoria', compact('produtos'));
    }
}
