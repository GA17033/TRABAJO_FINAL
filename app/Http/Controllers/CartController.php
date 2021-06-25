<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Productos;

class CartController extends Controller
{
     
    public function add(Request $request){
       
        $productos = Productos::find($request->slug);

        Cart::add(
            $productos->slug, 
            $productos->name, 
            $productos->price,
            array("image"=>$productos->image)
           
        );
        return back()->with('success',"$productos->name ¡se ha agregado con éxito al carrito!");
   
    }
}
