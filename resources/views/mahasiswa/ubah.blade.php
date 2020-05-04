@extends('layouts.utama')
<?php //lokasi file: resources/views/mahasiswa/tambah.blade.php ?>

@section('content')
<h1>Tambah Mahasiswa</h1>
<form action="<?= route('mahasiswa.perbaharui',['id'=>$mahasiswa->id]) ?>" method="POST">
    @csrf
    <div class="row">
        <div class="col-sm-5">
            <div class="form-group">
                <label for="nim">NIM</label>
                <input value="<?= $mahasiswa->nim ?>" type="text" name="nim" class="form-control" id="nim"  placeholder="Masukkan NIM">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input value="<?= $mahasiswa->nama_mahasiswa ?>" type="text" name="nama" class="form-control" id="nama"  placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input value="<?= $mahasiswa->tempat_lahir ?>" type="text" name="tempat_lahir" class="form-control" id="tempat_lahir"  placeholder="Masukkan Tempat Lahir">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input value="<?= $mahasiswa->tanggal_lahir ?>" type="text" name="tanggal_lahir" class="form-control" id="tanggal_lahir"  placeholder="yyyy-mm-dd">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Pria" <?=  $mahasiswa->jenis_kelamin==="Pria" ? "checked" : "" ?> >
                    <label class="form-check-label">Pria</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Wanita" <?=  $mahasiswa->jenis_kelamin==="Wanita" ? "checked" : "" ?> >
                    <label class="form-check-label">Wanita</label>
                </div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control" placeholder="Masukkan alamat"><?= $mahasiswa->alamat ?></textarea>
            </div>

            <div class="form-group">
                <label for="prodi_id">Program Studi</label>
                <select name="prodi_id" id="prodi_id" class="form-control">
                    <?php foreach($prodi as $prd): ?>
                    <option <?= $prd->id==$mahasiswa->prodi_id ? "selected" : "" ?> value="<?= $prd->id ?>"><?= $prd->nama_prodi ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection()