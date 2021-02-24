<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Pagination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $listproducts['listproducts'] = Product::Paginate(7)->onEachSide(2);
        return view('products.index')->with($listproducts);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $fileName = '';
        if($request->gambar->getClientOriginalName()){
            $file = str_replace(' ', '', $request->gambar->getClientOriginalName());
            $fileName = date('mYdhs').rand(1,999).'_'.$file;
            $request->gambar->storeAs('public/gambarproduct', $fileName);
        }
        Product::create(array_merge($request->all(),[
            'gambar' => $fileName
        ]));
        return redirect('products');
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
