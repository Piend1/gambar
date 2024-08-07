@extends('layout')

@section('content')
    <h1>Album</h1>
    <a href="{{ route('album.create') }}">+ Tambah</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Album</th>
                <th>Deskripsi</th>
                <th>Tanggal Dibuat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php 
                $no =1;
            ?>
            @foreach($albums as $album)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $album->nama_album }}</td>
                <td>{{ $album->deskripsi }}</td>
                <td>{{ $album->tanggal_dibuat }}</td>
                <td>
                    <a href="{{ url("/album/{$album->id}") }}">Edit</a>
                    <form action="{{ url("/album/{$album->id}") }}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection