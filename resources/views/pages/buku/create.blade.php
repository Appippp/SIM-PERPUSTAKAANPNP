@extends('layout.app')

@section('title', 'Tambah Data Buku')

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Data Buku</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Buku</a></div>
        <div class="breadcrumb-item">Data buku</div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <form method="POST" action="{{ route('buku.store') }}" enctype="multipart/form-data">
                @csrf
              <div class="card-header">
                <h4>Form Tambah Buku</h4>
              </div>
              <div class="card-body">

                <div class="form-group ">
                    <label>Kategori : </label>
                      <select name="kategori_id" id="kategori_id" class="form-control selectric">
                        <option value=""> ~ Pilih Ketegori ~ </option>
                        @foreach ($kategori as $item)
                            <option value="{{ $item->id }}" {{ old('kategori_id') == $item->id ? 'selected' : '' }}>
                              {{ $item->nama_kategori }}
                            </option>
                        @endforeach
                      </select>

                      @error('kategori_id')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                  </div>

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
                    <label>Penerbit : </label>
                    <input type="text" name="penerbit" class="form-control @error('penerbit') is-invalid @enderror" value="{{ old('penerbit') }}">
                    @error('penerbit')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label>Jumlah : </label>
                    <input type="number" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{ old('jumlah') }}">
                    @error('jumlah')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                     
                  </div>

                  <div class="form-group">
                    <label>Deskripsi:</label>
                    <textarea type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label>Foto : </label>
                    <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" accept="image/*">
                    @error('foto')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    <small class="text-muted">Maximum file size: 2 MB</small>
                  </div>

                  <div class=" text-left">
                    <button class="btn btn-warning">Simpan</button>
                    <a href="{{ route('buku.index') }}" class="btn btn-danger">Kembali</a>
                  </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>
    
@endsection
