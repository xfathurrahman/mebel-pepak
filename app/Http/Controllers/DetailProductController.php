<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class DetailProductController extends Controller
{
    public function index($slugusername,$id,$slug)
    {
        $details['details'] = Product::with(['users','categories'])->find($id);
        $listproducts['listproducts'] = Product::orderBy('id','desc')->get();
        $listcategories['listcategories'] = Category::orderBy('id', 'asc')->get();

        return view('layouts.detailpage')->with($details)->with($listcategories)->with($listproducts);
    }

    public function coba()
    {
        $listproducts['listproducts'] = Product::orderBy('id','desc')->get();
        $listcategories['listcategories'] = Category::orderBy('id', 'asc')->get();

        return view('layouts.detailpage')->with($listproducts)->with($listcategories);
    }

}
