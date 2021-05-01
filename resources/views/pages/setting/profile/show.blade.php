{{--<style type="text/css">
    img {
        display: block;
        max-width: 100%;
    }
    .preview {
        overflow: hidden;
        width: 100%;
        height: 160px;
        margin: 10px;
    }
    .modal-lg{
        max-width: 800px !important;
    }
</style>--}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')
                <x-jet-section-border />
            @endif

{{--            <!--background Photo-->
            <div>
                <!--Title & Description-->
                <div class="mt-10 md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium text-gray-900">Ubah Background Profile</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Sesuaikan background akun kamu agar lebih menarik ya..
                        </p>
                    </div>
                </div>
                <!--main-header-profile_pic-->
                <div class="bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                    <div x-data="{photoName: null, photoPreview: null}" class="bg-white">
                            <div class="col-span-4 border-2 rounded py-2 rounded-md">
                                <div x-data="{photoName: null, photoPreview: null}" class="col-span-4 px-2">
                                    <!-- Background Photo File Input -->
                                    <input type="file" class="hidden"
                                           wire:model="header_photo"
                                           x-ref="header_photo"
                                           x-on:change="
                                    photoName = $refs.header_photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                    photoPreview = e.target.result;
                                      };
                                    reader.readAsDataURL($refs.header_photo.files[0]);
                               " />
                                    <!-- Current Background Photo -->
                                    <div x-show="! photoPreview">
                                        <img style="margin-right: auto;
                                            margin-left: auto;
                                            display: inline-block;"
                                             src="{{asset('storage/assets/BannerRight.png')}}"
                                             alt="fathur"
                                             class="sm:w-full h-40 object-cover">
                                    </div>
                                    <!-- New Background Photo Preview -->
                                    <div class="mt-2" x-show="photoPreview">
                                <span class="block col-span-6 h-40"
                                      x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                                </span>
                                    </div>
                                    <div class="file-input">
                                        <input type="file" id="file" class="image">
                                        <label for="file">Pilih Gambar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                <!--card-body-->
                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <div x-data="{ shown: false, timeout: null }" x-init="window.livewire.find('lZpVZytUaT3bKrtUWbs1').on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })" x-show.transition.opacity.out.duration.1500ms="shown" style="display: none;" class="text-sm text-gray-600 mr-3">
                        Tersimpan.
                    </div>
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150" wire:loading.attr="disabled" wire:target="photo">
                        Simpan
                    </button>
                </div>

                <div class="hidden sm:block">
                    <div class="py-8">
                        <div class="border-t border-gray-200"></div>
                    </div>
                </div>

            </div>--}}

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0 inline-block">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif

            <div class="mt-10 sm:mt-0 inline-block">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0 inline-block">
                    @livewire('profile.delete-user-form')
                </div>
            @endif

        </div>
    </div>

</x-app-layout>

{{--<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Sesuaikan Ukuran Foto dulu ya...</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="img-container">
                    <div class="row">
                        <div class="col-md-8">
                            <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                        </div>
                        <div class="col-md-4">
                            <div class="preview"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="crop">Crop</button>
            </div>
        </div>
    </div>
</div>

<script>

    var $modal = $('#modal');
    var image = document.getElementById('image');
    var cropper;

    $("body").on("change", ".image", function(e){
        var files = e.target.files;
        var done = function (url) {
            image.src = url;
            $modal.modal('show');
        };
        var reader;
        var file;
        var url;

        if (files && files.length > 0) {
            file = files[0];

            if (URL) {
                done(URL.createObjectURL(file));
            } else if (FileReader) {
                reader = new FileReader();
                reader.onload = function (e) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
            }
        }
    });

    $modal.on('shown.bs.modal', function () {
        cropper = new Cropper(image, {
            aspectRatio: 16/9,
            viewMode: 3,
            preview: '.preview'
        });
    }).on('hidden.bs.modal', function () {
        cropper.destroy();
        cropper = null;
    });

    $("#crop").click(function(){
        canvas = cropper.getCroppedCanvas({
            width: 320,
            height: 180,
        });

        canvas.toBlob(function(blob) {
            url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function() {
                var base64data = reader.result;

                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: '{{ route("profile.crop") }}',
                    data: {'_token': $('meta[name="_token"]').attr('content'), 'image': base64data},
                    success: function(data){
                        $modal.modal('hide');
                        alert("success upload image");
                    }
                });
            }
        });
    })

</script>--}}
