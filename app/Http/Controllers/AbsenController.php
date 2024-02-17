<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Absen;
use App\Models\Pegawai;
use App\Models\Job;
use Session;

class AbsenController extends Controller
{ 
    public function index()
    {
        $data_absen = Absen::join('pegawai', 'pegawai.id_pegawai', '=', 'absen.id_pegawai')
        ->join('job', 'job.id_job', '=', 'absen.id_job')
        ->get();
        $data = [
            'data_absen' => $data_absen
        ];
        return view('absen',$data);
    }

    public function tambah_absen() {
        $data_pegawai = Pegawai::get();
        $data_job = Job::get();
        $data = [
            'data_pegawai' => $data_pegawai,
            'data_job' => $data_job
        ];
        return view('tambah_absen', $data);
    }

    public function proses_tambah_absen(Request $request) {
        $id_pegawai = $request->id_pegawai;
        $id_job = $request->id_job;

        Absen::create([
            'id_pegawai' => $id_pegawai,
            'id_job' => $id_job,
        ]);

        Session::flash('message_tambah_absen', 'Data Absen Berhasil Ditambah');
        return redirect('tambah_absen');
    }

    public function lihat_absen(Request $request) {
        $id_absen = $request->query('id_absen');
        $data_absen = Absen::join('pegawai', 'pegawai.id_pegawai', '=', 'absen.id_pegawai')
        ->join('job', 'job.id_job', '=', 'absen.id_job')
        ->where('id_absen', $id_absen)
        ->first();
        $data = [
            'data_absen' => $data_absen
        ];
        return view('lihat_absen', $data);
    }

    public function proses_hapus_absen(Request $request) {
        $id_absen = $request->query('id_absen');
        $data_absen = Absen::destroy($id_absen);
        $data = [
            'data_absen' => $data_absen
        ];
        return redirect('absen');
    }

}
