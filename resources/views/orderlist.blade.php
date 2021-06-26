@extends('layouts.fronted.product-details')
@section('redes')
<<<<<<< HEAD
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
    
=======
<div class="red">
    <div id="facebook">
        <a href="" target="none" class="fab fa-facebook-f "></a>
    </div>
    <div id="instagram">
        <a href="" target="none" class="fab fa-instagram"></a>
    </div>
    <div id="twiter">
        <a href="" target="none" class="fab fa-twitter-square"></a>
    </div>
    <div id="whatsaap">
        <a href="" target="none" class="fab fa-whatsapp"></a>
    </div>
    
>>>>>>> 0260e0fd747c7a49f9703b0c732bef4d91916afb
</div>
@endsection
@section('navbar_top')
<?php
<<<<<<< HEAD
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
                        
                        <h1 class="tipeo1">MIS ORDENES</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('content')
<div class="container cartlist mt-5">
  
    @foreach ($productos as $item)
 
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{asset('/img/productos/'.$item->image)}}" alt="" class="card-img-top">
                    </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title">Nombre: {{$item->name}}</h3><br><hr>
                        <p class="card-text"><small class="text-muted">Estado de entrega: {{$item->status}}</small></p>
                        <p class="card-text"><small class="text-muted">Direccion: {{$item->address}}</small></p>
                        <p class="card-text"><small class="text-muted">Metodo de pago :{{$item->payment_method}}</small></p>
                        <p class="card-text"><small class="text-muted"> Estado de pago: {{$item->payment_status}}</small></p>

                       
                    </div>
                </div>
            </div> 
               
        </div>
        @endforeach 
    



=======
    use App\Http\Controllers\StoreController;
    $total_items = 0;
    if (Session::has('user')) {
        $total_items = StoreController::CartNum();   
    }
 ?>
<div class="header-top">
    <div class="container d-flex justify-content-between">
        <div class="d-inline-flex ml-auto">
            <button class="btn">
                <a href="/cartlist" style="text-decoration:none;">
                        <span class="text-secondary" >Carrito</span>
                        <span class="badge badge-pill badge-warning">{{$total_items}}</span>
                </a>
             </button>
            <div class="headcont">
                <i class="fas fa-2x fa-envelope messenge"></i>
                Tpi
            </div>
        </div>
    </div>
</div>
@endsection
@section('navbar')
    <header>
    <a href="#" class="logo">
        <h2 style="color: white" class="imgtamaño">TPI</h2>
        <!--<img  class="imgtamaño" src="{{ asset('img/Logojldm.png')}}" alt="JLDM ! Proyects">-->
    </a>
    <div class="menu-toggle" ></div>
        <nav>
            
            <ul>
                <li><a href="/" class="active">INICIO</a></li>
                <li><a href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a href="{{ url('/productos')}}">PRODUCTOS</a></li>
                <li><a href="{{ url('/nosotros')}}">NOSOTROS</a></li>
                @if(Session::has('user')) 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                     role="button" aria-haspopup="true" aria-expanded="false">{{Session::get('user')['name']}}</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/logout">logout</a>
                        <a class="nav-link" href="/orderlist">Ordenes</a>
                    </div>
                    
                </li>
                @else
                <li class="nav-link"><a href="/logins">login</a></li>
                <li class="nav-link"><a href="/register">register</a></li>
                @endif
               
               
                
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
@endsection
@section('banner')
<div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-text">
                        <h4>PAGINA <span>WEB</span></h4>
                        <br><br>
                        <h1 class="tipeo1">DESCRIPCIÓN:</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('content')
<div class="container cartlist mt-5">
    <h3 class="text-center">Mi lista de ordenes</h3>
    <div class="row justify-content-center align-items-center">    
            @foreach ($productos as $item)
            <div class="col-md-4">
                <div class="card my-3 shadow">
                    <a href="/detail/{{$item->id}}">
                        <img class="card-img-top" src="{{asset('/img/productos/'.$item->image)}}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-body">
                    <h3 class="card-title">Nombre: {{$item->name}}</h3>
                    <p class="card-text">Estado de entrega: {{$item->status}}</p>
                    <p class="card-title">Direccion: {{$item->address}}</p>
                    <p class="card-title">Metodo de pago :{{$item->payment_method}}</p>
                    <p class="card-title">Estado de pago: {{$item->payment_status}}</p>
                </div>
            </div>
            
           @endforeach
    </div>
>>>>>>> 0260e0fd747c7a49f9703b0c732bef4d91916afb
</div>
@endsection



<<<<<<< HEAD

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
=======
@section('footer')
<footer class="footer">
    <div class="l-footer">
        <!--<img  class="footer_img" src="{{asset('img/JLDIAZ.png')}}" alt="JLDM | Proyectos">-->
        <h2 style="color: white" class="footer_img">TPI</h2>
    <p>Letraset sheets containing Lorem Ipsum passages, and more recently with 
        desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </p>
    </div>
        <ul class="r-footer">
            <li>
            <h2>Social</h2>
                <ul class="box">
                    <li class="button_social">
                        <i class="fab mr-2 fa-facebook"></i>
                        <a href="" target="_blank">Facebook</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-twitter"></i>
                        <a href="#">Twitter</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-instagram"></i>
                        <a href="" target="_blank">Instagram</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-linkedin-in"></i>
                        <a href="" target="_blank">Linkedin</a>
                    </li>
                </ul>
            </li>
            <li class="features">
            <h2>Información</h2>
            <ul class="box">
                <li><a href="#">Políticas de Privacidad</a></li>
                <li><a href="#">Trabaja con nosotros</a></li>
            </ul>
            </li>
            <li class="features">
                <h2>Procedimiento de Pagos</h2>
                <ul class="box">
                    <li><a type="button" href="#">Ver mas</a></li>
                </ul>
                </li>
        </ul>
        <div class="b-footer">
            <p>Todos los Derechos reservados by <a href="" target="_blank">©TPI-2021</a></p>
        </div>
>>>>>>> 0260e0fd747c7a49f9703b0c732bef4d91916afb
</footer>
@endsection