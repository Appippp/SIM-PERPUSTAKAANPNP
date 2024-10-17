@extends('layout.app')

@section('title', 'Data Praktek Lapangan')

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
            <div class="card-header">
              <h4>Data Praktek Lapangan</h4>
              <div class="card-header-action">
                <a href="{{ route('prakteklapangan.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Buku</a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-2">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th>Prodi</th>
                      <th>Judul</th>
                      <th>lokasi</th>
                      <th>Tahun</th>
                      <th>Penulis</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($prakteklapangan as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-nowrap"><div class="badge badge-warning sm-badge">{{ optional($item->prodi)->nama_prodi }}</div></td>
                            <td >{{ $item->judul }}</td>
                            <td >{{ $item->lokasi }}</td>
                            <td>{{ $item->tahun }}</td>
                            <td class="text-nowrap">{{ $item->penulis }}</td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="{{ asset('storage/praktek-lapangan/' . $item->dokumen) }}" target="_blank" class="btn btn-warning btn-sm">
                                        <i class="fas fa-file-pdf"></i>
                                    </a>

                                    <a href="{{ route('prakteklapangan.edit', $item->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    
                                    <form id="deleteForm{{ $item->id }}" action="{{ route('prakteklapangan.destroy', $item->id) }}" method="POST" style="display: inline;">
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
