<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Pegawai;
use Session;

class PegawaiController extends Controller
{ 
    public function index()
    {
        $data_pegawai = Pegawai::get();
        $data = [
            'data_pegawai' => $data_pegawai
        ];
        return view('pegawai',$data);
    }

    public function tambah_pegawai() {
        return view('tambah_pegawai');
    }

    public function proses_tambah_pegawai(Request $request) {
        $id_pegawai = $request->id_pegawai;
        $nama_pegawai = $request->nama_pegawai;
        $alamat = $request->alamat;
        $jenis_kelamin = $request->jenis_kelamin;
        $jabatan = $request->jabatan;

        Pegawai::create([
            'id_pegawai' => $id_pegawai,
            'nama_pegawai' => $nama_pegawai,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'jabatan' => $jabatan
        ]);

        Session::flash('message_tambah_pegawai', 'Data Pegawai Berhasil Ditambah');
        return redirect('tambah_pegawai');
    }

    public function edit_pegawai(Request $request) {
        $id_pegawai = $request->query('id_pegawai');
        $data_pegawai = Pegawai::where('id_pegawai', $id_pegawai)->first();
        $data = [
            'data_pegawai' => $data_pegawai
        ];
        return view('edit_pegawai', $data);
    }

    public function proses_edit_pegawai(Request $request) {
        $id_pegawai = $request->id_pegawai;
        $nama_pegawai = $request->nama_pegawai;
        $alamat = $request->alamat;
        $jenis_kelamin = $request->jenis_kelamin;
        $jabatan = $request->jabatan;

        $data_pegawai = Pegawai::find($id_pegawai);
        $data_pegawai->nama_pegawai = $nama_pegawai;
        $data_pegawai->alamat = $alamat;
        $data_pegawai->jenis_kelamin = $jenis_kelamin;
        $data_pegawai->jabatan = $jabatan;

        $data_pegawai->save();

        Session::flash('message_edit_pegawai', 'Data Pegawai Berhasil Diedit');
        return redirect('pegawai');
    }

    public function proses_hapus_pegawai(Request $request) {
        $id_pegawai = $request->query('id_pegawai');
        $data_pegawai = Pegawai::destroy($id_pegawai);
        $data = [
            'data_pegawai' => $data_pegawai
        ];
        return redirect('pegawai');
    }

}
