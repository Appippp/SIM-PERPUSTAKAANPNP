<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use App\Http\Requests\ProdiRequest;

class ProdiController extends Controller
{
    public function index()
    {
        $prodi = Prodi::all();

        return view('pages.prodi.index', compact('prodi'));
    }


    public function store(ProdiRequest $request)
    {
        $prodi = Prodi::create($request->all());

        return redirect()->route('prodi.index')->with('success', 'Data prodi berhasil ditambah ');
    }


    public function edit(Prodi $prodi)
    {
        return view('pages.prodi.edit', compact('prodi'));
    }


    public function update(ProdiRequest $request, Prodi $prodi)
    {
        $prodi->update($request->all());

        return redirect()->route('prodi.index')->with('success', 'Data prodi berhasil diubah ');
    }


    public function destroy(Prodi $prodi)
    {
        $prodi->delete();

        return redirect()->route('prodi.index')->with('success', 'Data prodi berhasil di hapus');
    }
}
