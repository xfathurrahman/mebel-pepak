<x-slot name="header_content">
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a><i class="fas fa-cog"></i> {{ __('Pengaturan') }}</a></li>
            <li class="breadcrumb-item"><a><i class="far fa-user-circle"></i> {{ __('Akun') }}</a></li>
        </ol>
    </div>
</x-slot>

<x-jet-form-section submit="updateProfileInformation" class="mt-12">

    <x-slot name="title">
        {{ __('Info Akun') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Tempat kamu bisa ubah info akun !') }}
    </x-slot>

    <x-slot name="form">

        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <!-- Profile Photo -->
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 mt-4 sm:col-span-2 px-4">
                    <div class="border-2 col-span-2 rounded-md" >
                    <!-- Profile Photo File Input -->
                    <input type="file" class="hidden"
                           wire:model="photo"
                           x-ref="photo"
                           x-on:change="
                                        photoName = $refs.photo.files[0].name;
                                        const reader = new FileReader();
                                        reader.onload = (e) => {
                                            photoPreview = e.target.result;
                                        };
                                        reader.readAsDataURL($refs.photo.files[0]);
                                " />

                    <!-- Current Profile Photo -->
                    <div class="mt-2" x-show="! photoPreview">
                        <img style="margin-right: auto;
                                    margin-left: auto;
                                    display: inline-block;"
                             src="{{ $this->user->profile_photo_url }}"
                             alt="{{ $this->user->name }}"
                             class="rounded-full h-40 w-40 object-cover">
                    </div>

                    <!-- New Profile Photo Preview -->
                    <div style="margin-right: auto;
                                    margin-left: auto;
                                    display: inline-block;"
                         class="mt-2" x-show="photoPreview">
                        <span class="block mr-auto ml-auto rounded-full w-40 h-40"
                              x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                        </span>
                    </div>

                    <x-jet-secondary-button class="my-2" type="button" x-on:click.prevent="$refs.photo.click()">
                        {{ __('Pilih Foto') }}
                    </x-jet-secondary-button>

                    @if ($this->user->profile_photo_path)
                        <x-jet-secondary-button type="button" class="mt-2 bg-danger text-white" wire:click="deleteProfilePhoto">
                            {{ __('Hapus') }}
                        </x-jet-secondary-button>
                    @endif

                    <x-jet-input-error for="photo" class="mt-2" />
                </div>
            </div>
            <!--Background Profile Photo -->
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 mt-4 sm:col-span-4 mt-0 px-4">
                <div class="border-2 col-span-4 py-2 rounded-md">
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
                                 src="{{ $this->user->header_profile_photo_path }}"
                                 alt="{{ $this->user->name }}"
                                 class="sm:w-full h-40 object-cover">
                        </div>
                        <!-- New Background Photo Preview -->
                        <div class="mt-2" x-show="photoPreview">
                    <span class="block col-span-6 h-40"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                        </div>

                        <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.header_photo.click()">
                            {{ __('Pilih Background Baru') }}
                        </x-jet-secondary-button>

                        @if ($this->user->header_profile_photo_path)
                            <x-jet-secondary-button type="button" class="mt-2 pb-2" wire:click="deleteHeaderProfilePhoto">
                                {{ __('Hapus Background Photo') }}
                            </x-jet-secondary-button>
                        @endif

                        <x-jet-input-error for="header_photo" class="mt-2" />

                    </div>

                </div>
            </div>
        @endif

    <!-- Username -->
        <div class="text-left col-span-6 sm:col-span-3 my-2 px-4">
            <x-jet-label for="username" value="{{ __('Nama Pengguna') }}" />
            <x-jet-input id="username" type="text" class="mt-1 block w-full" wire:model.defer="state.username" autocomplete="username" />
            <x-jet-input-error for="username" class="mt-2" />
        </div>

        <!-- Name -->
        <div class="text-left col-span-6 sm:col-span-3 my-2 px-4">
            <x-jet-label for="name" value="{{ __('Nama Lengkap') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="text-left col-span-6 sm:col-span-3 my-2 px-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

        <!-- Telephone Number -->
        <div class="text-left col-span-6 sm:col-span-3 my-2 px-4">
            <x-jet-label for="phone_number" value="{{ __('Nomor Handphone') }}" />
            <x-jet-input id="phone_number" type="text" class="mt-1 block w-full" wire:model.defer="state.phone_number" />
            <x-jet-input-error for="phone_number" class="mt-2" />
        </div>

        <!-- Web Address -->
        <div class="text-left col-span-6 sm:col-span-3 my-2 px-4">
            <x-jet-label for="web_address" value="{{ __('Alamat Web') }}" />
            <x-jet-input id="web_address" type="text" class="mt-1 block w-full" wire:model.defer="state.web_address" />
            <x-jet-input-error for="web_address" class="mt-2" />
        </div>

        <!-- Birth Date -->
        <div class="text-left col-span-6 sm:col-span-3 my-2 px-4">
            <x-jet-label for="birth_date" value="{{ __('Tanggal lahir') }}" />
            <x-jet-input id="birth_date" type="date" class="mt-1 block w-full" wire:model.defer="state.birth_date" />
            <x-jet-input-error for="birth_date" class="mt-2" />
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Tersimpan.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Simpan') }}
        </x-jet-button>
    </x-slot>

</x-jet-form-section>
