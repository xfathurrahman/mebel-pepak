<x-app-layout>
    <x-slot name="header_content">
        <div>
            <h2>{{ __('Dashboard') }}</h2>
        </div>
        <ol class="breadcrumb bg-danger text-white-all">
            <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#"><i class="far fa-file"></i> Library</a></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data</li>
        </ol>
    </x-slot>
    <div class="py-12 mt-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
