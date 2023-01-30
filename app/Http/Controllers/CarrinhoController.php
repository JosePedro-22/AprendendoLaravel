<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    //
    public function carrinhoList(){
        $items = \Cart::getContent();
        return view('site.carrinho', compact('items'));
    }

    public function adicionaCarrinho(Request $request){
        \Cart::add([
            'id'=>$request->id,
            'name'=>$request->name,
            'price'=>$request->price,
            'quantity'=>$request->qnt,
            'attributes'=>array(
                'image'=>$request->img
            )
        ]);

        return redirect()->route('site.carrinho')->with('sucesso','Produto adicionado ao carrinho com sucesso!');

    }


}
