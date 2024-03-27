@extends('layouts.app')
  
@section('title', 'Edit Pengajuan')
  
@section('contents')
    <h1 class="mb-0">Edit Pengajuan</h1>
    <hr />
    <form action="{{ route('pengajuans.update', $pengajuan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $pengajuan->nama }}">
            </div>
            <div class="col">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $pengajuan->alamat }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">No. Telepon</label>
                <input type="text" name="no_telp" class="form-control" placeholder="No. Telp" value="{{ $pengajuan->no_telp }}">
            </div>
            <div class="col">
                <label class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option value="Laki-laki" @if($pengajuan->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
                    <option value="Perempuan" @if($pengajuan->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label"   >Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="{{ $pengajuan->tempat_lahir }}">
            </div>
            <div class="col">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{ $pengajuan->tanggal_lahir }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" value="{{ $pengajuan->pekerjaan }}">
            </div>
            <div class="col">
                <label class="form-label">Status</label>
                <select name="status" class="form-control">
                    <option value="Belum Menikah" @if($pengajuan->status == 'Belum Menikah') selected @endif>Belum Menikah</option>
                    <option value="Menikah" @if($pengajuan->status == 'Menikah') selected @endif>Menikah</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Kewarganegaraan</label>
                <input type="text" name="kewarganegaraan" class="form-control" placeholder="Kewarganegaraan" value="{{ $pengajuan->kewarganegaraan }}">
            </div>
            <div class="col">
                <label class="form-label">Agama</label>
                <input type="text" name="agama" class="form-control" placeholder="Agama" value="{{ $pengajuan->agama }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-6">
                <label class="form-label">Pendidikan Terakhir</label>
                <select name="pendidikan_terakhir" class="form-control">
                    <option value="SD" @if($pengajuan->pendidikan_terakhir == 'SD') selected @endif>SD</option>
                    <option value="SMP" @if($pengajuan->pendidikan_terakhir == 'SMP') selected @endif>SMP</option>
                    <option value="SMA" @if($pengajuan->pendidikan_terakhir == 'SMA') selected @endif>SMA</option>
                    <option value="D3" @if($pengajuan->pendidikan_terakhir == 'D3') selected @endif>D3</option>
                    <option value="S1" @if($pengajuan->pendidikan_terakhir == 'S1') selected @endif>S1</option>
                    <option value="S2" @if($pengajuan->pendidikan_terakhir == 'S2') selected @endif>S2</option>
                    <option value="S3" @if($pengajuan->pendidikan_terakhir == 'S3') selected @endif>S3</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection