<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <style>
        .card-body{
            display: inline-block !important;
            min-height: 300px;
            max-width: 300px;
            margin-right: 5px;
        }
        .ui.content {
            overflow: auto;
            white-space: nowrap;
        }
        .card-title {
            color: white;
            font-weight: bolder;
            text-shadow: -1px -1px 4px #aaa;
        }
    </style>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="flex-center position-ref full-height">
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
    <div style="margin-top: 55px;"></div>
    <div class="content">
        <div class="row">
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-cuadros-list" data-toggle="list" href="#list-cuadros" role="tab" aria-controls="cuadros">Cuadros</a>
                    <a class="list-group-item list-group-item-action" id="list-polos-list" data-toggle="list" href="#list-polos" role="tab" aria-controls="polos">Polos</a>
                    <a class="list-group-item list-group-item-action" id="list-tazas-list" data-toggle="list" href="#list-tazas" role="tab" aria-controls="tazas">Tazas</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-cuadros" role="tabpanel" aria-labelledby="list-cuadros-list">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{$design->image["path"]}}" alt="{{$design->name}}" class="img-thumbnail">
                            </div>
                            <div class="col-md-6 card">
                                <div class="card-body">
                                    <h5 class="card-title">Cuadro - {{$design->title}}</h5>
                                    <p class="card-text">{{$design->review}}</p>
                                    <div>
                                        <input type="number" min="0" VALUE="1">
                                        <label for="">S/.60.00</label>
                                    </div>
                                    <a href="#" class="btn btn-primary">Añadir al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-polos" role="tabpanel" aria-labelledby="list-polos-list">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{$design->image["path"]}}" alt="{{$design->name}}" class="img-thumbnail">
                            </div>
                            <div class="col-md-6 card">
                                <div class="card-body">
                                    <h5 class="card-title">Cuadro - {{$design->title}}</h5>
                                    <p class="card-text">{{$design->review}}</p>
                                    <div>
                                        <input type="number" min="0" VALUE="1">
                                        <label for="">S/.60.00</label>
                                    </div>
                                    <a href="#" class="btn btn-primary">Añadir al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-tazas" role="tabpanel" aria-labelledby="list-tazas-list">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{$design->image["path"]}}" alt="{{$design->name}}" class="img-thumbnail">
                            </div>
                            <div class="col-md-6 card">
                                <div class="card-body">
                                    <h5 class="card-title">Cuadro - {{$design->title}}</h5>
                                    <p class="card-text">{{$design->review}}</p>
                                    <div>
                                        <input type="number" min="0" VALUE="1">
                                        <label for="">S/.60.00</label>
                                    </div>
                                    <a href="#" class="btn btn-primary">Añadir al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <h2>Otros diseños del autor:</h2>
        <div class="ui content">
            @foreach ($designs as $design)
                <div class="card card-body">
                    <div class="card-img-overlay">
                        <a href="{{url('product', ["id"=>$design->id])}}"><h5 class="card-title">{{$design->title}}</h5></a>
                    </div>
                    <img class="card-img-top" src="{{$design->image["path"]}}" alt="Card image cap">
                </div>
            @endforeach
        </div>
    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
