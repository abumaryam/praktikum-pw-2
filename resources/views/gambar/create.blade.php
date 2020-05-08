@extends('layouts.utama')

@section('content')
<h1>Upload Gambar</h1>

<form action="{{ route('gambar.create') }}" enctype="multipart/form-data" method="POST">
@csrf
<div class="form-group">
    <label for="nama_file">File Gambar</label>
    <input type="file" name="file_gambar" id="file_gambar" class="form-control">
</div>
<div class="form-group">
    <label for="deksripsi">Deskripsi Gambar</label>
    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"></textarea>
</div>
<div class="form-group">
    <button class="btn btn-primary" type="submit">Simpan</button>
</div>
</form>
@endsection()