@extends('layouts.fronted.productos')
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
                TPI
            </div>
        </div>
    </div>
</div>
@endsection
@section('navbar')
    <header>
    <a href="#" class="logo">
        <h2 style="color: white" class="imgtamaño">TPI</h2>
        <!--<img  class="imgtamaño" src="{{ asset('img/Logo-Higienika_office_peru_div.png')}}" alt="JLDM ! Proyects">-->
    </a>
    <div class="menu-toggle" ></div>
        <nav>
            <ul>
                <li><a href="{{ url('/')}}" >INICIO</a></li>
                <li><a href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a class="active" href="{{ url('/productos')}}">PRODUCTOS</a></li>
                <li><a href="{{ url('/nosotros')}}">NOSOTROS</a></li>
                
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
                        <h4>TPI <span>2021</span></h4>
					    <br><br>
                        <h1 class="tipeo1">VARIEDAD DE PRODUCTOS</h1>
                        <h1 class="tipeo2"><span class="type"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('products')
<div class="container mt-5 mb-5">
    <div class="row">
        @foreach($productos as $producto)
        <div class="col-md-4 col-sm-6">
            <div class="product-grid8">
                <div class="product-image8">
                    <a href="#">
                        <img  class="pic-1" src="{{asset('/img/productos/'.$producto->image)}}" alt="{{$producto->image}}">
                        <!--<img class="pic-2" src="https://via.placeholder.com/280x300/FFF5EE/000000">-->
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-search"></a></li>
                    </ul>
                    <span class="product-discount-label">{{$producto->visible == 1 ? "Disponible":"No Disponible"}}</span>
                </div>
                <div class="product-content">
                    <div class="price">{{$producto->name}}</div>
                    <div class="price">{{$producto->extract}}</div>
                    <!--<<span class="product-shipping">Free Shipping</span>-->
                    <h3 class="title"><a href="{{ route('searchCategory' ,$producto->categoria->name)}}">{{$producto->categoria->name}}</a></h3>
                    <a class="all-deals" href="{{route('product-details', $producto->id)}}">Detalles<i class="fa fa-angle-right icon"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{$productos->links()}}
</div>
@endsection
@section('footer')
<footer class="footer">
    <div class="l-footer">
        <!--<img  class="footer_img" src="{{asset('img/JLDIAZ.png')}}" alt="JLDM | Proyectos">-->
        <h2 style="color: white" class="footer_img">TPI</h2>
    <p>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop 
        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
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
            <p>Todos los Derechos reservados by <a href="TPI" target="_blank">©TPI-2021</a></p>
        </div>
</footer>
@endsection