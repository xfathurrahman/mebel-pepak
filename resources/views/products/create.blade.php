<x-app-layout>
    <x-slot name="header_content">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a style="text-decoration: none;" href="{{route('products.index')}}"><i class="fas fa-stream"></i> {{ __('Produk') }}</a></li>
            <li class="breadcrumb-item active"><a><i class="fas fa-cart-plus"></i> {{ __('Tambah Produk') }}</a></li>
        </ol>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="POST" action="{{ route('products.store') }}" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-6">
                                    <label for="nama produk" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                                    <input type="text" name="nama" id="nama produk" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"/>
                                </div>
                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-3 sm:col-span-3">
                                    <label for="condition" class="block text-sm font-medium text-gray-700">user id</label>
                                    <select id="condition" name="user_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>

                                <div class="col-span-3 sm:col-span-3">
                                    <label for="price" class="block text-sm font-medium text-gray-700">
                                        Harga
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                              <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                Rp.
                                              </span>
                                        <input type="text" name="harga" id="price" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" >
                                    </div>
                                </div>

                            </div>
                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700">
                                    Deskripsi
                                </label>
                                <div class="mt-1">
                                    <textarea id="description" name="deskripsi" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">
                                    Deskripsikan produk apa yang anda tawarkan.
                                </p>
                            </div>

                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-3 sm:col-span-3">
                                    <label for="category" class="block text-sm font-medium text-gray-700">Kategori</label>
                                    <select id="category" name="kategori_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value="1">Elektronik</option>
                                        <option value="2">Sayur & Buah</option>
                                    </select>
                                </div>

                                <div class="col-span-3 sm:col-span-3">
                                    <label for="stock" class="block text-sm font-medium text-gray-700">
                                        Stok
                                    </label>
                                    <div class="flex rounded-md shadow-sm">
                                        <input type="text" name="stock" id="stock" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"/>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Foto Produk</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar">
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
