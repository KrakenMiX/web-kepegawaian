<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Job;
use Session;

class JobController extends Controller
{ 
    public function index()
    {
        $data_job = Job::get();
        $data = [
            'data_job' => $data_job
        ];
        return view('job',$data);
    }

    public function tambah_job() {
        return view('tambah_job');
    }

    public function proses_tambah_job(Request $request) {
        $id_job = $request->id_job;
        $nama_job = $request->nama_job;
        $deskripsi = $request->deskripsi;

        Job::create([
            'id_job' => $id_job,
            'nama_job' => $nama_job,
            'deskripsi' => $deskripsi,
        ]);

        Session::flash('message_tambah_job', 'Data Job Berhasil Ditambah');
        return redirect('tambah_job');
    }

    public function edit_job(Request $request) {
        $id_job = $request->query('id_job');
        $data_job = Job::where('id_job', $id_job)->first();
        $data = [
            'data_job' => $data_job
        ];
        return view('edit_job', $data);
    }

    public function proses_edit_job(Request $request) {
        $id_job = $request->id_job;
        $nama_job = $request->nama_job;
        $deskripsi = $request->deskripsi;

        $data_job = Job::find($id_job);
        $data_job->nama_job = $nama_job;
        $data_job->deskripsi = $deskripsi;

        $data_job->save();

        Session::flash('message_edit_job', 'Data Job Berhasil Diedit');
        return redirect('job');
    }

    public function proses_hapus_job(Request $request) {
        $id_job = $request->query('id_job');
        $data_job = Job::destroy($id_job);
        $data = [
            'data_job' => $data_job
        ];
        return redirect('job');
    }

}
