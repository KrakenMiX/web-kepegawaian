@extends('master')

@section('konten')

    <div>
        <center>
            <h1>Data Absen</h1>
        </center>
        <center>
            <a href="{{ route('tambah_absen') }}">+ &nbsp; Tambah Pegawai</a>
            <br />
            <table>
                <thead>
                    <tr>
                        <th>Id Absen</th>
                        <th>Nama Pegawai</th>
                        <th>Id Jobdesk</th>
                        <th>Waktu absen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_absen as $absen) 
                    <tr>
                        <td>{{ $absen->id_absen }}</td>
                        <td>{{ $absen->nama_pegawai }}</td>
                        <td>{{ $absen->id_job }}</td>
                        <td>{{ $absen->waktu }}</td>
                        <td>
                            <a href="{{ route('lihat_absen', ['id_absen'=>$absen->id_absen]) }}">Lihat</a> |
                            <a href="{{ route('proses_hapus_absen', ['id_absen'=>$absen->id_absen]) }}"
                                onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </center>
    </div>
@endsection
