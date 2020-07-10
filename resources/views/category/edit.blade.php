@extends('main')

@section('title', 'Edit Kategori')
@section('content') 
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <strong>Edit Kategori</strong>
                        </div>
                    </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url("/category/{$category->cat_id}") }}" method="POST">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>Nama Kategori</label>
                                <input type="text" name="cat_name" class="form-control @error('cat_name')
                                is-invalid @enderror" value="{{ old('cat_name', $category->cat_name) }}">
                                @error('cat_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea type="text" name="cat_text" class="form-control @error('cat_text')
                                is-invalid @enderror">{{ old('cat_text', $category->cat_text)}}</textarea>
                                @error('cat_text')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Ubah</button>
        
                        </form>
                    </div> 
                </div>               
            </div>
                </div>
                
             </div>
        </div>

@endsection
