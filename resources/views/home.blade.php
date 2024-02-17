@extends('master')

@section('konten')

    <div>
        <center>
            <h1>Selamat Datang {{Auth::user()->username}}</h1>
        </center>
    </div>

    <div class="col-lg-7 col-md-5 px-0">
        <div class="img_container">
          <div class="img-box">
              <img src="gambar-fandori/home_admin.png" alt="">
          </div>
        </div>
      </div>
@endsection