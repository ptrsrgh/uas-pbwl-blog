@extends('main')
@section('title', 'Tambah Photos')
@section('content') 
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <strong>Tambah Photos</strong>
                        </div>
                    </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url("/photos") }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                
                                <label>Nama Post</label>
                                <select name="photos_post_id" class="form-control @error('photos_post_id')
                                is-invalid @enderror" value="{{ old('photos_post_id') }}" autofocus">
                                    <option value=""></option>
                                    @foreach($post as $item)
                                    <option value="{{ $item->post_id }}">{{ $item->post_title }}</option>
                                    @endforeach
                            </select>  
                            </div>
                            <div class="form-group">
                                <label>Tanggal Photos</label>
                                <input type="date" name="photos_date" class="form-control @error('photos_date')
                                is-invalid @enderror" value="{{ old('photos_date') }}" autofocus>
                                @error('photos_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                          
                            <div class="form-group">
                                <label>Photos</label>
                                <input type="file" name="photos_title" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea type="text" name="photos_text" class="form-control @error('photos_text')
                                is-invalid @enderror" >{{ old('photos_text') }}</textarea>
                                @error('photos_text')
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
