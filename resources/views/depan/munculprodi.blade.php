@extends('layouts.utama')

@section('content')
<h1>Nama Prodi di FMIPA</h1>

<ul>
    <?php foreach ($semua_prodi as $sp) : ?>
        <li><?= $sp->nama_prodi ?></li>
    <?php endforeach ?>
</ul>
@endsection
