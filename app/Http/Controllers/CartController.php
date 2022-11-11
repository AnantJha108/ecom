<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart(Request $request)
    {
        if (Auth::check()) {
            $data = $request->validate([
                'product_id' => 'required',
            ]);
            $data['user_id'] = Auth::id();
            $data["qty"] = 1;
            Cart::create($data);
            return redirect()->back()->with('msg', 'Product is Added To cart');
        } else {
            return redirect()->route('login');
        }
    }

    public function increase(Request $request){
        
        return redirect()->back()->with('msg', 'Product is added To cart');
    }
}
