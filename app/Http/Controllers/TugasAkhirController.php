<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\TugasAkhir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\TugasAkhirRequest;

class TugasAkhirController extends Controller
{
    public function index()
    {
        $tugasakhir = TugasAkhir::with(['prodi'])->get();

        return view('pages.tugas-akhir.index', compact('tugasakhir'));
    }

    public function create()
    {
        $prodi = Prodi::all();

        return view('pages.tugas-akhir.create', compact('prodi'));
    }


    public function store(TugasAkhirRequest $request)
    {
        $newDokumen = '';
        if ($request->file('dokumen')) {
            $extension = $request->file('dokumen')->getClientOriginalExtension();
            $newDokumen = $request->penulis . '.' . "Tugas Akhir" . '.' . $extension;
            $request->file('dokumen')->storeAs('tugas-akhir', $newDokumen);
        }

        // Create a new instance of the Publikasi model
        $tugasakhir = new TugasAkhir;
                
        // Set attributes based on form data
        $tugasakhir->judul = $request->input('judul');
        $tugasakhir->tahun = $request->input('tahun');
        $tugasakhir->penulis = $request->input('penulis');

        // Set file attributes
         $tugasakhir->dokumen = $newDokumen;

         $tugasakhir->prodi()->associate($request->input('prodi_id'));

         $tugasakhir->save();

         return redirect()->route('tugasakhir.index')->with('success', 'Data tugas akhir berhasil ditambah ');
    }

    public function edit(TugasAkhir $tugasakhir)
    {
        $prodi = Prodi::all();

        return view('pages.tugas-akhir.edit', compact('tugasakhir','prodi'));
    }

    public function update(TugasAkhirRequest $request, TugasAkhir $tugasakhir)
    {
        $newDokumen = '';
        if ($request->file('dokumen')) {
            $extension = $request->file('dokumen')->getClientOriginalExtension();
            $newDokumen = $request->penulis . '.' . "-" . '.' . $extension;
            $request->file('dokumen')->storeAs('tugas-akhir', $newDokumen);
        }
        

         // Update attributes based on form data
         $tugasakhir->judul = $request->input('judul');
         $tugasakhir->tahun = $request->input('tahun');
         $tugasakhir->penulis = $request->input('penulis');

         // Add more attributes as needed
 
         // Update file attributes
         $tugasakhir->dokumen = $newDokumen;

         $tugasakhir->prodi()->associate($request->input('prodi_id'));

         $tugasakhir->update();
 
          return redirect()->route('tugasakhir.index')->with('success', 'Data tugas akhir berhasil diedit  ');
    }

    public function destroy(TugasAkhir $tugasakhir)
    {
        if ($tugasakhir->dokumen) {
            Storage::delete('tugas-akhir/' . $tugasakhir->dokumen);
        }

        // Delete the buku record
        $tugasakhir->delete();

        // Return a redirect with a success message
        return redirect()->route('tugasakhir.index')->with('success', 'Data tugas akhir berhasil dihapus ');
    }
}
