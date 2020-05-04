@extends('layouts.utama')

@section('content')
<h1>Nyetatus Sistem</h1>
<h2>{{ $nama_prodi }}</h2>
<p>Selamat datang {!!$nama_lengkap!!}  di status sistem</p>
        
<table border="1">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Nilai Algoritma</th>
    </tr>
    @foreach ($rekap_nilai as $rn)
    <tr>
        <td> {{$rn['nim']}} </td>
        <td> {{$rn['nama']}} </td>
        <td> {{$rn['nilai_alpro']}} </td>
    </tr>
    @endforeach
    
</table>

@endsection

