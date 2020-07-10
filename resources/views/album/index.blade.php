@extends('main')
@section('title', 'Album')
@section('content') 
        <div class="content mt-3">
            <div class="animated fadeIn">
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <strong>Data Album</strong>
                        </div>
                        <div class="pull-right">
                        <a href="{{ url("album/create") }}" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i> Tambah
                            </a>
                        </div>
                    </div>
            <div class="card-body table-responsive">
                <table class="table">
                    <thead class="table-primary">
                        <tr>
                            <th>No.</th>
                            <th>Nama Album</th>
                            <th>Nama(Ket) Foto</th>
                            <th>Keterangan Album</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($album as $item)
                            <tr>
                            <td>{{ $loop-> iteration }}</td>
                            <td>{{ $item ->album_name }}</td>
                            <td>{{ $item ->photos->photos_text }}</td>
                            <td>{{ $item ->album_text }}</td>
                            <td class="text-center">
                                <a href="{{ url("/album/{$item->album_id}/edit") }}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-pen"></i> Edit
                                </a>
                                <form action="{{ url ("/album/{$item->album_id}") }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm">
                                       <i class="fa fa-trash"></i> Hapus 
                                    </button>
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

@endsection
