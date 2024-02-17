@extends('master')

@section('konten')
<div class="container px-0">
    <div class="heading_container ">
      <h2 class="">
        EDIT PEGAWAI <br>{{ $data_pegawai->nama_pegawai }}
      </h2>
      <a href="{{ route('pegawai') }}"><- &nbsp; Kembali</a>
    </div>
  </div>
<section class="contact_section ">
    <div class="container container-bg"> 
      <div class="row">
        <div class="col-md-6 col-lg-5 px-0">
            <form action="{{ route('proses_edit_pegawai') }}" method="post" enctype="multipart/form-data">
            @csrf
              <section class="base">
                @if(session('message_edit_pegawai'))
                  <div class="alert alert-success">
                      {{session('message_edit_pegawai')}}
                  </div>
            @endif
              <div>
                <input type="hidden" name="id_pegawai" value="{{ $data_pegawai->id_pegawai }}"  />
              </div>
                <div>
                  <label>Nama Pegawai</label>
                  <input type="text" name="nama_pegawai" value="{{ $data_pegawai->nama_pegawai }}" autofocus="" required="" />
                </div>
                <div>
                    <label>Alamat</label>
                   <textarea name="alamat" rows="4" cols="42">{{ $data_pegawai->alamat }}</textarea>
                </div>
                <div>
                  <label>Jenis Kelamin</label><i style="float: left">
                  <select name="jenis_kelamin" class="select-band" autofocus="" required="">
                    <option>Perempuan</option>
                    <option>Laki-laki</option>
                  </select></i>
                </div>
                <div>
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" value="{{ $data_pegawai->jabatan }}" autofocus="" required="" />
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