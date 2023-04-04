<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Kategori') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="luar">
            <div class="dalam">
                <a href="/kategori/createkategori"><button type="button" class="tombol">Tambah</button></a>
                {{-- Awal Konten --}}
                <table class="tabelkategori">
                    <thead>
                        <tr class="ndas">
                            <th scope="col">No.</th>
                            <th scope="col">Jenis Kategori</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="isi">
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->namakategori }}</td>
                                <td id="aksi">
                                    <button class="act" href="/kategori/edit/{{ $item->id }}">Edit </button>
                                    <form action="/kategori/delete/{{ $item->id }}" method="POST">
                                        @csrf
                                        <button class="actd" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- Ahir Konten --}}
            </div>
        </div>
    </div>
</x-app-layout>
