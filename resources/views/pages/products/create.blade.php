<x-app-layout>
    <x-slot name="header_content">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a style="text-decoration: none;" href="{{route('products.index')}}"><i class="fas fa-stream"></i> {{ __('Produk') }}</a></li>
            <li class="breadcrumb-item active"><a><i class="fas fa-cart-plus"></i> {{ __('Tambah Produk') }}</a></li>
        </ol>
    </x-slot>

    <div class="py-12 form-upload">

        <div class="mx-auto">
            <h1 class="mt-5">Tambah Produk</h1>
            <p class="mb-0">Pastikan produk Anda sudah sesuai dengan syarat dan ketentuan Tokopedia. Tokopedia menghimbau seller untuk menjual produk dengar harga yang wajar atau produk Anda dapat diturunkan oleh Tokopedia sesuai S&K yang berlaku.</p>
        </div>

        <form method="POST" action="{{ route('products.store') }}" role="form" enctype="multipart/form-data">
            @csrf
            <div class="mx-auto">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                            <div class="image-up-text-head-wrapper">
                                <h4>Upload Foto Produk</h4>
                                <span>Wajib</span>
                            </div>

                            <div class="tips bg-whitesmoke p-3 rounded-md">
                                <p class="mb-0">Format gambar .jpg .jpeg .png dan ukuran minimum 300 x 300px (Untuk gambar optimal gunakan ukuran minimum 700 x 700 px).<br>Pilih foto produk atau tarik dan letakkan hingga 5 foto sekaligus di sini.
                            </div>

                            <div class="form-group">
                                <div class="preview-zone hidden">
                                    <div class="box box-solid">
                                        <div class="box-header with-border">
                                            <div><b>Preview</b></div>
                                            <div class="box-tools pull-right">
                                                <button
                                                    type="button"
                                                    class="btn btn-danger btn-xs remove-preview">
                                                    <i class="fa fa-times"></i> Hapus Semua
                                                </button>
                                            </div>
                                        </div>
                                        <!-- print success message after file upload  -->
                                        <div class="box-body"></div>
                                    </div>
                                </div>
                                <div class="dropzone-wrapper">
                                    <div class="dropzone-desc">
                                        <i class="glyphicon glyphicon-download-alt"></i>
                                        <div class="btn-pilih-foto mb-2" >
                                            <span>+ Pilih Gambar Produk</span>
                                        </div>
                                        <div>atau tarik dan letakkan hingga 5 foto sekaligus di sini.</div>
                                        @if($errors->has('files'))
                                            <span class="text-center mt-5 text-xl text-danger">{{ $errors->first('files') }}</span>
                                        @endif
                                    </div>
                                        <input type="file"  name="files[]" class="dropzone" multiple />
                                </div>
                            </div>

                            {{--<div id="image-upload">
                                <div id="upload-zone">
                                    --}}{{-- image --}}{{--
                                    @if($errors->has('files'))
                                        <span class="float-right text-xl text-danger">{{ $errors->first('files') }}</span>
                                    @endif
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" multiple name="files[]" class="form-control">
                                    </div>

                                    <!-- print success message after file upload  -->
                                    @if(Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                            @php
                                                Session::forget('success');
                                            @endphp
                                        </div>
                                    @endif
                                    --}}{{-- end image --}}{{--
                                </div>
                            </div>--}}

                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-auto">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-6">
                                    <label for="nama produk" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                                    <input type="text" name="nama" id="nama produk" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"/>
                                    @if($errors->has('nama'))
                                        <span class="float-right text-danger">{{ $errors->first('nama') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="grid grid-cols-6 gap-6">

                                <div class="col-span-6 sm:col-span-6">
                                    <label for="price" class="block text-sm font-medium text-gray-700">
                                        Harga
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                                      <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                        Rp.
                                                      </span>
                                        <input onkeypress="return onlyNumberKey(event)" type="number" name="harga" id="price" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" >
                                        @if($errors->has('harga'))
                                            <span class="float-right text-danger">{{ $errors->first('harga') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="description">Deskripsi</label>
                                <textarea name="deskripsi" id="description" cols="30" rows="10"></textarea>
                                @if($errors->has('deskripsi'))
                                    <span class="float-right text-danger">{{ $errors->first('deskripsi') }}</span>
                                @endif
                            </div>

                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-3 sm:col-span-3">
                                    <label for="category" class="block text-sm font-medium text-gray-700">Kategori</label>
                                    <select id="category" name="kategori_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value=""> --Pilih Kategori-- </option>
                                        @foreach( $listcategories as $listcategory )
                                            <option value="{{ $listcategory -> id }}">{{ $listcategory -> name }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('kategori_id'))
                                        <span class="float-right text-danger">{{ $errors->first('kategori_id') }}</span>
                                    @endif
                                </div>

                                <div class="col-sp`an-3 sm:col-span-3">
                                    <label for="stock" class="block text-sm font-medium text-gray-700">
                                        Stok
                                    </label>
                                    <div class="flex rounded-md shadow-sm">
                                        <input type="text" name="stock" id="stock" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"/>
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
                </div>
            </div>
        </form>

    </div>

</x-app-layout>

<script>
    tinymce.init({
        selector:"#description"
    });
</script>

<script>
    // Only Number
    function onlyNumberKey(evt) {
        // Only ASCII charactar in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>

<script>
    function readFile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var htmlPreview =
                    '<img width="200" src="' +
                    e.target.result +
                    '" />' +
                    "<p>" +
                    input.files[0].name +
                    "</p>";
                var wrapperZone = $(input).parent();
                var previewZone = $(input)
                    .parent()
                    .parent()
                    .find(".preview-zone");
                var boxZone = $(input)
                    .parent()
                    .parent()
                    .find(".preview-zone")
                    .find(".box")
                    .find(".box-body");

                wrapperZone.removeClass("dragover");
                previewZone.removeClass("hidden");
                boxZone.empty();
                boxZone.append(htmlPreview);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function reset(e) {
        e.wrap("<form>")
            .closest("form")
            .get(0)
            .reset();
        e.unwrap();
    }

    $(".dropzone").change(function() {
        readFile(this);
    });

    $(".dropzone-wrapper").on("dragover", function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).addClass("dragover");
    });

    $(".dropzone-wrapper").on("dragleave", function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).removeClass("dragover");
    });

    $(".remove-preview").on("click", function() {
        var boxZone = $(this)
            .parents(".preview-zone")
            .find(".box-body");
        var previewZone = $(this).parents(".preview-zone");
        var dropzone = $(this)
            .parents(".form-group")
            .find(".dropzone");
        boxZone.empty();
        previewZone.addClass("hidden");
        reset(dropzone);
    });
</script>

{{--<x-app-layout>
    <x-slot name="header_content">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a style="text-decoration: none;" href="{{route('products.index')}}"><i class="fas fa-stream"></i> {{ __('Produk') }}</a></li>
            <li class="breadcrumb-item active"><a><i class="fas fa-cart-plus"></i> {{ __('Tambah Produk') }}</a></li>
        </ol>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto">
            <h1 class="mt-5">Tambah Produk</h1>
            <p class="mb-0">Pastikan produk Anda sudah sesuai dengan syarat dan ketentuan Tokopedia. Tokopedia menghimbau seller untuk menjual produk dengar harga yang wajar atau produk Anda dapat diturunkan oleh Tokopedia sesuai S&K yang berlaku.</p>
        </div>
        <form method="POST" action="{{ route('products.store') }}" role="form" enctype="multipart/form-data">
            @csrf
                <div class="mx-auto">
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div class="image-up-text-head-wrapper">
                                    <h4>Upload Foto Produk</h4>
                                    <span>Wajib</span>
                                </div>
                                <div class="tips bg-whitesmoke p-3 rounded-md">
                                    <p>Format gambar .jpg .jpeg .png dan ukuran minimum 300 x 300px (Untuk gambar optimal gunakan ukuran minimum 700 x 700 px).
                                        <div class="inline-flex m-0 p-0">
                                        <p class="mr-2 mb-0">Geser untuk menentukan urutan dan Yang akan dijadikan <u class="font-weight-600">gambar utama</u> adalah nomor
                                        <p class="bg-blue-500 w-8 h-8 text-center text-white m-0 relative">1</p>
                                        </div>
                                </div>
                                <div id="image-upload-large-zone">
                                    <div id="iu-gallery"></div>
                                    <div id="iu-image-upload-zone">
                                        --}}{{--<div class="placeholder inline-flex p-8">
                                            <div class="css-n1y5a3" id="imgComponent-0">
                                                <div class="css-kmq1n0" data-testid="imgAEPImgUploader">
                                                    <div class="css-1rd7url"></div>
                                                    <div class="css-17t9ldh">Utama</div>
                                                </div>
                                            </div>
                                            <div class="css-s027nm" id="imgComponent-1">
                                                <div class="css-kmq1n0" data-testid="imgAEPImgUploader">
                                                    <div class="css-1ohaj7u"></div>
                                                    <div class="css-17t9ldh">Depan</div>
                                                </div>
                                            </div>
                                            <div class="css-s027nm" id="imgComponent-2">
                                                <div class="css-kmq1n0" data-testid="imgAEPImgUploader">
                                                    <div class="css-1pp9iaz"></div>
                                                    <div class="css-17t9ldh">Samping</div>
                                                </div>
                                            </div>
                                            <div class="css-s027nm" id="imgComponent-3">
                                                <div class="css-kmq1n0" data-testid="imgAEPImgUploader">
                                                    <div class="css-ypz3k2"></div>
                                                    <div class="css-17t9ldh">Atas</div>
                                                </div>
                                            </div>
                                            <div class="css-s027nm" id="imgComponent-4">
                                                <div class="css-kmq1n0" data-testid="imgAEPImgUploader">
                                                    <div class="css-83nb92"></div>
                                                    <div class="css-17t9ldh">Detail</div>
                                                </div>
                                            </div>
                                        </div>--}}{{--
                                        <div class="btn-pilih-foto mb-2" >
                                            <span>+ Pilih Gambar Produk</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-auto">
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-6">
                                        <label for="nama produk" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                                        <input type="text" name="nama" id="nama produk" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"/>
                                    </div>
                                </div>
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="hidden">
                                        <label for="userid" class="block text-sm font-medium text-gray-700">user id</label>
                                        <input value="{{ Auth::user()->id }}" id="userid" name="user_id" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6 sm:col-span-6">
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
                                    <label for="description">Deskripsi</label>
                                    <textarea name="deskripsi" id="description" cols="30" rows="10"></textarea>
                                </div>
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-3 sm:col-span-3">
                                        <label for="category" class="block text-sm font-medium text-gray-700">Kategori</label>
                                        <select id="category" name="kategori_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value=""> --Pilih Kategori-- </option>
                                            @foreach( $listcategories as $listcategory )
                                                <option value="{{ $listcategory -> id }}">{{ $listcategory -> name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sp`an-3 sm:col-span-3">
                                        <label for="stock" class="block text-sm font-medium text-gray-700">
                                            Stok
                                        </label>
                                        <div class="flex rounded-md shadow-sm">
                                            <input type="text" name="stock" id="stock" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"/>
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
                    </div>
                </div>
        </form>
    </div>
</x-app-layout>
<script>
    tinymce.init({
        selector:"#description"
    });
</script>
<script src="{{ asset('js/4image-upload.js') }}"></script>
<script id="jsNeedToCopy">
    //Detect Internet Explorer. Show alert to customer.
    if (window.document.documentMode) {
        alert("This website doesn't work on Internet Explorer, you should use modern browsers like Chrome or Safari instead");
    }
    var myImageUpload = new ImageUpload({
        imageUploadZoneId: 'iu-image-upload-zone',
        imageGalleryId: 'iu-gallery',
        sendRequestToServer: false,
        selectOrder: false,
        maxImageColumns :5,
        minImageColumns :2,
        minImageWidth :100,
        dictUploadImageNote: 'atau tarik dan letakkan hingga 5 gambar sekaligus di sini.',
        alertUploadingImage: function(fileLength) {
            var dictUploadingMessage;
            if (fileLength == 1) {
                dictUploadingMessage = 'Mengunggah 1 gambar, Mohon tunggu...';
            }
            else {
                dictUploadingMessage = 'Mengunggah' +  fileLength + ' gambar, Mohon tunggu...';
            }
            var imageUploadZone = document.getElementById("iu-image-upload-zone");
            var imageNoteOfImageUpload = imageUploadZone.getElementsByClassName('iu-image-note')[0];
            imageNoteOfImageUpload.innerHTML = dictUploadingMessage + "<div class='iu-spinner'></div>";
            imageUploadZone.style.backgroundColor = '#d5ccc3';
        },
        changeUploadZoneAndInputNoteStyle: function(imageUploadZone, imageNoteOfImageUpload, dictUploadImageNote) {
            imageNoteOfImageUpload.innerHTML = dictUploadImageNote;
            imageUploadZone.style.backgroundColor = 'transparent';
        },
        showUploadingLoader: function(imagePlaceHolder, showUploadedPercentComplete) {
            var spinner = document.createElement('div');
            spinner.className = 'iu-progress-spinner';
            imagePlaceHolder.appendChild(spinner);
            if (showUploadedPercentComplete === true) {
                var percentDiv = document.createElement('div');
                percentDiv.className = 'iu-percent-div';
                percentDiv.innerHTML = '0%';
                imagePlaceHolder.appendChild(percentDiv);
            }
            function setSpinnerSize() {
                var spinnerWidth = spinner.offsetWidth;
                spinner.style.height = spinner.offsetWidth + 'px';
            }
            setSpinnerSize();
            window.addEventListener('resize', setSpinnerSize);
        },
        updateUploadingLoader: function(percentComplete, imageItem, showUploadedPercentComplete) {
            var percentBar = imageItem.getElementsByClassName('iu-percent-div')[0];
            percentBar.innerHTML = Math.floor(percentComplete) + "%";
        },
        removeUploadingLoader: function(imageItem, showUploadedPercentComplete) {
            var spinner = imageItem.getElementsByClassName('iu-progress-spinner')[0];
            fadeEffect(spinner);
            var showPercentText = true;
            if (showUploadedPercentComplete === true) {
                var percentDiv = imageItem.getElementsByClassName('iu-percent-div')[0];
                fadeEffect(percentDiv);
            }
            function fadeEffect(elmnt) {
                var fadeEffect = setInterval(function () {
                    if (!elmnt.style.opacity) {
                        elmnt.style.opacity = 1;
                    }
                    if (elmnt.style.opacity > 0) {
                        elmnt.style.opacity -= 0.1;
                    } else {
                        clearInterval(fadeEffect);
                        elmnt.remove();
                    }
                }, 200);
            }
        },
        addFlashBox: function(showedAlertString, showedTime, backgroundColor) {
            var oldFlashBox = document.getElementsByClassName('iu-flash-box')[0];
            if (oldFlashBox) {
                oldFlashBox.remove();
            }
            var flashBox = document.createElement('div');
            flashBox.className = 'iu-flash-box';
            if (backgroundColor) {
                flashBox.style.backgroundColor = backgroundColor;
            }
            flashBox.innerHTML = showedAlertString;
            document.body.appendChild(flashBox);
            setTimeout(function(){
                fadeEffect(flashBox);
            }, showedTime);
            function fadeEffect(elmnt) {
                var fadeEffect = setInterval(function () {
                    if (!elmnt.style.opacity) {
                        elmnt.style.opacity = 1;
                    }
                    if (elmnt.style.opacity > 0) {
                        elmnt.style.opacity -= 0.1;
                    } else {
                        clearInterval(fadeEffect);
                        elmnt.remove();
                    }
                }, 50);
            }
        },
        deletingImageAlert: ['Menghapus gambar...', 30000],
        deletedImageAlert: ['Gambar telah dihapus.', 2000],
        savingImageOrderAlert: ['Menyimpan urutan gambar...', 30000],
        savedImageOrderAlert: ['Urutan gambar tersimpan.', 2000],
    });
</script>--}}
