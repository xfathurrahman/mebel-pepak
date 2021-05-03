<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $listproducts['listproducts'] = Product::with('categories','images','users')
            ->where('user_id','=',Auth::user()->id)
            ->Paginate(7)
            ->onEachSide(2);

        return view('pages.products.index')->with($listproducts);
    }

    public function create()
    {
        $listcategories['listcategories'] = Category::get();
        return view('pages.products.create')->with($listcategories);
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $data = $request->all();
        $product = $user->products()->create($data);

        $fileName = '';
        if($request->image_path->getClientOriginalName()){
            $file = str_replace(' ', '', $request->image_path->getClientOriginalName());
            $fileName = date('mYdhs').rand(1,999).'_'.$file;
            $request->image_path->storeAs('public/product-image', $fileName);
        }
        Image::create(array_merge($request->all(),[
            'image_path' => $fileName,
            'product_id' => $product -> id
        ]));
        return redirect('products');

/*        $fileName = '';
        if($request->gambar->getClientOriginalName()){
            $file = str_replace(' ', '', $request->gambar->getClientOriginalName());
            $fileName = date('mYdhs').rand(1,999).'_'.$file;
            $request->gambar->storeAs('public/product-image', $fileName);
        }
        Product::create(array_merge($request->all(),[
            'gambar' => $fileName
        ]));
        return redirect('products');*/

/*        $user = Auth::user();
        $product = new Product();
        $data = $request->all();
        $product = $user->products()->create($data);
        if($request->hasFile('product_id')){
            $files = $request->file('product_id');
            foreach ($files as $file){
                $image_path = time().'_'.$file->getClientOriginalName();
                $image_path = str_replace(' ','-',$image_path);
                $file->move('product_image', $image_path);
                $product->image()->create(['image_path'=>$image_path]);
            }
        }
        return redirect('products');*/



    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id): RedirectResponse
    {
        $deleteads = Product::findOrFail($id);
        $deleteads->delete();
        return redirect('products');

//        DB::table('products')->where('id', $id)->delete();
//        return redirect('products')->with('status', 'Iklan berhasi dihapus.');
    }

    public function deleteSelectedItem(Request $request): JsonResponse
    {
        $ids = $request->ids;
        Product::whereIn('id', $ids)->delete();
        return response()->json(['success'=>"Produk anda berhasil dihapus!"]);
    }
}
