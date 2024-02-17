@extends('master')

@section('konten')

    <div>
        <center>
            <h1>Data Pegawai</h1>
        </center>
        <center>
            <a href="{{ route('tambah_pegawai') }}">+ &nbsp; Tambah Pegawai</a>
            <br />
            <table>
                <thead>
                    <tr>
                        <th>Id Pegawai</th>
                        <th>Nama Pegawai</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Jabatan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_pegawai as $pegawai)
                    <tr>
                        <td>{{ $pegawai->id_pegawai }}</td>
                        <td>{{ $pegawai->nama_pegawai }}</td>
                        <td>{{ substr($pegawai->alamat, 0, 20) }}...</td>
                        <td>{{ $pegawai->jenis_kelamin }}</td>
                        <td>{{ $pegawai->jabatan }}</td>
                        <td>
                            <a href="{{ route('edit_pegawai', ['id_pegawai'=>$pegawai->id_pegawai]) }}">Edit</a> |
                            <a href="{{ route('proses_hapus_pegawai', ['id_pegawai'=>$pegawai->id_pegawai]) }}"
                                onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </center>
    </div>
@endsection
