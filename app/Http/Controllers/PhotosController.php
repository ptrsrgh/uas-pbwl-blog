<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photos;
use App\Post;

class PhotosController extends Controller
{
    
    public function index()
    {
        $photos['photos'] = Photos::all();
        return view('photos.index')->with($photos);
    }

    public function create()
    {
        $photos['post'] = Post::all();
        return view('photos.create')->with($photos);
    }

   
    public function store(Request $request)
    {   
        $request->validate([
            'photos_date' => 'required',
            'photos_text' => 'required',
        ],[
            'photod_date.required' => 'Tanggal Tidak Boleh Kosong',
            'photos_text.required' => 'Keterangan Tidak Boleh Kosong'
        ]);
        $photos = new Photos;
        $photos->photos_post_id = $request->input('photos_post_id');
        $photos->photos_date = $request->input('photos_date');
    	$photos_title = $request->file('photos_title');
    	$photos->photos_title = $photos_title->getClientOriginalName();
    	$photos_title->move(public_path('photos_img'),$photos_title->getClientOriginalName());
        $photos->photos_text = $request->input('photos_text');

        $photos->save();
        return redirect('photos')->with('status', 'Data Berhasil Ditambah!');

    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {   
        $photos['photos'] = Photos::find($id);
        $photos['post'] = Post::all();
    	return view('photos.edit')->with($photos);
    }

    
    public function update(Request $request, $id)
    {   
        $request->validate([
            'photos_date' => 'required',
            'photos_title' => 'required',
            'photos_text' => 'required',
        ]);
        $photos = Photos::find($id);
        $photos->photos_post_id = $request->input('photos_post_id');
    	$photos->photos_date = $request->input('photos_date');
    	$photos_title = $request->file('photos_title');
        $photos->photos_title = $photos_title->getClientOriginalName();
        $photos_title->move(public_path('photos_img'),$photos_title->getClientOriginalName());
        $photos->photos_text = $request->input('photos_text');
        $photos->save();
        return redirect('photos')->with('status', 'Data Berhasil Diupdate!');
    }

   
    public function destroy($id)
    {
        $photos=Photos::find($id);
        $photos->delete();
        return redirect('photos')->with('status', 'Data Berhasil Dihapus!');
    }
}
