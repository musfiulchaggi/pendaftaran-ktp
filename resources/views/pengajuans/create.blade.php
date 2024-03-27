@extends('layouts.app')
  
@section('title', 'Buat Pengajuan')
  
@section('contents')
    <h1 class="mb-0">Tambah Pengajuan</h1>
    <hr />
    <form action="{{ route('pengajuans.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="col">
                <input type="text" name="alamat" class="form-control" placeholder="Alamat">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="no_telp" class="form-control" placeholder="No. Telp">
            </div>
            <div class="col">
                <select name="jenis_kelamin" class="form-control">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
            </div>
            <div class="col">
                <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan">
            </div>
            <div class="col">
                <select name="status" class="form-control">
                    <option value="Belum Menikah">Belum Menikah</option>
                    <option value="Menikah">Menikah</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="kewarganegaraan" class="form-control" placeholder="Kewarganegaraan">
            </div>
            <div class="col">
                <input type="text" name="agama" class="form-control" placeholder="Agama">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <select name="pendidikan_terakhir" class="form-control">
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="D3">D3</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection