<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    public function index() {
        $albums = Album::all();

        $data = [
            "albums" => $albums
        ];

        return view("album.index", $data);
    }

    public function create(){
        return view("album.tambah");
    }

    public function store(Request $request) {
        $nama_album = $request->nama_album;
        $deskripsi = $request->deskripsi;
        $tanggal_dibuat = $request->tanggal_dibuat;

        Album::create([
            "nama_album" => $nama_album,
            "deskripsi" => $deskripsi,
            "tanggal_dibuat" => $tanggal_dibuat,
        ]);

        return redirect("/album");
    }

   
    public function show(string $id){
        
    }

    
    public function edit($id)
    {
        $album = Album::where("id", $id)->first();

        $data = [
            "album" => $album
        ];
        return view("album.edit", $data);
    }

    
    public function update(Request $request, $id){
        $nama_album = $request->nama_album;
        $deskripsi = $request->deskripsi;
        $tanggal_dibuat = $request->tanggal_dibuat;

        Album::where("id", $id)->update([
            "nama_album" => $nama_album,
            "deskripsi" => $deskripsi,
            "tanggal_dibuat" => $tanggal_dibuat,
        ]);

        return redirect("/album");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $album = Album::where("id", $id)->first();
        $album->delete();

        return redirect("/album");
    }
}
