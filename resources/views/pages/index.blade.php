@extends('layouts.main')

@section('title', 'Homepage')

@section('content')
<!-- Slider -->
<div class="carousel slide" id="slider">

    <!-- arrows -->
    <ol class="carousel-indicators">
        <li class="active" data-slide-to="0" data-target="#slider"></li>
        <li data-slide-to="1" data-target="#slider"></li>
        <li data-slide-to="2" data-target="#slider"></li>
    </ol>
    <!-- wrapper -->
    <div class="carousel-inner">
        <div class="item active" id="item-1">
            <div class="carousel-caption">
                <h4>Twitter Bootstrap 3</h4>
                <p>Página totalmente responsiva, feita com Twitter Bootsrap3!</p>
            </div>
        </div>
        <!-- item-2 -->
        <div class="item" id="item-2">
            <div class="carousel-caption">
                <h4>Laravel Framework</h4>
                <p>O mais completo framework PHP de todos os tempos!</p>
            </div>
        </div>
        <!-- item-3 -->
        <div class="item" id="item-3">
            <div class="carousel-caption">
                <h4>Compartilhe sua experiência</h4>
                <p>É um prazer conhecer você, deixe um feedback através da página de contatos...</p>
            </div>
        </div>       
        <a class="left carousel-control" data-slide="prev" href="#slider"><span class="icon-prev"></span></a>
        <a class="right carousel-control" data-slide="next" href="#slider"><span class="icon-next"></span></a>
    </div><!-- end of wrapper -->
</div>
<div class="row" id="sub-content">
    <div class="col-md-12">
        <div class="well">
            <div class="page-header">
                <h1>Seja bem-vindo!</h1>
                <small>Este website foi especialmente construído para você!</small>
            </div>
            <p class="lead">Conheça um pouco mais sobre mim</p>
            <p>Selecione uma das opções abaixo para conhecer um pouco mais sobre mim e sobre o meu trabalho, não se esqueça de deixar sua opinião sobre o site!</p>
            <a class="btn btn-large btn-custom" href="{{ asset('doc/curriculum.pdf') }}" target="_blank">Curriculum</a><a class="btn btn-link" href="{{ route('contact') }}"> Ou acesse a página de contato</a>
        </div>
    </div>
</div>
<div class="row" id="features-header">
    <div class="col-md-12">
        <h2>Tecnologias utilizadas neste site</h2>
        <p>Confira abaixo algumas das tecnologias utilizadas para o desenvolvimento deste e outros websites criados por mim!</p>
    </div>
</div>
<div class="row" id="features">
    <div class="col-sm-4 feature">
        <div class="panel panel-custom">
            <div class="panel-heading">
                <h3 class="panel-title text-center">Twitter Bootstrap 3.3.7</h3>
            </div>
            <div class="panel-body">
                <img  src="{{ asset('img/bootstrap-logo.png')}}" alt="Bootstrap3"></img>
                <p>Bootstrap é o mais popular framework HTML, CSS, e JS para desenvolvimento de projetos responsivo e focado para dispositivos móveis na web.</p>
                <p>Projetado para qualquer um, em qualquer lugar, bootstrap torna o desenvolvimento front-end web mais rápido e fácil. Ele é feito para pessoas de todos os níveis e dispositivos de qualquer forma ou tamanho.</p>
                <p>Fonte: <a href="http://getbootstrap.com.br/" target="_blank">Getbootstrap.com</a></p>
            </div>
        </div>
    </div>
    <div class="col-sm-4 feature">
        <div class="panel panel-custom">
            <div class="panel-heading">
                <h3 class="panel-title text-center">Laravel Framework 5.5</h3>
            </div>
            <div class="panel-body">
                <img src="{{ asset('img/laravel-logo.png')}}" alt="Laravel Framework 5.5"></img>
                <p>Laravel é um framework PHP livre e open-source criado por Taylor B. Otwell para o desenvolvimento de sistemas web que utilizam o padrão MVC (model, view, controller). Algumas características proeminentes do Laravel são sua sintaxe simples e concisa, um sistema modular com gerenciador de dependencias dedicado, várias formas de acesso a banco de dados relacionais e vários utilitários indispensáveis no auxílio ao desenvolvimento e manutenção de sistemas.</p>
                <p>Fonte: <a href="https://pt.wikipedia.org/wiki/Laravel" target="_blank">Wikipédia</a></p>
            </div>
        </div>
    </div>
    <div class="col-sm-4 feature">
        <div class="panel panel-custom">
            <div class="panel-heading">
                <h3 class="panel-title text-center">HTML 5</h3>
            </div>
            <div class="panel-body">
                <img  src="{{ asset('img/html5-logo.png')}}" alt="HTML 5"></img>
                <p>HTML5 (Hypertext Markup Language, versão 5) é uma linguagem para estruturação e apresentação de conteúdo para a World Wide Web e é uma tecnologia chave da Internet originalmente proposto por Opera Software. É a quinta versão da linguagem HTML. Esta nova versão traz consigo importantes mudanças quanto ao papel do HTML no mundo da Web, através de novas funcionalidades como semântica e acessibilidade.</p>
                <p>Fonte: <a href="https://pt.wikipedia.org/wiki/HTML5" target="_blank">Wikipédia</a></p>
            </div>
        </div>
    </div>
</div>

@endsection
