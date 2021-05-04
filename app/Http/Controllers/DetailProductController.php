<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Support\Facades\Request;

class DetailProductController extends Controller
{
    public function index($slugusername,$id,$slug)
    {
        $details['details'] = Product::with(['users','categories','images'])->find($id);

        $product = Product::find($id);
        $images['images'] = Image::where('product_id',$product->id)->orderBy('id','asc')->get();

        $imagesthumb['imagesthumb'] = Image::where('product_id',$product->id)->orderBy('id','asc')->first();

        return view('layouts.detailpage')->with($details)->with($images)->with($imagesthumb);
    }

}
