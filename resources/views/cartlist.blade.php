@extends('layouts.fronted.product-details')
@section('redes')
<div class="red">
    <div id="facebook">
        <a href="" target="none" class="fab fa-facebook-f "></a>
    </div>
    <div id="instagram">
        <a href="" target="none" class="fab fa-instagram"></a>
    </div>
    <div id="twiter">
        <a href="" target="none" class="fab fa-twitter-square"></a>
    </div>
    <div id="whatsaap">
        <a href="" target="none" class="fab fa-whatsapp"></a>
    </div>

</div>
@endsection
@section('navbar_top')
<?php
    use App\Http\Controllers\StoreController;
    $total_items = 0;
    if (Session::has('user')) {
        $total_items = StoreController::CartNum();   
    }
 ?>
<div class="header-top">
    <div class="container d-flex justify-content-between">
        <div class="d-inline-flex ml-auto">
            <button class="btn">
                <a href="/cartlist" style="text-decoration:none;">
                        <span class="text-secondary" >Carrito</span>
                        <span class="badge badge-pill badge-warning">{{$total_items}}</span>
                </a>
             </button>
            <div class="headcont">
                <i class="fas fa-2x fa-envelope messenge"></i>
                Tpi
            </div>
        </div>
    </div>
</div>
@endsection
@section('navbar')
    <header>
    <a href="#" class="logo">
        <h2 style="color: white" class="imgtamaño">TPI</h2>
        <!--<img  class="imgtamaño" src="{{ asset('img/Logojldm.png')}}" alt="JLDM ! Proyects">-->
    </a>
    <div class="menu-toggle" ></div>
        <nav>
            
            <ul>
                <li><a href="/" class="active">INICIO</a></li>
                <li><a href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a href="{{ url('/productos')}}">PRODUCTOS</a></li>
                <li><a href="{{ url('/nosotros')}}">NOSOTROS</a></li>
                @if(Session::has('user')) 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                     role="button" aria-haspopup="true" aria-expanded="false">{{Session::get('user')['name']}}</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/logout">logout</a>
                        <a class="nav-link" href="/orderlist">Ordenes</a>
                    </div>
                    
                </li>
                @else
                <li class="nav-link"><a href="/logins">login</a></li>
                <li class="nav-link"><a href="/register">register</a></li>
                @endif
               
               
                
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
@endsection
@section('banner')
<div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-text">
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('content')
<div class="container cartlist mt-5">
    <a href="/ordernow" class="btn btn-success">Ordenar Ahora</a>
    @foreach ($productos as $item)
 
        <div class="card mb-3" style="max-width: 540px;">

            <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{asset('/img/productos/'.$item->image)}}" alt="" class="card-img-top">
                    </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title">Nombre: {{$item->name}}</h3><br><hr>
                        <p class="card-text"><small class="text-muted">{{$item->name}}</small></p>
                        <p class="card-text"><small class="text-muted">{{$item->descriptions}}</small></p>
                       

                       
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="removecart/{{$item->cart_id}}" class="btn btn-warning">Eliminar</a>
                </div>
            </div> 
               
        </div>
        @endforeach 
    



</div>

@endsection


@section('footer')
<footer class="footer">
    <div class="l-footer">
        <!--<img  class="footer_img" src="{{asset('img/JLDIAZ.png')}}" alt="JLDM | Proyectos">-->
        <h2 style="color: white" class="footer_img">TPI</h2>
    <p>Letraset sheets containing Lorem Ipsum passages, and more recently with 
        desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </p>
    </div>
        <ul class="r-footer">
            <li>
            <h2>Social</h2>
                <ul class="box">
                    <li class="button_social">
                        <i class="fab mr-2 fa-facebook"></i>
                        <a href="" target="_blank">Facebook</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-twitter"></i>
                        <a href="#">Twitter</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-instagram"></i>
                        <a href="" target="_blank">Instagram</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-linkedin-in"></i>
                        <a href="" target="_blank">Linkedin</a>
                    </li>
                </ul>
            </li>
            <li class="features">
            <h2>Información</h2>
            <ul class="box">
                <li><a href="#">Políticas de Privacidad</a></li>
                <li><a href="#">Trabaja con nosotros</a></li>
            </ul>
            </li>
            <li class="features">
                <h2>Procedimiento de Pagos</h2>
                <ul class="box">
                    <li><a type="button" href="#">Ver mas</a></li>
                </ul>
                </li>
        </ul>
        <div class="b-footer">
            <p>Todos los Derechos reservados by <a href="" target="_blank">©TPI-2021</a></p>
        </div>
</footer>


@endsection