@extends('site.layout')
@section('title', 'Essa é a nossa HOME')
@section('conteudo')
    <div class="row container">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                  <img src="images/sample-1.jpg">
                  <span class="card-title">Card Title</span>
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
              </div>
        </div>
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                  <img src="images/sample-1.jpg">
                  <span class="card-title">Card Title</span>
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
              </div>
        </div>
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                  <img src="images/sample-1.jpg">
                  <span class="card-title">Card Title</span>
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
              </div>
        </div>
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                  <img src="images/sample-1.jpg">
                  <span class="card-title">Card Title</span>
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
              </div>
        </div>
    </div>
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


