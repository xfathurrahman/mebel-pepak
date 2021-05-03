<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Product;

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

//    public function save(Request $request) {
//        if ($request->file('image') !== null) {
//            $image = $request->file('image');
//            $imageName = $image->getClientOriginalName();
//            $path = $image->storeAs(
//                'image',
//                $imageName,
//                'public'
//            );
//        }
//        else {
//            $imageName = $request->input('image');
//        }
//        $image = new ProductDetail;
//        /*$image->token = $request->input('token');*/
//        $image->image_order = $request->input('imageNumber');
//        $image->image_path = $imageName;
//        $image->save();
//        return response($image->id);
//    }
//
//
//    public function deleteImage(Request $request) {
//        // $image = Image::find($request->input('imageId'));
//        // $image->delete();
//        // Storage::disk('public')->delete("image/$image->image_name");
//    }
//
//    public function saveImageOrder(Request $request) {
//        $imageIdOrder = explode(',', $request->input('imageIdOrder'));
//        for ($i=0; $i < count($imageIdOrder) ; $i++) {
//            $image = ProductDetail::where('id', $imageIdOrder[$i])->update(['image_order' => $i + 1]);
//        }
//    }
//
//    public function deleteImageWhereImageNumberNull() {
//        $image = ProductDetail::where('image_order', null)->delete();
//    }

}
