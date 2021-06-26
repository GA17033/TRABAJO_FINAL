@extends('layouts.fronted.nosotros')
<<<<<<< HEAD

@section('redes')
<div class="container">
    <div class="row">
       <div class="col-sm-12 bg-light">
           @if (count(Cart::getContent()))
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>PRECIO</th>
                    <th>CANTIDAD</th>
                </thead>
                <tbody>
                    @foreach (Cart::getContent() as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>
                                <form action="{{route('cart.removeitem')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <button type="submit" class="btn btn-link btn-sm text-danger">x</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            @else
                <p>Carrito vacio</p>
           @endif

       </div>
       
    </div>
</div>
=======
     
@section('redes')
    <div class="container">
        <div class="row">
           <div class="col-sm-12 bg-light">
               @if (count(Cart::getContent()))
                <table class="table table-striped">
                    <thead>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>PRECIO</th>
                        <th>CANTIDAD</th>
                    </thead>
                    <tbody>
                        @foreach (Cart::getContent() as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->quantity}}</td>
                                <td>
                                    <form action="{{route('cart.removeitem')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$item->id}}">
                                        <button type="submit" class="btn btn-link btn-sm text-danger">x</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
     
                @else
                    <p>Carrito vacio</p>
               @endif
     
           </div>
           
        </div>
    </div>
>>>>>>> 0260e0fd747c7a49f9703b0c732bef4d91916afb
@endsection