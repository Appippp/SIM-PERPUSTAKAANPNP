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
              <form method="post" action="{{ route('prodi.store') }}">
                @csrf
                <div class="card-header">
                  <h4>Form Tambah Prodi</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Prodi</label>
                    <input type="text" name="nama_prodi" class="form-control @error('nama_prodi') is-invalid @enderror ">
                    @error('nama_prodi')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class=" text-right">
                    <button class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
 

    <div class="section-body">  
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Data Prodi</h4>
              </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>                                 
                    <tr>
                      <th class="text-center" width="10%">
                        No
                      </th>
                      <th>Nama Prodi</th>
                      <th width="15%">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>                                 
                   @foreach ($prodi as $item)
                       <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_prodi }}</td>
                        <td>
                            <a href="{{ route('prodi.edit', $item->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                            <!-- Ganti URL pada action dengan URL yang benar -->
                            <!-- Formulir Delete dengan Konfirmasi -->
                            <form id="deleteForm{{ $item->id }}" action="{{ route('prodi.destroy', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete('{{ $item->id }}')"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                       </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    
@endsection