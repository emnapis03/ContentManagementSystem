<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="luar">
            <div class="dalam">
                {{-- Awal Konten --}}
                <form action="/produk/update/{{ $data->id }}" method="POST">
                    @csrf
                    {{-- @method('put') --}}
                    <div class="content">
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label"><b>Produk</b></label>
                        </div>
                        <div class="col-auto">
                            <input type="text" class="form-control" name="namaproduk"
                                value="{{ $data->namaproduk }}">
                            <p><b>Jenis Kategori</b></p>
                            <p>
                                <select name="kategori_id" id="kategori_id">
                                    <option disabled value>Pilih Kategori</option>
                                    @foreach ($kat as $item)
                                        <option value="{{ $item->id }}">{{ $item->namakategori }}</option>
                                    @endforeach
                                </select>
                            </p>
                        </div>

                        <button id="save" type="submit" class="btn btn-primary">Save</button>
                        <button id="cencel" type="button" class="btn btn-secondary">Cencel</button>
                </form>
                {{-- Ahir Konten --}}
            </div>
        </div>
    </div>
</x-app-layout>
