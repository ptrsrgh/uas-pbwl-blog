@extends('main')

@section('title', 'Sigadget')
@section('breadcrumbs')
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Post</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Post</a></li>
                            <li class="active">Data</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content') 
        <div class="content mt-3">
            <div class="animated fadeIn">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <strong>Data Post</strong>
                        </div>
                        <div class="pull-right">
                        <a href="{{ url("post/create") }}" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i> Add
                            </a>
                        </div>
                    </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Tanggal Post</th>
                            <th>Slug</th>
                            <th>Judul Post</th>
                            <th>Keterangan</th>
                            <th></th>
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
                            <td class="text-center">
                                <a href="{{ url("/post/{$item->post_id}/edit") }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <form action="{{ url ("/post/{$item->post_id}") }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm">
                                       <i class="fa fa-trash"></i>  
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
