@extends('layout')

@section('content')
    <h1>Foto</h1>
    <a href="{{ route('foto.create') }}">+ Tambah</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Album</th>
                <th>Judul</th>
                <th>Deskkripsi</th>
                <th>Tanggal Unggah</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @php 
                $no =1;
            @endphp
            @forelse($fotos as $foto)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $foto->album->nama_album }}</td>
                <td>{{ $foto->judul }}</td>
                <td>{{ $foto->deskripsi }}</td>
                <td>{{ date("d-m-Y", strtotime($foto->tanggal_unggah)) }}</td>
                <td><img src="{{ asset("storage/{$foto->lokasi_file}") }}" alt="{{ $foto->judul }}" width="20%"></td>
                <td>
                    <a href="{{ route('foto.edit', $foto->id) }}">Edit</a>
                    ||
                    <form action="{{ route('foto.destroy', $foto->id) }}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">Tidak Terdapat Data Foto</td>
            </tr>
            @endforelse
        </tbody>
    </table>
@endsection