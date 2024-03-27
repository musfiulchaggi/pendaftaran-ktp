@extends('layouts.app')
  
@section('title', 'Show')
  
@section('contents')
    <h1 class="mb-0">Detail Pengajuan</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $pengajuan->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $pengajuan->alamat }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">No. Telepon</label>
            <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $pengajuan->no_telp }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $pengajuan->jenis_kelamin }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tempat Lahir</label>
            <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $pengajuan->tempat_lahir }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $pengajuan->tanggal_lahir }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $pengajuan->jenis_kelamin }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Status</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $pengajuan->status }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kewarganegaraan</label>
            <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $pengajuan->kewarganegaraan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Agama</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $pengajuan->agama }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-6 mb-3">
            <label class="form-label">Pendidikan Terakhir</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $pengajuan->pendidikan_terakhir }}" readonly>
        </div>
    </div>
@endsection