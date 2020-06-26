@extends('layout.app')
@section('breadcrumb')
<nav aria-label="braedcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item active" aria-current="page"> <a href="{{ route('poto.index') }}"></a></li>
<li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
</ol></nav>
@endsection
@section('content')
    <div class="container">
    <div class="row">
    <div class="col">
    <h1 class="text-center">Tambah Data<h1>
    </div></div>
    <div class="row">
        <div class="col-8 offset-2">
        <form action="{{ route('poto.store')}}" method="post">
        @csrf
        <div class="form-group">
        <label>Tanggal</label>
        <input type="text" class="form-control"name="tanggal">
        </div>
        <div class="form-group">
        <label>ID POST</label>
        <input type="text" class="form-control"name="id_pos">
        </div>
        <div class="form-group">
        <label>JUDUL</label>
        <input type="text" class="form-control"name="judul">
        </div>
        <div class="form-group">
        <label>KETERANGAN</label>
        <input type="text" class="form-control"name="keterangan">
        </div>
        <input type="submit" class="btn btn-success" value="Simpan">
        </form>
         </div>
    </div>
    </div> @endsection
