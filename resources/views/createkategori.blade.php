<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Kategori') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                {{-- Awal Konten --}}
                                        {{-- @method('put') --}}
                    <div class="content">
                        <h3><b>Tambah Data Kategori</b></h3>
                        <form method="post" action="/simpankategori">
                            @csrf
                            <p><b>Kategori</b></p>
                            <p><input type="text" class="@error('kategori') is-invalid @enderror" name="kategori"></p>
                                @error('kategori')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            <p>
                                <input id="save" type="submit" class="btn btn-submit" value="Simpan">
                                <input id="cencel" type="reset" class="btn btn-submit" value="Batal"
                                    onclick="self.history.back();">
                            </p>
                        </form>
                    </div>
              
                {{-- Ahir Konten --}}
            </div>
        </div>
    </div>
</x-app-layout>
