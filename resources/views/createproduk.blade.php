<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                {{-- Awal Konten --}}
                <div class="content">
                    <h1><b>Tambah Data Produk</b></h1>
                    <form method="POST" action="/simpanproduk">
                        @csrf
                        <p><b>Nama Produk</b></p>
                        <p><input type="text" name="produk" </p>
                        <p><b>Jenis Kategori</b></p>
                        <p>
                            <select name="kategori_id" id="kategori_id">
                                <option disabled value>Pilih Kategori</option>
                                @foreach ($kat as $item)
                                    <option value="{{ $item->id }}">{{ $item->namakategori }}</option>
                                @endforeach
                            </select>
                        </p>
                        <br>
                        <p>
                            <input type="submit" class="save" id="save" value="Simpan">
                            <input type="reset" class="cencel" id="cencel" value="Batal"
                                onclick="self.history.back();">
                        </p>
                    </form>
                </div>
                {{-- Ahir Konten --}}
            </div>
        </div>
    </div>
</x-app-layout>
