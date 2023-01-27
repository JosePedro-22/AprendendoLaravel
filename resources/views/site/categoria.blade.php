@extends('site.layout')
@section('title', 'Essa é a nossa HOME')
@section('conteudo')

<div class="row container">
    <h5>Caregoria: {{$categoria}}</h5>
    @foreach ($produtos as $produto)
        <div class="row container">
            <div class="col s12 m3">
                <div class="card">
                    <div class="card-image">
                    <img src="{{$produto->imagem }}">
                        <a href="{{route('site.details', $produto->slug)}}" class="btn-floating halfway-fab waves-effect waves-light red">
                            <i class="material-icons">visibility</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <span class="card-title">{{Str::limit($produto->nome, 9, '...')}}</span>
                        <p>{{Str::limit($produto->descricao, 40, '...')  }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
    <div class="row center">
        {{$produtos->links('custom.pagination')}}
    </div>

@endsection
