@extends('site.layout')
@section('title', 'Carrinho')
@section('conteudo')

<div class="row container">
    @if ($mensagem = Session::get('sucesso'))
        <div class="card green">
            <div class="card-content white-text">
              <span class="card-title">Parabens!</span>
              <p>{{$mensagem}}</p>
            </div>
        </div>
    @endif

    @if ($mensagem = Session::get('Aviso'))
        <div class="card red">
            <div class="card-content white-text">
              <span class="card-title">Aviso!</span>
              <p>{{$mensagem}}</p>
            </div>
        </div>
    @endif

    @if ($items -> count() == 0)
    <div class="card orange">
        <div class="card-content white-text">
          <span class="card-title">Seu carrinho esta vazio!</span>
          <p>Aproveite nossas promoções...</p>
        </div>
    </div>
    @else
        <h5>Seu carrinho possui {{$items->count()}} produtos.</h5>
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
                        {{-- BTN ATUALIZAR --}}
                        <form action="{{route('site.atualizacarrinho')}}"  method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{$item->id}}" name="id"/>
                        <td>
                            <input style="width: 40px; font-weight:900;" min="1" class="white center" type="number" name="quantity" value="{{$item->quantity}}"/>
                        </td>

                        <td>
                            <button class="btn-floating waves-effect waves-light orange"><i class="material-icons">refresh</i></button>
                        </form>
                        {{-- BTN REMOVER --}}
                            <form action="{{ route('site.removecarrinho') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{$item->id}}" name="id"/>
                                <button class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h5>Valor total: </h5>
    @endif

    <div class="card orange">
        <div class="card-content white-text">
          <span class="card-title">R${{number_format(\Cart::getTotal(), 2,',',',')}}</span>
          <p>Pageu em 12x sem juros</p>
        </div>
    </div>

    <div class="row container center">
        <a href={{route('site.index')}} class="btn waves-effect waves-light blue">Continuar comprando<i class="material-icons right">arrow_back</i></a>
        <a href={{route('site.limparcarrinho')}} class="btn waves-effect waves-light blue"> Limpar carrinho<i class="material-icons right">clear</i></a>
        <button class="btn waves-effect waves-light green">Finalizar pedido<i class="material-icons right">check</i></button>
    </div>

</div>
@endsection
