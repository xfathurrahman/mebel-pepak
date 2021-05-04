<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Validator;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $listproducts['listproducts'] = Product::with('categories','images','users')
            ->orderBy('id','asc')
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

    /**
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        Validator::make($request->all(), [
            'nama'=>'required|string',
            'kategori_id'=>'required',
            'deskripsi'=>'required|string',
            'files' => 'required',
            'files.*' => 'mimes:jpeg,jpg,png,gif'
        ])->validate();

        $total_files = count($request->file('files'));

        $nama=$request->nama;
        $harga=$request->harga;
        $kategori_id=$request->kategori_id;
        $deskripsi=$request->deskripsi;

        $product  = new Product;
        $product -> nama=$nama;
        $product -> harga=$harga;
        $product -> kategori_id=$kategori_id;
        $product -> deskripsi=$deskripsi;
        $product -> user_id=Auth::user()->id;
        $product -> save();

        $productId=$product->id;

        if ($request->hasfile('files')) {
            $files = $request->file('files');

            foreach($files as $file) {
                $image  = new Image;
                $name   = time().'.'.$file->getClientOriginalName();
                $path   = public_path('/storage/product-image');
                $file  -> move($path, $name);
                $image -> product_id=$productId;
                $image -> image_path=$name;
                $image -> save();
            }
        }

        return back()->with("success", $total_files . " files uploaded successfully");
    }

    /*$request->validate([
            'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ]);

        if ($request->hasfile('imageFile')) {
            foreach ($request->file('imageFile') as $file) {
                $image_path = $file->getClientOriginalName();
                $file->move(public_path() . '/product_image/', $image_path);
                $imgData[] = $image_path;
            }

            $fileModal = new Image();
            $fileModal->image_path = json_encode($imgData);

            $user = Auth::user();
            $data = $request->all();
            $product = $user->products()->create($data);
            $fileModal->product_id = $product -> id;

            $fileModal->save();

            return redirect('products')->with('success', 'Data Your files has been successfully added');

        }*/

    /*      $fileName = '';
            if($request->gambar->getClientOriginalName()){
                $file = str_replace(' ', '', $request->gambar->getClientOriginalName());
                $fileName = date('mYdhs').rand(1,999).'_'.$file;
                $request->gambar->storeAs('public/product-image', $fileName);
            }
            Product::create(array_merge($request->all(),[
                'gambar' => $fileName
            ]));
            return redirect('products');*/

    /*      $user = Auth::user();
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
