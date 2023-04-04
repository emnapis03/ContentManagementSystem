<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;
use App\Models\produk;

class ProdukController extends Controller
{
    function index()
    {
        $data = produk::with('kategori')->get();
        return view('produk', compact('data'));
    }

    function simpan(Request $request)
    {
        $validasi = $request->validate([
            'produk' => 'required|unique:produk,namaproduk',
        ]);
        $kategori = kategori::get();
        $validasi = produk::create([
            // 'namaproduk' => $request->produk
            'namaproduk' => $request->produk,
            'kategori_id' => $request->kategori_id,
        ]);
        return redirect('/produk');
    }

    public function edit($id)
    {
        $kat = kategori::all();
        $data = produk::find($id);
        return view('editproduk', compact('data', 'kat'));
    }

    public function update(Request $request, $id)
    {
        $data = produk::find($id);
        $data->update([
            'namaproduk' => $request->namaproduk,
            'kategori_id' => $request->kategori_id
        ]);
        return redirect('/produk');
    }

    public function destroy($id)
    {
        $data = produk::find($id);
        $data->delete();
        return redirect('/produk');
    }

    public function create()
    {
        $kat = kategori::all();
        return view('createproduk', compact('kat'));
    }

    public function store(Request $request)
    {
        $data = kategori::all();
        produk::create([
            'produk' => $request->namaproduk,
            'kategori_id' => $request->kategori_id,
        ]);
        return redirect('/');
    }
}
