<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Category;
use App\Good;
use App\Order;
use App\User;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoodController extends Controller {

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required|max:255',
        ]);
        $good = new Good;

        $good->name = $request->name;
        $good->category_id = $request->category_id;
        $good->price = $request->price;
        $good->description = $request->description;
        $good->image = $request->image;

        $good->save();

        return redirect('/admin');
    }

    public function destroy(Category $category,Good $good) {
        $good->delete();
        return redirect('/admin/categories/'.$category->id);
    }
    
    public function getAddToCart(Request $request,$id){
        $good= Good::find($id);
        $oldCart=Session::has('cart') ? Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->add($good,$good->id);
        
        $request->session()->put('cart',$cart);
        return redirect()->route('good.products');
    }
    
    public function getCart() {
        if (!Session::has('cart')) {
            return view('user.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('user.cart', ['good' => $cart->items, 'totalPrice' => $cart -> totalPrice]);
    }
    
    
}

