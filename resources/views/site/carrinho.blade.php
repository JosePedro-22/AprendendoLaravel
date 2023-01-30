@extends('site.layout')
@section('title', 'Carrinho')
@section('conteudo')

<div class="row container">
    <h5>Seu carrinho possui {{$items->count()}} produtos.</h5>
    </div>
        <div class="row center">
            <table class="striped">
                <thead>
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>Preco</th>
                    <th>Quantidade</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td><img src="{{$item->attributes->image}}" alt="" width="70" class="responsive-img circle"><img/></td>
                            <td>{{$item->name}}</td>
                            <td>R$ {{number_format($item->price, 2,',',',')}}</td>
                            <td><input style="width: 40px; font-weight:900;" class="white center" type="number" name="quantity" value="{{$item->quantity}}"><input/></td>
                            <td>
                                <a class="btn-floating waves-effect waves-light orange"><i class="material-icons">refresh</i></a>
                                <a class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        <div class="row container center">
            <button class="btn waves-effect waves-light blue">Continuar comprando<i class="material-icons right">arrow_back</i></button>
            <button class="btn waves-effect waves-light blue">Limpar carrinho<i class="material-icons right">clear</i></button>
            <button class="btn waves-effect waves-light green">Finalizar pedido<i class="material-icons right">check</i></button>
        </div>
    </div>
@endsection
