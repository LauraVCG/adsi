<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Validator;

class CartController extends Controller
{
    
    public function shop()
    {
        $products = Producto::all();
        // dd($products);
        return view('carrito.shop')->withTitle('Comprar')->with(['products' => $products]);
    }

        public function cart() {
            $cartCollection  = \Cart::getContent();
            //  dd($cartCollection);
            return view('carrito.cart')->withTitle('Cart')->with(['cartCollection' => $cartCollection]);
        } 
        
        public function add(Request$request){
            \Cart::add(array(
                'id' => $request->id,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'attributes' => array(
                    'image' => $request->img,
                    'slug' => $request->slug
                )
            ));
            return redirect()->route('cart.index')->with('success_msg', 'Producto añadido con éxito!');
        }

        public function remove(Request $request){
            \Cart::remove($request->id);
            return redirect()->route('cart.index')->with('success_msg', 'Producto eliminado!');
        }
    
        public function update(Request $request){
            \Cart::update($request->id,
                array(
                    'quantity' => array(
                        'relative' => false,
                        'value' => $request->quantity
                    ),
            ));
            return redirect()->route('cart.index')->with('success_msg', 'Cambios guardados!');
        }

        public function clear(){
            \Cart::clear();
            return redirect()->route('cart.index')->with('success_msg', 'Carrito vacio!');
        }
        
}
