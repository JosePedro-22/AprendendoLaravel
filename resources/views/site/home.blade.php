@extends('site.layout')
@section('title', 'Essa é a nossa HOME')
@section('conteudo')

    @foreach ($produtos as $produto)
        <div class="row container">
            <div class="col s12 m3">
                <div class="card">
                    <div class="card-image">
                    <img src="{{$produto->imagem }}">
                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title">{{$produto->nome}}</span>
                        <p>{{Str::limit($produto->descricao, 40, '...')  }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


@endsection
    {{-- <h1>Conteudo Home</h1> --}}

   {{--  @switch($type)
        @case(1)
                false
            @break
        @case(25)
                true
            @break
        @default

    @endswitch --}}
    {{-- @if ($type == 25)
        ok <br/>
    @endif

    @auth
        está autenticado no sistema <br/>
    @endauth

    @guest
        nao está autenticado no sistema
    @endguest --}}

    {{-- <h1>Conteudo Home</h1> --}}

   {{--  @switch($type)
        @case(1)
                false
            @break
        @case(25)
                true
            @break
        @default

    @endswitch --}}
    {{-- @if ($type == 25)
        ok <br/>
    @endif

    @auth
        está autenticado no sistema <br/>
    @endauth

    @guest
        nao está autenticado no sistema
    @endguest --}}


