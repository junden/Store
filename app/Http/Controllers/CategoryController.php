<?php

namespace App\Http\Controllers;

use App\Category;
use App\Good;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller {

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required|max:255',
        ]);
        $category = new Category;

        $category->name = $request->name;
        $category->save();

        return redirect('/admin');
    }

    public function destroy(Category $category) {
        $category->delete();
        return redirect('/admin/categories');
    }

    public function goods(Category $category, Good $good) {
        $category_id = Category::find($category->id);
        $goods = Good::where('category_id', $category->id)
                ->orderBy('name', 'desc')
                ->get();

        return view('admin.goods', [
            'goods' => $goods,
            'category_id' => $category_id
        ]);
    }

}
