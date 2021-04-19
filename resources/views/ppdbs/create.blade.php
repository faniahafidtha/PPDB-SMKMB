@extends('ppdbs.layout') 
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <br><a class="btn btn-primary" href="/dashboard">Kembali</a><br>
            <br><h2>Tambah Data Baru Pendaftar SMK Merdeka Belajar</h2><br>
        </div>   
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('ppdbs.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <th><strong>Nama Lengkap</strong></th>
                <input type="text" name="nama" class="form-control">
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Jenis Kelamin</strong>
                    <select name="jk" class="form-control">
                        <option></option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Alamat</strong>
                <textarea class="form-control" style="height:150px" name="alamat"></textarea>
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Agama</strong>
                    <select name="agama" class="form-control">
                        <option></option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Asal Sekolah</strong>
                <input type="text" name="asal_sekolah" class="form-control">
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Minat Jurusan</strong>
                    <select name="minat_jurusan" class="form-control">
                        <option></option>
                        <option value="RPL">Rekayasa Perangkat Lunak</option>
                        <option value="TBG">Tata Boga</option>
                        <option value="TBS">Tata Busana</option>
                        <option value="MMD">Multimedia</option>
                    </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
   
</form>
@endsection