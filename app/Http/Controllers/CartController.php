<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }
    public function add(Product $product)
    {
        if (!$product->id) {
            return redirect()->back()->with('error', 'Invalid product!');
        }

        $cart = session()->get('cart', []);

        $id = $product->id;

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => $product->image
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart!');
    }
    public function update(Request $request, $id)
    {
        $cart = session()->get('cart', []);
        if (!isset($cart[$id])) {
            return redirect()->back()->with('error', 'Product not found in cart!');
        }

        $cart[$id]['quantity'] = $request->quantity;
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Cart updated!');
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);
        if (!isset($cart[$id])) {
            return redirect()->back()->with('error', 'Product not found in cart!');
        }

        unset($cart[$id]);
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product removed!');
    }
    public function checkout()
    {
        $cart = session()->get('cart', []);
        return view('cart.checkout', compact('cart'));
    }

    public function processCheckout(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'address' => 'required|string|max:500',
            'phone' => 'required|string|max:20',
        ]);

        $cart = session()->get('cart', []);

        if (!$cart || count($cart) == 0) {
            return redirect()->back()->with('error', 'Your cart is empty!');
        }
        session()->forget('cart');
        return redirect('/')->with('success', 'Thank you! Your order has been placed.');
    }
}
