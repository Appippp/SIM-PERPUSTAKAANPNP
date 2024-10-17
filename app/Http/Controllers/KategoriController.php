<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Requests\KategoriRequest;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();

        return view('pages.kategori.index', compact('kategori'));
    }

    public function store(KategoriRequest $request)
    {
        $kategori = Kategori::create($request->all());
    
        return redirect()->route('kategori.index')->with('success', 'Data kategori berhasil ditambah');
    }

    public function edit(Kategori $kategori)
    {
        return view('pages.kategori.edit', compact('kategori'));
    }

    public function update(KategoriRequest $request, Kategori $kategori)
    {
        $kategori->update($request->all());

        return redirect()->route('kategori.index')->with('success', 'Data kategori berhasil diedit ');
    }

    public function destroy(Kategori $kategori)
    {
        $kategori->delete();

        return redirect()->route('kategori.index')->with('success', 'Data kategori berhasil dihapus ');
    }


    
}
