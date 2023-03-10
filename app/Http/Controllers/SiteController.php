<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Controllers\ProdutoController;
use App\Models\Produto;
use  App\Models\Categoria;

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

        // Gate::authorize('ver-produto', $produto);
        // $this->authorize('verProduto', $produto);

        if(auth()->user()->can('verProduto', $produto)){
            return view('site.details', compact('produto'));
        }
        if(auth()->user()->cannot('verProduto', $produto)){
            return redirect()->route('site.index');
        }
        return view('site.details', compact('produto'));
    }

    public function categoria($id){
        $categoria = Categoria::find($id);
        $produtos  = Produto::where('id_categoria', $id)->paginate(2);
        return view('site.categoria', compact('produtos', 'categoria'));
    }
}
