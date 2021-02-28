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
        <div class="border-2 col-span-6 py-2 rounded-md">
        <!-- Background Photo -->
        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 px-2">
            <!-- Background Photo File Input -->
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

            <!-- Current Background Photo -->
            <div x-show="! photoPreview">
                <img src="https://s2.bukalapak.com/hdr/74890993/normal/4805899a644c78b3d2ca." class="sm:w-full h-40 object-cover">
            </div>

            <!-- New Background Photo Preview -->
            <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
            </div>

            <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                {{ __('Pilih Background Baru') }}
            </x-jet-secondary-button>

            @if ($this->user->profile_photo_path)
                <x-jet-secondary-button type="button" class="mt-2 pb-2" wire:click="deleteProfilePhoto">
                    {{ __('Hapus Background Photo') }}
                </x-jet-secondary-button>
            @endif

            <x-jet-input-error for="photo" class="mt-2" />

        </div>

        </div>

        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-6 mt-0 px-4">
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
                         class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div style="margin-right: auto;
                                margin-left: auto;
                                display: inline-block;"
                     class="mt-2" x-show="photoPreview">
                    <span class="block mr-auto ml-auto rounded-full w-20 h-20"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="my-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Pilih Foto Baru') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Hapus Photo Profile') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="text-left col-span-6 sm:col-span-6 px-4">
            <x-jet-label for="name" value="{{ __('Nama') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="text-left col-span-6 sm:col-span-6 my-2 px-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
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
