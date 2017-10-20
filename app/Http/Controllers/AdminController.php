<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Good;
use App\Order;

class AdminController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $categories = Category::orderBy('created_at', 'asc')->get();
        $goods = Good::orderBy('created_at', 'asc')->get();
        $orders = Order::orderBy('created_at', 'asc')->get();


        return view('admin.admin', [
            'categories' => $categories,
            'goods' => $goods,
            'orders' => $orders
        ]);
    }

    public function categories() {
        $categories = Category::orderBy('created_at', 'asc')->get();
        return view('admin.categories', [
            'categories' => $categories
        ]);
    }
    

}
