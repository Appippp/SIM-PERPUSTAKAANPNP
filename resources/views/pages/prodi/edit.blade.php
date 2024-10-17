@extends('layout.app')

@section('title', 'Prodi')

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Data Prodi</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Prodi</a></div>
        <div class="breadcrumb-item">Data Prodi</div>
      </div>
    </div>

    <div class="section-body">
        <div class="row">
          <div class="col-12 ">
            <div class="card">
              <form method="post" action="{{ route('prodi.update', $prodi->id) }}">
                @csrf
                @method('PUT')
                <div class="card-header">
                  <h4>Form Edit Prodi</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Prodi</label>
                    <input type="text" name="nama_prodi" class="form-control @error('nama_prodi') is-invalid @enderror" value="{{ $prodi->nama_prodi }}">
                    @error('nama_prodi')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="text-right">
                    <a href="{{ route('kategori.index') }}" class="btn btn-danger">Back</a>
                    <button class="btn btn-primary">Submit</button>
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</section>

    
@endsection