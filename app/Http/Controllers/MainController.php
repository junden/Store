<?php

namespace App\Http\Controllers;

use App\Category;
use App\Good;
use App\Http\Requests;
use Illuminate\Http\Request;

class MainController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
	$categories = Category::orderBy('created_at', 'asc')->get();
	return view('user.main', [
	    'categories' => $categories,
	]);
    }

    public function category(Category $category, Good $good) {
	$category_id = Category::find($category->id);
	$goods = Good::where('category_id', $category->id)
		->orderBy('created_at', 'asc')
		->get();
	return view('user.products', [
	    'goods' => $goods,
	    'category_id' => $category_id
	]);
    }

    public function about() {
	return view('user.about');
    }

    public function contacts() {
	return view('user.contacts');
    }

    public function basket() {
	return view('user.basket');
    }
    public function sess(){
	session(['key' => 'value']);
	var_dump(session()->all());
    }
     public function sess1(){
	var_dump(session()->all());
    }
}
