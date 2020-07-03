@extends('main')

@section('title', 'Sigadget')
@section('breadcrumbs')
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Album</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Album</a></li>
                            <li class="active">Edit</li>
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
                            <strong>Edit Album</strong>
                        </div>
                        <div class="pull-right">
                        <a href="{{ url('album') }}" class="btn btn-secondary btn-sm">
                                <i class="fa fa-undo"></i> Back
                            </a>
                        </div>
                    </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url("/album/{$album->album_id}") }}" method="POST">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>Nama Photos</label>
                                <select name="album_photos_id" class="form-control">
                                    <option value="{{ $album->photos->photos_id }}">{{ $album->photos->photos_title }}</option>
                                    @foreach($photos as $item)
                                    <option value="{{ $item->photos_id }}">{{ $item->photos_title }}</option>
                                    @endforeach
                                </select>
                            <div class="form-group">
                                <label>Nama Album</label>
                                <input type="text" name="album_name" class="form-control @error('album_name')
                                is-invalid @enderror" value="{{ old('album_name', $album->album_name) }}">
                                @error('album_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea type="text" name="album_text" class="form-control @error('album_text')
                                is-invalid @enderror">{{ old('album_text', $album->album_text)}}</textarea>
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
