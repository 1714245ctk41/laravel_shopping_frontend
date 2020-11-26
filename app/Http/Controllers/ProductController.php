<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //delete cart
    public function deleteCart(Request $request)
    {
        // dd($request->all());
        if ($request->id) {
            $carts = session()->get('cart');
            unset($carts[$request->id]);

            session()->put('cart', $carts);
            $carts = session()->get('cart');
            $cartComponent = view('product.components.cart_component', compact('carts'))->render();
            return response()->json([
                'cart_component' => $cartComponent,
                'code' => 200
            ], 200);
        }
    }

    //update cart
    public function updateCart(Request $request)
    {
        // dd($request->all());
        if ($request->id && $request->quantity) {
            $carts = session()->get('cart');
            $carts[$request->id]['quantity'] = $request->quantity;

            session()->put('cart', $carts);
            $carts = session()->get('cart');
            $cartComponent = view('product.components.cart_component', compact('carts'))->render();
            return response()->json([
                'cart_component' => $cartComponent,
                'code' => 200
            ], 200);
        }
    }

    //show add
    public function showCart()
    {
        $categoriesLimit = Category::where('parent_id', 0)->take(3)->get();

        return view('product.cart', compact('categoriesLimit'));
        // echo '<pre>';
        // print_r(session()->get('cart'));
        // echo '</pre>';
        // return view('product.')
    }
    public function addToCart($id)
    {
        // session()->forget('cart');
        // session()->flush('cart');
        // echo '<pre>';
        // print_r(session()->get('cart'));
        // echo '</pre>';
        // dd('ane');
        $product = Product::find($id);
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'image' => $product->feature_image_path,
                'price' => $product->price,
                'quantity' => 1
            ];
        }
        session()->put('cart', $cart);
        return response()->json([
            'code' => 200,
            'message' => 'success'
        ], 200);
        // echo '<pre>';
        // print_r(session()->get('cart'));
        // echo '</pre>';
    }
}