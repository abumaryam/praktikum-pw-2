@extends('layouts.utama')
<?php //lokasi file: resources/views/mahasiswa/detail.blade.php ?>
@section('content')
<a class="btn btn-primary" href="<?= route('mahasiswa-index') ?>"><< Kembali</a>
<?php if(session('status')): ?>
<div class="alert alert-success">
    <?= session('status') ?>
    aaa
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif ?>
<br>
<div class="img">
<?php if ($mahasiswa->foto):?>
    <img src="{{asset('store/'.$mahasiswa->foto)}}" alt="">
<?php endif ?>
</div>
<ul>
    <li>NIM : <?= $mahasiswa->nim ?></li>
    <li>Nama: <?= $mahasiswa->nama_mahasiswa ?></li>
    <li>Tempat Lahir: <?= $mahasiswa->tempat_lahir ?></li>
    <li>Tanggal Lahir: <?= $mahasiswa->tanggal_lahir ?></li>
    <li>Jenis Kelamin: <?= $mahasiswa->jenis_kelamin ?></li>
    <li>Alamat: <?= $mahasiswa->alamat ?></li>
    <li>Program Studi: <?= $mahasiswa->prodi->nama_prodi ?></li>
</ul>


@endsection()