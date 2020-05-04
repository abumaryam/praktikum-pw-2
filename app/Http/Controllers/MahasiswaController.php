<?php

namespace App\Http\Controllers;

//lokasi file: App/Http/Controllers/MahasiswaController.php

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Prodi;

class MahasiswaController extends Controller
{
    public function tambahMahasiswa()
    {
        $prodi = Prodi::all();
        return view('mahasiswa.tambah',['prodi'=>$prodi]);
    }
    
    public function simpanMahasiswa(Request $request)
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama_mahasiswa = $request->nama;
        $mahasiswa->tempat_lahir = $request->tempat_lahir;
        $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->prodi_id = $request->prodi_id;
        $mahasiswa->save();

        return redirect()->route('mahasiswa-detail',['id'=>$mahasiswa->id]);
    }

    public function index()
    {
        $mahasiswa = Mahasiswa::paginate(10);

        return view('mahasiswa.index',['mahasiswa'=>$mahasiswa]);
    }

    public function detail($id)
    {
        $mahasiswa = Mahasiswa::where('id',$id)->first();
        return view('mahasiswa.detail',['mahasiswa'=>$mahasiswa]);
    }

    public function ubah($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $prodi = Prodi::all();
        return view('mahasiswa.ubah',['mahasiswa'=>$mahasiswa,'prodi'=>$prodi]);
    }

    public function perbaharui(Request $request,$id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama_mahasiswa = $request->nama;
        $mahasiswa->tempat_lahir = $request->tempat_lahir;
        $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->prodi_id = $request->prodi_id;
        $mahasiswa->save();

        return redirect()->route('mahasiswa-detail',['id'=>$mahasiswa->id])->with('status','Mahasiswa tersebut berhasil diperbaharui dari database');
    }

    public function hapus($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa-index')->with('status','Mahasiswa tersebut berhasil dihapus dari database');
    }
}
