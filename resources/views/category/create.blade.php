@extends('main')

@section('title', 'Sigadget')
@section('breadcrumbs')
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>kategori</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Kategori</a></li>
                            <li class="active">Add</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content') 
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <strong>Tambah Kategori</strong>
                        </div>
                        <div class="pull-right">
                        <a href="{{ url('category') }}" class="btn btn-secondary btn-sm">
                                <i class="fa fa-undo"></i> Back
                            </a>
                        </div>
                    </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url("/category") }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Nama Kategori</label>
                                <input type="text" name="cat_name" class="form-control @error('cat_name')
                                is-invalid @enderror" value="{{ old('cat_name') }}" autofocus>
                                @error('cat_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea type="text" name="cat_text" class="form-control @error('cat_text')
                                is-invalid @enderror" >{{ old('cat_text') }}</textarea>
                                @error('cat_text')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
        
                        </form>
                    </div> 
                </div>               
            </div>
                </div>
                
             </div>
        </div>

@endsection
