<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Photos;

class AlbumController extends Controller
{
    
    public function index()
    {
        $album['album'] = Album::all();
        return view('album.index')->with($album);
    }

  
    public function create()
    {
        $album['photos'] = Photos::all();
        return view('album.create')->with($album);
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'album_name' => 'required',
            'album_text' => 'required',
        ],[
            'album_name.required' => 'Nama Album Tidak Boleh Kosong',
            'album_text.required' => 'Keterangan Tidak Boleh Kosong'
        ]);

        $album = new Album;
        $album->album_photos_id = $request->input('album_photos_id');
        $album->album_name = $request->input('album_name');
        $album->album_text = $request->input('album_text');
        
        $album->save();
        return redirect('album')->with('status', 'Data Berhasil Ditambah!');
    }

  
    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        $album['album'] = Album::find($id);
    	$album['photos'] = Photos::all();
    	return view('album.edit')->with($album);
    }

   
    public function update(Request $request, $id)
    {
       
        $album = Album::find($id);
        $album->album_photos_id = $request->input('album_photos_id');
        $album->album_name = $request->input('album_name');
        $album->album_text = $request->input('album_text');
    	$album->save();
        return redirect('album')->with('status', 'Data Berhasil Diupdate!');
    }

    
    public function destroy($id)
    {
        $album = Album::find($id);
        $album->delete();
        return redirect('album')->with('status', 'Data Berhasil Dihapus!');
    }
}
