<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Coba Dokumen') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Halo {{ $data['nama'] }}

                    @foreach ($buah as $fruit)
                        <br>
                        {{ $fruit }}
                    @endforeach

                    <x-alert type="error" message="Ini adalah pesan error"></x-alert>
                    <x-alert type="success" message="Ini adalah pesan berhasil"></x-alert>
                    <x-alert type="info" message="Ini adalah pesan info"></x-alert>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
