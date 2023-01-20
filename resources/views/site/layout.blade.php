<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
         <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>@yield('title')</title>
	</head>
	<body>

        <nav class="green">
            <div class="nav-wrapper container">
              <a href="#" class="brand-logo center">Laravel</a>
              <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="sass.html">Home</a></li>
                <li><a href="badges.html">Carrinho</a></li>
                {{-- <li><a href="collapsible.html">JavaScript</a></li> --}}
              </ul>
            </div>
        </nav>

		@yield('conteudo')

        <script>
            /* <!-- Compiled and minified JavaScript --> */
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        </script>
	</body>
</html>
