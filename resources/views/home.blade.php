<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
{{--<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
                @endauth
        </div>
    @endif

    <div class="content">

    </div>
</div>--}}
    <header class="">
        <nav class="fixed-top navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Expresarte</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Descubre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vende</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Blog</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://cdn.shopify.com/s/files/1/0818/0601/products/T-Shirt_in_Box_-_Front_1024x1024.jpg?v=1441692889" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Polos estampados</h5>
                    <p>Escoge tu diseño preferido!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://blog.elinsignia.com/wp-content/uploads/2017/05/tazas-matematica.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Sublimado de tazas</h5>
                    <p>Escoge tu diseño preferido!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://http2.mlstatic.com/cuadros-rocky-vs-apollo-27x42-precios-cuidados-D_NQ_NP_756211-MLA20503043175_112015-F.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Cuadros</h5>
                    <p>Escoge tu diseño preferido!</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div style="margin-top: 20px;"></div>
    <div class="row" style="min-height: 600px;" id="searchList">
        <div class="col-md-12 d-flex justify-content-center">
            <form class="form-inline" action="search" method="GET">
                <div class="form-group mb-2">
                    <label for="staticEmail2" class="sr-only"></label>
                    <input type="text" class="form-control-plaintext" id="staticEmail2" style="border: 1px solid #a3a3a3;" name="name">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Search</button>
            </form>
        </div>
        {{--<div class="container">--}}
        <div class="col-6 col-md-3 sidebar-offcanvas" id="sidebar">
            <div class="list-group">
                {{--<a class="panel panel-default list-group-item active">
                    <a class="list-group-item" data-toggle="collapse" href="#productos">
                        <b>Productos</b>
                    </a>
                    <div class="panel-collapse collapse" id="productos">
                        <div class="panel-body">
                            <a href="#" class="list-group-item">Cuadros</a>
                            <a href="#" class="list-group-item">Polos</a>
                            <a href="#" class="list-group-item">Tazas</a>
                        </div>
                    </div>
                </a>--}}
                <a class="panel panel-default list-group-item">
                    <a class="list-group-item" data-toggle="collapse" href="#disenos">
                        <b>Diseños</b>
                    </a>
                    <div class="panel-collapse collapse" id="disenos">
                        <div class="panel-body">
                            @foreach($designCategories as $category)
                            <a href="#" class="list-group-item">{{$category->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-6 col-md-9">
            <div class="card-columns">
                @foreach ($designs as $design)
                <div class="card">
                    <a href="{{url('product', ["id"=>1])}}"><img class="card-img-top" src="{{$design->image["path"]}}" alt="Card image cap"></a>
                    <div class="card-body">
                        <h5 class="card-title">{{$design->title}}</h5>
                        <p class="card-text">Autor: {{$design->user["name"]}}</p>

                        {{--<p class="card-text"><small class="text-muted">S/60.00</small></p>--}}
                    </div>
                </div>
                @endforeach
                {{--<div class="card">
                    <img class="card-img-top" src="https://d24h4out7wreu3.cloudfront.net/product_images/p/11507.a7.dbcb6S7YyNAAA-480x720-b-p-h.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Renzo Iglesias</h5>
                        <p class="card-text">Diseño A-X.</p>
                        <p class="card-text"><small class="text-muted">S/60.00</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="https://d24h4out7wreu3.cloudfront.net/product_images/p/11507.a7.dbcb6S7YyNAAA-480x720-b-p-h.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Renzo Iglesias</h5>
                        <p class="card-text">Diseño A-X.</p>
                        <p class="card-text">(exclusivo)</p>
                        <p class="card-text"><small class="text-muted">S/60.00</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="https://d26lpennugtm8s.cloudfront.net/stores/064/520/products/img_0508-a664ce7f92a6421c31197cbdac3dc480-480-0.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Renzo Iglesias</h5>
                        <p class="card-text">Diseño A-X.</p>
                        <p class="card-text"><small class="text-muted">S/60.00</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="http://1.bp.blogspot.com/_YXnTTso_744/S8L1v8E9RKI/AAAAAAAAAvk/PUS1nqnQ2nM/s1600/24368_393088254342_295221139342_4794728_2879764_n.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Renzo Iglesias</h5>
                        <p class="card-text">Diseño A-X.</p>
                        <p class="card-text">(exclusivo)</p>
                        <p class="card-text"><small class="text-muted">S/60.00</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img" src="https://d24h4out7wreu3.cloudfront.net/product_images/p/567374.d59.83565S7ayAAA-480x720-b-p-h.jpg" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title">Renzo Iglesias</h5>
                        <p class="card-text">Diseño A-X.</p>
                        <p class="card-text"><small class="text-muted">S/60.00</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img" src="https://d24h4out7wreu3.cloudfront.net/product_images/p/567374.d59.83565S7ayAAA-480x720-b-p-h.jpg" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title">Renzo Iglesias</h5>
                        <p class="card-text">Diseño A-X.</p>

                        <p class="card-text"><small class="text-muted">S/60.00</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img" src="https://http2.mlstatic.com/remera-ogum-pintada-a-mano-orixas-umbanda-kimband-D_NQ_NP_14247-MLA20084303990_042014-F.jpg" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title">Renzo Iglesias</h5>
                        <p class="card-text">Diseño A-X.</p>
                        <p class="card-text"><small class="text-muted">S/60.00</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img" src="http://d26lpennugtm8s.cloudfront.net/stores/319/227/products/dsc_0008-copia1-e8cb843ebfb5fc94c415132944286653-480-0.jpg" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title">Renzo Iglesias</h5>
                        <p class="card-text">Diseño A-X.</p>
                        <p class="card-text"><small class="text-muted">S/60.00</small></p>
                    </div>
                </div>--}}
            </div>
        </div>
        {{--</div>--}}
    </div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
