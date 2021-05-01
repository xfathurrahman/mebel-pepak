<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Category;
use App\Models\Product;

class HomepageController extends Controller
{

    public function index()
    {
        $listproducts['listproducts'] = Product::with('users')->orderBy('created_at', 'DESC')->get();
        $listcategories['listcategories'] = Category::orderBy('id', 'asc')->get();
        $listcarousels['listcarousels'] = Carousel::get();

        return view('layouts.homepage')->with($listproducts)->with($listcategories)->with($listcarousels);
    }

}
