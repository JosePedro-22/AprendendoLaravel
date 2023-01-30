<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
        <!-- Dropdown Structure -->
    <ul id='dropdown1' class='dropdown-content'>
        @foreach ($categoriasMenu as $categoriaMenu)
        <li><a href="{{route('site.categoria', $categoriaMenu->id)}}">{{$categoriaMenu->nome}}</a></li>
        @endforeach
    </ul>

    <nav class="green">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo center">Laravel</a>
            <ul id="nav-mobile" class="left">
                <li><a href="{{ route("site.index")}}">Home</a></li>
                <li>
                    <a class='dropdown-trigger' data-target='dropdown1'>Categoria
                        <i class="material-icons right">expand_more</i>
                    </a>
                </li>
                <li><a href="{{ route("site.carrinho")}}">Carrinho<span class="new badge blue" data-badge-caption="">{{\Cart::getContent()->count()}}</span></a></li>
            {{-- <li><a href="collapsible.html">JavaScript</a></li> --}}
            </ul>
        </div>
    </nav>

	@yield('conteudo')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.dropdown-trigger');
            var instances = M.Dropdown.init(elems, options);
        });
        $('.dropdown-trigger').dropdown();
    </script>
    <script>
        /* <!-- Compiled and minified JavaScript --> */
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </script>
</body>
</html>
