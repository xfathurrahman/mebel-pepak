<x-app-layout>
    <x-slot name="header_content">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a style="text-decoration: none;" href="{{route('carousel.index')}}"><i class="fas fa-stream"></i> {{ __('Carousel') }}</a></li>
            <li class="breadcrumb-item active"><a><i class="fas fa-cart-plus"></i> {{ __('Tambah Carousel') }}</a></li>
        </ol>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="POST" action="{{ route('carousel.store') }}" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-6">
                                    <label for="category-name" class="block text-sm font-medium text-gray-700">Carousel Name</label>
                                    <input type="text" name="name" id="category-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Carousel Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
