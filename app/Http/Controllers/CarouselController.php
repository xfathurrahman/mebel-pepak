<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CarouselController extends Controller
{
    public function index()
    {
        $listcarousels['listcarousels'] = Carousel::Paginate(10)->onEachSide(2);
        return view('pages.carousel.index')->with($listcarousels);
    }

    public function create()
    {
        return view('pages.carousel.create');
    }

    public function store(Request $request)
    {
        $fileName = '';
        if($request->image->getClientOriginalName()){
            $file = str_replace(' ', '', $request->image->getClientOriginalName());
            $fileName = date('mYdhs').rand(1,999).'_'.$file;
            $request->image->storeAs('public/carousel-image', $fileName);
        }
        Carousel::create(array_merge($request->all(),[
            'slug' => Str::slug($request->name),
            'image' => $fileName
        ]));
        return redirect('carousel');
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
        $deletecarousel = Carousel::findOrFail($id);
        $deletecarousel->delete();
        return redirect('carousel');

//        DB::table('products')->where('id', $id)->delete();
//        return redirect('products')->with('status', 'Iklan berhasi dihapus.');
    }

    public function deleteSelectedItem(Request $request): JsonResponse
    {
        $ids = $request->ids;
        Carousel::whereIn('id', $ids)->delete();
        return response()->json(['success'=>"Carousel Yang anda pilih berhasil dihapus!"]);
    }
}
