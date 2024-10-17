@extends('layout.app')

@section('title', 'Tambah Data Tugas Akhir')

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Data Praktek Lapangan</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Praktek Lapangan</a></div>
        <div class="breadcrumb-item">Data Praktek Lapangan</div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <form method="POST" action="{{ route('prakteklapangan.store') }}" enctype="multipart/form-data">
                @csrf
              <div class="card-header">
                <h4>Form Tambah Praktek Lapangan</h4>
              </div>
              <div class="card-body">

                  <div class="form-group ">
                    <label>Prodi : </label>
                      <select name="prodi_id" id="prodi_id" class="form-control selectric" >
                        <option value=""> ~ Pilih Prodi ~ </option>
                        @foreach ($prodi as $item)
                          <option value="{{ $item->id }}" {{ old('prodi_id') == $item->id ? 'selected' : '' }}>
                              {{ $item->nama_prodi }}
                          </option>
                        @endforeach
            
                      </select>
                      @error('prodi_id')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>

                <div class="form-group">
                  <label>Judul : </label>
                  <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}" >
                  @error('judul')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group">
                  <label>Lokasi : </label>
                  <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" value="{{ old('lokasi') }}" >
                  @error('lokasi')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Tahun : </label>
                    <input type="number" name="tahun" class="form-control @error('tahun') is-invalid @enderror" value="{{ old('tahun') }}">
                    @error('tahun')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      <small> Maximum 4 digits </small>
                  </div>

                  <div class="form-group">
                    <label>Penulis : </label>
                    <input type="text" name="penulis" class="form-control @error('penulis') is-invalid @enderror" value="{{ old('penulis') }}">
                    @error('penulis')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>

    

                
                <div class="form-group">
                    <label>Dokumen : </label>
                    <input type="file" name="dokumen" class="form-control @error('dokumen') is-invalid @enderror" accept=".pdf, .docx, .doc">
                    @error('dokumen')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    <small class="text-muted">Maximum file size: 10 MB</small>
                  </div>

                  <div class=" text-left">
                    <button class="btn btn-warning">Simpan</button>
                    <a href="{{ route('prakteklapangan.index') }}" class="btn btn-danger">Kembali</a>
                  </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>
    
@endsection
