@extends('layouts.utama')

<?php //lokasi file: resources/views/mahasiswa/index.blade.php ?>


@section('content')
<h1>Daftar Nama Mahasiswa</h1>
<?php if(session('status')): ?>
<div class="alert alert-success">
    <?= session('status') ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif ?>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php $nomor = 1; ?>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $nomor ?></td>
            <td><?= $mhs->nim ?></td>
            <td><?= $mhs->nama_mahasiswa ?></td>
            <td><?= $mhs->jenis_kelamin ?></td>
            <td>
            <a class="btn btn-xs btn-info" href="<?= route('mahasiswa-detail',['id'=>$mhs->id]) ?>"> Detail </a>
            <form action="<?= route('mahasiswa.hapus',['id'=>$mhs->id]) ?>" style="display:inline" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Anda yakin ingin mengapusnya?')">Hapus</button>
            </form> 
            <a class="btn btn-xs btn-success" href="<?= route('mahasiswa.ubah',['id'=>$mhs->id]) ?>">Ubah</a>
            
            </td>
        </tr>
        <?php $nomor++ ?>
    <?php endforeach ?>

    </tbody>
</table>


<?= $mahasiswa->links() ?>
@endsection()