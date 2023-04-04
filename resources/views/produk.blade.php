<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="luar">
            <div class="dalam responsive">
                <a href="/createproduk"><button type="button" class="tombol">Tambah</button></a>
                {{-- Awal Konten --}}
                <table class="tabelproduk" style="overflow-x:auto">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Jenis Kategori</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="isi">
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->namaproduk }}</td>
                                <td>{{ $item->kategori->namakategori }}</td>
                                <td id="aksi">
                                    <button class="act" href="/produk/edit/{{ $item->id }}">Edit </button>
                                    <form class="hapus" action="/produk/delete/{{ $item->id }}" method="POST">
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
