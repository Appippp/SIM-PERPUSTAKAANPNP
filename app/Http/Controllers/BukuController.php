<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Prodi;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Requests\BukuRequest;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::with(['prodi','kategori'])->get();

        return view('pages.buku.index', compact('buku'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        $prodi = Prodi::all();

        return view('pages.buku.create',compact('kategori','prodi'));
    }


    public function store(BukuRequest $request)
    {
        $newImage = '';
    
        if ($request->file('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $newImage = $request->judul .  '.' . $extension;
            $request->file('foto')->storeAs('foto', $newImage);
        }
    
        
                $buku = new Buku;
                
                // Set attributes based on form data
                $buku->judul = $request->input('judul');
                $buku->tahun = $request->input('tahun');
                $buku->penerbit = $request->input('penerbit');
                $buku->jumlah = $request->input('jumlah');
                $buku->penulis = $request->input('penulis');
                $buku->deskripsi = $request->input('deskripsi');
                // Add more attributes as needed

                // Set file attributes
                $buku->foto = $newImage;

                $buku->kategori()->associate($request->input('prodi_id'));
                $buku->prodi()->associate($request->input('kategori_id'));
                $buku->save();

                return redirect()->route('buku.index')->with('success', 'Data Buku berhasil ditambah ');
    }

    public function edit(Buku $buku)
    {
        $kategori = Kategori::all();
        $prodi = Prodi::all();
        return view('pages.buku.edit', compact('buku', 'kategori', 'prodi'));
    }

    public function update(BukuRequest $request, Buku $buku)
    {
        $newImage = '';
        if ($request->file('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $newImage = $request->judul . '.' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto', $newImage);
        }

         // Update attributes based on form data
         $buku->judul = $request->input('judul');
         $buku->tahun = $request->input('tahun');
         $buku->penerbit = $request->input('penerbit');
         $buku->jumlah = $request->input('jumlah');
         $buku->penulis = $request->input('penulis');
         $buku->deskripsi = $request->input('deskripsi');
         // Add more attributes as needed
 
         // Update file attributes
         $buku->foto = $newImage;
         $buku->kategori()->associate($request->input('kategori_id'));
         $buku->prodi()->associate($request->input('prodi_id'));
         $buku->update();

         return redirect()->route('buku.index')->with('success', 'Data Buku berhasil diupdate');
    }


    public function destroy(Buku $buku)
    {
        if ($buku->foto) {
            Storage::delete('foto/' . $buku->foto);
        }

        // Delete the buku record
        $buku->delete();

        // Return a redirect with a success message
        return redirect()->route('buku.index')->with('success', 'Data Buku berhasil dihapus!');
    }
}
