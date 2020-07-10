@extends('main')
@section('title', 'Album')
@section('content') 
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <strong>Tambah Post</strong>
                        </div>
                    </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url("/album") }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Nama Album</label>
                                <textarea type="text" name="album_name" class="form-control @error('album_name')
                                is-invalid @enderror" >{{ old('album_name') }}</textarea>
                                @error('album_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama Photo</label>
                                <select name="album_photos_id" class="form-control @error('album_photos_id')
                                is-invalid @enderror" value="{{ old('album_photos_id') }}" autofocus">
                                    <option value=""></option>
                                    @foreach($photos as $item)
                                    <option value="{{ $item->photos_id }}">{{ $item->photos_text }}</option>
                                    @endforeach
                                </select>
                            </div>
                        
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea type="text" name="album_text" class="form-control @error('album_text')
                                is-invalid @enderror" >{{ old('album_text') }}</textarea>
                                @error('album_text')
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
