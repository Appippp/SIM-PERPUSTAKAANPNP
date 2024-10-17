@extends('layout.app')

@section('title', 'Data Buku')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Data Buku</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Buku</a></div>
        <div class="breadcrumb-item">Data Buku</div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Buku</h4>
              <div class="card-header-action">
                <a href="{{ route('buku.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Buku</a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-2">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th>Kategori</th>
                      <th>Prodi</th>
                      <th>Judul</th>
                      <th>Tahun</th>
                      <th>Penulis</th>
                      <th>Penerbit</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($buku as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-nowrap"><div class="badge badge-success sm-badge">{{ optional($item->kategori)->nama_kategori }}</div></td>
                            <td class="text-nowrap"><div class="badge badge-warning sm-badge">{{ optional($item->prodi)->nama_prodi }}</div></td>
                            <td >{{ $item->judul }}</td>
                            <td>{{ $item->tahun }}</td>
                            <td class="text-nowrap">{{ $item->penulis }}</td>
                            <td class="text-nowrap">{{ $item->penerbit }}</td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="{{ asset('storage/foto/' . $item->foto) }}" target="_blank" class="btn btn-warning btn-sm">
                                        <i class="fas fa-file-image"></i>
                                    </a>

                                    <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    
                                    <form id="deleteForm{{ $item->id }}" action="{{ route('buku.destroy', $item->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete('{{ $item->id }}')">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
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
