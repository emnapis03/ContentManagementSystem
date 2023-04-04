<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Kategori') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="luar">
            <div class="dalam">
                {{-- Awal Konten --}}
                <form action="/kategori/update/{{ $data->id }}" method="POST">
                    @csrf
                    {{-- @method('put') --}}
                    <div class="content">
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label"><b>Kategori</b></label>
                        </div>
                        <div class="col-auto">
                            <input type="text" class="form-control" name="namakategori"
                                value="{{ $data->namakategori }}">
                        </div>

                        <button id="save" type="submit" class="btn btn-primary">Save</button>
                        <button id="cencel" type="button" class="btn btn-secondary">Cencel</button>
                </form>
                {{-- Ahir Konten --}}
            </div>
        </div>
    </div>
</x-app-layout>
