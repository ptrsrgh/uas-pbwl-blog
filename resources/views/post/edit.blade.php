@extends('main')
@section('title', 'Edit Post')
@section('content') 
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <strong>Edit Post</strong>
                        </div>
                    </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url("/post/{$post->post_id}") }}" method="POST">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>Kategori</label>
                                <select name="post_cat_id" class="form-control">
                                    <option value="{{ $post->category->cat_id }}">{{ $post->category->cat_name }}</option>
                                    @foreach($category as $item)
                                    <option value="{{ $item->cat_id }}">{{ $item->cat_name }}</option>
                                    @endforeach
            
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" name="post_date" class="form-control @error('post_date')
                                is-invalid @enderror" value="{{ old('post_date', $post->post_date) }}">
                                @error('post_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" name="post_slug" class="form-control @error('post_slug')
                                is-invalid @enderror" value="{{ old('post_slug', $post->post_slug) }}">
                                @error('post_slug')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Judul Post</label>
                                <input type="text" name="post_title" class="form-control @error('post_title')
                                is-invalid @enderror" value="{{ old('post_title', $post->post_title) }}">
                                @error('post_title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea type="text" name="post_text" class="form-control @error('post_text')
                                is-invalid @enderror">{{ old('post_text', $post->post_text)}}</textarea>
                                @error('post_text')
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
