@extends('master')

@section('konten')
<div class="container px-0">
    <div class="heading_container ">
      <h2 class="">
        INPUT DATA ABSEN
      </h2>
      <a href="{{ route('absen') }}"><- &nbsp; Kembali</a>
    </div>
  </div>
<section class="contact_section ">
    <div class="container container-bg"> 
      <div class="row"> 
        <div class="col-md-6 col-lg-5 px-0">
            <form action="{{ route('proses_tambah_absen') }}" method="post" enctype="multipart/form-data">
            @csrf
              <section class="base">
                @if(session('message_tambah_absen'))
                  <div class="alert alert-success">
                      {{session('message_tambah_absen')}}
                  </div>
            @endif
              <div>
                <label>ID Pegawai</label><i style="float: left">
                <select name="id_pegawai" class="select-band" autofocus="">
                  @foreach ($data_pegawai as $pegawai)
                    <option value="{{ $pegawai->id_pegawai }}">{{ $pegawai->nama_pegawai }}</option>
                  @endforeach
                </select></i>
              </div>
              <div>
                <label>Jobdesk</label><i style="float: left">
                <select name="id_job" class="select-band" autofocus="">
                  @foreach ($data_job as $job)
                    <option value="{{ $job->id_job }}">{{ $job->nama_job }}</option>
                  @endforeach
                </select></i>
              </div>
              </section>
            <div class="d-flex ">
              <button type="submit">
                KIRIM
              </button> 
            </div> 
          </form>
        </div>
      </div>
    </div>
  </section>

  @endsection