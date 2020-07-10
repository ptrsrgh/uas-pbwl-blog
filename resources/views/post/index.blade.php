@extends('main')
@section('title', 'Post')
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
                            <strong>Data Post</strong>
                        </div>
                        <div class="pull-right">
                        <a href="{{ url("post/create") }}" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i> Tambah
                            </a>
                        </div>
                    </div>
            <div class="card-body table-responsive">
                <table class="table">
                    <thead class="table-primary">
                        <tr>
                            <th>No.</th>
                            <th>Kategori</th>
                            <th>Tanggal Post</th>
                            <th>Slug</th>
                            <th>Judul Post</th>
                            <th>Keterangan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($post as $item)
                            <tr>
                            <td>{{ $loop-> iteration }}</td>
                            <td>{{ $item ->category->cat_name }}</td>
                            <td>{{ $item ->post_date }}</td>
                            <td>{{ $item ->post_slug }}</td>
                            <td>{{ $item ->post_title }}</td>
                            <td>{{ $item ->post_text }}</td>
                            <td>
                                <a href="{{ url("/post/{$item->post_id}/edit") }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-pen"></i> Edit
                                </a>
                                <form action="{{ url ("/post/{$item->post_id}") }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
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
