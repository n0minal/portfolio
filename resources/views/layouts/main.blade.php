<!DOCTYPE html5>
<html lang="pt-br">
        <!-- Meta Tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="utf-8">

        <title>Portfólio - @yield('title')</title>

        <!-- stylesheets -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    </head>

    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="nav navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navigation-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-th-list fa-lg" aria-hidden="true"></i>
                      </button>
                    <a class="navbar-brand" href="{{ route('index') }}">Leonardo Ferreira Moura</a>
                </div>
                <div class="collapse navbar-collapse navigation-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('index') }}">Homepage</a></li>
                        <li><a href="{{ route('contact') }}">Contato</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sobre <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://github.com/n0minal/portfolio">Código Fonte</a></li>
                                <li><a href="{{ asset('doc/curriculum.pdf') }}" target="_blank">Curriculum</a></li>
                            </ul>
                        </li>
                    </ul>
                </div> <!-- end of cllapse menu -->
            </div> <!-- end of centered nav content -->
        </nav> <!-- end of nav -->
        <div class="container">
            @yield('content')
        </div>

        <div class="container">
            <div class="footer jumbotron">
                <h4>Copyright &copy; 2018 Leonardo Ferreira Moura - Todos os direitos reservados</h4>
            </div>
        </div>

		<!-- Scripts -->
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    </body>
</html>
