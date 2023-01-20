@extends('site.layout')

@section('title', 'Essa é a nossa HOME')

@section('conteudo')
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


{{--     uso do include  --}}
@include('includes.mensagem', ['title' => 'Usuário Home'])

@component('components.sidebar')
    @slot('paragrafo')
        Isto é um exemplo de paragrafo...
    @endslot
@endcomponent
@endsection
