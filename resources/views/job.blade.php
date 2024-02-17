@extends('master')

@section('konten')

    <div>
        <center>
            <h1>Data Jobdesk</h1>
        </center>
        <center>
            <a href="{{ route('tambah_job') }}">+ &nbsp; Tambah Jobdesk</a>
            <br />
            <table>
                <thead>
                    <tr>
                        <th>No Jobdesk</th>
                        <th>Nama Jobdesk</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_job as $job)
                    <tr>
                        <td>{{ $job->id_job }}</td>
                        <td>{{ $job->nama_job }}</td>
                        <td>{{ substr($job->deskripsi, 0, 20) }}...</td>
                        <td>
                            <a href="{{ route('edit_job', ['id_job'=>$job->id_job]) }}">Edit</a> |
                            <a href="{{ route('proses_hapus_job', ['id_job'=>$job->id_job]) }}"
                                onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </center>
    </div>
@endsection
