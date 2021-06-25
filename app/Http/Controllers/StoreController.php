<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\Categorias;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use DB;
use Session;


class StoreController extends Controller
{
    public function index(){
        $categorias = Categorias::all();
        $productos = Productos::all();
                
        return view('categorias', compact('categorias' , 'productos'));
        
    }

    public function show($id){
        
        $producto = Productos::where('id', $id)->first();
        return view('product-details', compact('producto'));

        
    }
    public function searchCategory($id){
        $categorias = Categorias::where('id' , $id)->pluck('id')->all();
        $productos = Productos::where('categoria_id',$categorias)
                    ->orderBY('id', 'DESC')
                    ->simplePaginate(6);
        return view('productos', compact('categorias' , 'productos')); 
    }

    function cart(Request $req){
       
        // check if user is logged in
        if ($req->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->cart;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/logins') ;
        }        
    }

    static function CartNum(){
        if (session()->has('user')) {
            $user_id = Session::get('user')['id'];
            return Cart::where('user_id',$user_id)->count();
        }   
        else{
            return redirect('/logins');
        }
    }

   
    // show items in the cart
    function showItem(){
        $user_id = Session::get('user')['id'];
        $count = Cart::where('user_id',$user_id)->count();
        if (session()->has('user') && $count > 0) {
            $user_id = Session::get('user')['id'];
            $productos = DB::table('carts')
            ->join('productos','carts.product_id','=','productos.id')
            ->where('carts.user_id',$user_id)
            ->select('productos.*','carts.id as cart_id')
            ->get();
            return view("cartlist",['productos'=>$productos]);
        }
        else{
            return redirect('/');
        }
    }
    // remove from the cart
    function remove($id){
        if (session()->has('user')) {
            Cart::destroy($id);
            return redirect('cartlist');
        }
        else{
            return redirect('/logins');
        }
    }



    function ordernow(){
        if (session()->has('user')) {
            $user_id = Session::get('user')['id'];
            $total = DB::table('carts')
            ->join('productos','carts.product_id','=','productos.id')
            ->where('carts.user_id',$user_id)
            ->select('productos.*','carts.id as carts_id')
            ->sum('productos.price');
            return view("ordernow",['total'=>$total]);
            // return $products;
        }
        else{
            return redirect('/logins');
        }
    }
    //
    function orderplace(Request $req){
        if ($req->session()->has('user')) {
            $user_id = Session::get('user')['id'];
            $all_cart = Cart::where('user_id',$user_id)->get();
            foreach ($all_cart as $cart) {
                $orders = new Order;
                $orders->user_id = $cart['user_id'];
                $orders->product_id = $cart['product_id'];
                $orders->status = "pending";
                $orders->payment_method = $req->payment;
                $orders->payment_status = "pending";
                $orders->address = $req->address;
                $orders->Save();
                $all_cart = Cart::where('user_id',$user_id)->delete();
            }
            return redirect('/');
        }
        else{
            return redirect('/logins');
        }
    }
    
    // orders list
    function order_list(){
        if (session()->has('user')) {
            $user_id = Session::get('user')['id'];
             $order_list = DB::table('orders')
            ->join('productos','orders.product_id','=','productos.id')
            ->where('orders.user_id',$user_id)
            ->get();
            return view("orderlist",['productos'=>$order_list]);
        }
        else{
            return redirect('/logins');
        }
    }


    
}
