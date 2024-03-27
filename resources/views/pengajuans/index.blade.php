@extends('layouts.app')
  
@section('title', 'Home')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Pengajuan</h1>
        <a href="{{ route('pengajuans.create') }}" class="btn btn-primary">Add Pengajuan</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="table-responsive">

        <table class="table table-hover ">
            <thead class="table-primary">
                <tr style="font-size: small">
                    <th>#</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No. Tlp</th>
                    <th>Gender</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Pekerjaan</th>
                    <th>Status</th>
                    <th>Kewarganegaraan</th>
                    <th>Agama</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>+
                @if($pengajuan->count() > 0)
                    @foreach($pengajuan as $rs)
                        <tr>

                            <td class="align-middle">{{ $loop->iteration }}</td>
                            <td class="align-middle">{{ $rs->nama }}</td>
                            <td class="align-middle">{{ $rs->alamat }}</td>
                            <td class="align-middle">{{ $rs->no_telp }}</td>
                            <td class="align-middle">{{ $rs->jenis_kelamin }}</td>
                            <td class="align-middle">{{ $rs->tempat_lahir }}</td>
                            <td class="align-middle">{{ $rs->tanggal_lahir }}</td>
                            <td class="align-middle">{{ $rs->pekerjaan }}</td>
                            <td class="align-middle">{{ $rs->status }}</td>
                            <td class="align-middle">{{ $rs->kewarganegaraan }}</td>
                            <td class="align-middle">{{ $rs->agama }}</td>
                            <td class="align-middle">{{ $rs->pendidikan_terakhir }}</td>
                            <td class="align-middle">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('pengajuans.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                    <a href="{{ route('pengajuans.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('pengajuans.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger m-0">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="text-center" colspan="11">Pengajuan tidak ditemukan</td>
                    </tr>
                @endif
            </tbody>
        </table>

    </div>
@endsection