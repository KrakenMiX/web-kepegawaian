@extends('master')

@section('konten')
    <div class="container px-0">
        <div class="heading_container ">
            <h2 class="">
                LIHAT ABSEN {{ $data_absen->id_absen }}
            </h2>
        </div>
    </div>
    <section class="contact_section ">
        <div class="container container-bg">
            <div class="row">
                <div class="col-md-6 col-lg-5 px-0">
                    <form action="{{ route('absen') }}" enctype="multipart/form-data">
                        <section class="base">
                            <div>
                                <label>ID Pegawai</label>
                                <input type="text" name="id_pegawai" value="{{ $data_absen->id_pegawai }}" autofocus=""
                                    required="" disabled />
                            </div>
                            <div>
                                <label>Nama Pegawai</label>
                                <input type="text" name="nama_pegawai" value="{{ $data_absen->nama_pegawai }}"
                                    autofocus="" required="" disabled />
                            </div>
                            <div>
                                <label>ID Jobdesk</label>
                                <input type="text" name="id_job" value="{{ $data_absen->id_job }}" autofocus=""
                                    required="" disabled />
                            </div>
                            <div>
                                <label>Nama Jobdesk</label>
                                <input type="text" name="nama_job" value="{{ $data_absen->nama_job }}" autofocus=""
                                    required="" disabled />
                            </div>
                            <div>
                                <label>Waktu</label>
                                <input type="text" name="waktu" value="{{ $data_absen->waktu }}" autofocus=""
                                    required="" disabled />
                            </div>
                        </section>
                        <div class="d-flex ">
                            <button type="submit">
                                KEMBALI
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
