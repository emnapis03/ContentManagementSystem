<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    function index (){
        $data = kategori::all();
        return view('kategori', compact('data'));
    }

    function simpan (Request $request){
        $validasi = $request->validate([
            'kategori' => 'required|unique:kategori,namakategori',
        ]);
        $validasi=kategori::create([
            'namakategori'=>$request->kategori
        ]);
        return redirect('/kategori');
    }
    public function edit($id)
    {
        $data = kategori::find($id);
        return view('editkategori', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = kategori::find($id);
        $data->update([
            'namakategori' => $request->namakategori,
        ]);
        return redirect('/kategori');
    }

    public function destroy($id)
    {
        $data = kategori::find($id);
        $data->delete();
        return redirect('/kategori');
    }

    public function store(Request $request)
    {
        kategori::create([
            'kategori' => $request->namakategori,
        ]);
        return redirect('/');
    }
}