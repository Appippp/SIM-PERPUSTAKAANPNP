@extends('layout.app')

@section('title', 'Kategori')

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Data Kategori</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Kategori</a></div>
        <div class="breadcrumb-item">Data Kategori</div>
      </div>
    </div>

    <div class="section-body">
        <div class="row">
          <div class="col-12 ">
            <div class="card">
              <form method="post" action="{{ route('kategori.update', $kategori->id) }}">
                @csrf
                @method('PUT')
                <div class="card-header">
                  <h4>Form Edit Kategori</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control @error('nama_kategori') is-invalid @enderror" value="{{ $kategori->nama_kategori }}">
                    @error('nama_kategori')
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