<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use App\Models\PraktekLapangan;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PraktekLapanganRequest;

class PraktekLapanganController extends Controller
{
    public function index()
    {
        $prakteklapangan = PraktekLapangan::with(['prodi'])->get();

        return view('pages.praktek-lapangan.index', compact('prakteklapangan'));
    }

    public function create()
    {
        $prodi = Prodi::all();

        return view('pages.praktek-lapangan.create', compact('prodi'));
    }

    public function store(PraktekLapanganRequest $request)
    {
        $newDokumen = '';
        if ($request->file('dokumen')) {
            $extension = $request->file('dokumen')->getClientOriginalExtension();
            $newDokumen = $request->penulis . '.' . "PKL" . '.' . $extension;
            $request->file('dokumen')->storeAs('praktek-lapangan', $newDokumen);
        }

        // Create a new instance of the Publikasi model
        $prakteklapangan = new PraktekLapangan;
                
        // Set attributes based on form data
        $prakteklapangan->judul = $request->input('judul');
        $prakteklapangan->lokasi = $request->input('lokasi');
        $prakteklapangan->tahun = $request->input('tahun');
        $prakteklapangan->penulis = $request->input('penulis');

        // Set file attributes
         $prakteklapangan->dokumen = $newDokumen;

         $prakteklapangan->prodi()->associate($request->input('prodi_id'));

         $prakteklapangan->save();

         return redirect()->route('prakteklapangan.index')->with('success', 'Data Tugas Akhir berhasil ditambahkan ! ');

    }


    public function edit(PraktekLapangan $prakteklapangan)
    {
        $prodi = Prodi::all();

        return view('pages.praktek-lapangan.edit',compact('prakteklapangan', 'prodi'));
    }

    public function update(PraktekLapanganRequest $request, PraktekLapangan $prakteklapangan)
    {
        $newDokumen = '';
        if ($request->file('dokumen')) {
            $extension = $request->file('dokumen')->getClientOriginalExtension();
            $newDokumen = $request->penulis . '.' . "-" . '.' . $extension;
            $request->file('dokumen')->storeAs('praktek-lapangan', $newDokumen);
        }
        

         // Update attributes based on form data
         $prakteklapangan->judul = $request->input('judul');
         $prakteklapangan->lokasi = $request->input('lokasi');
         $prakteklapangan->tahun = $request->input('tahun');
         $prakteklapangan->penulis = $request->input('penulis');

         // Add more attributes as needed
 
         // Update file attributes
         $prakteklapangan->dokumen = $newDokumen;

         $prakteklapangan->prodi()->associate($request->input('prodi_id'));

         $prakteklapangan->update();
 
          return redirect()->route('prakteklapangan.index')->with('success', 'Data pratek lapangan berhasil diubah ');
    }

    public function destroy(PraktekLapangan $prakteklapangan)
    {
        if ($prakteklapangan->dokumen) {
            Storage::delete('praktek-lapangan/' . $prakteklapangan->dokumen);
        }

        // Delete the buku record
        $prakteklapangan->delete();

        // Return a redirect with a success message
        return redirect()->route('prakteklapangan.index')->with('success', 'Data praktek lapangan berhasil dihapus ');
    }
}
