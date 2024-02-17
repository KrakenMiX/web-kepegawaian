@extends('master')

@section('konten')
<div class="container px-0">
    <div class="heading_container ">
      <h2 class="">
        INPUT DATA JOBDESK
      </h2>
      <a href="{{ route('job') }}"><- &nbsp; Kembali</a>
    </div>
  </div>
<section class="contact_section ">
    <div class="container container-bg"> 
      <div class="row"> 
        <div class="col-md-6 col-lg-5 px-0">
            <form action="{{ route('proses_tambah_job') }}" method="post" enctype="multipart/form-data">
            @csrf
              <section class="base">
                @if(session('message_tambah_job'))
                  <div class="alert alert-success">
                      {{session('message_tambah_job')}}
                  </div>
            @endif
                <div>
                    <label>ID Job</label>
                    <input type="text" name="id_job" autofocus="" required="" />
                </div>
                <div>
                  <label>Nama job</label>
                  <input type="text" name="nama_job" autofocus="" required="" />
                </div>
                <div>
                    <label>Deskripsi</label>
                   <textarea name="deskripsi" rows="4" cols="42"></textarea>
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