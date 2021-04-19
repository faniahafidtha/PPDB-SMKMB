@extends('ppdbs.layout')   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br><a class="btn btn-primary" href="{{ route('ppdbs.index') }}">Kembali</a><br>
                <br> <h2>Edit Data Pendaftar SMK Merdeka Belajar</h2>
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
  
    <form action="{{ route('ppdbs.update',$ppdb->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="form-group">
                    <strong>Nama</strong>
                    <input type="text" name="nama" value="{{ $ppdb->nama }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="form-group">
                    <strong>Jenis Kelamin</strong>
                    <select name="jk" class="form-control">
                        <option></option>
                        <option value="L" {{$ppdb->jk === "L" ? "selected" : ""}}>Laki - Laki</option>
                        <option value="P" {{$ppdb->jk === "P" ? "selected" : ""}}>Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="form-group">
                    <strong>Alamat</strong>
                    <textarea class="form-control" style="height:150px" name="alamat">{{ $ppdb->alamat }}</textarea>
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="form-group">
                    <strong>Agama</strong>
                    <select name="agama" class="form-control">
                        <option></option>
                        <option value="Islam" {{$ppdb->agama === "Islam" ? "selected" : ""}}>Islam</option>
                        <option value="Kristen" {{$ppdb->agama === "Kristen" ? "selected" : ""}}>Kristen</option>
                        <option value="Buddha" {{$ppdb->agama === "Buddha" ? "selected" : ""}}>Buddha</option>
                        <option value="Hindu" {{$ppdb->agama === "Hindu" ? "selected" : ""}}>Hindu</option>
                        <option value="Konghucu" {{$ppdb->agama === "Konghucu" ? "selected" : ""}}>Konghucu</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="form-group">
                    <strong>Asal Sekolah</strong>
                    <input type="text" name="asal_sekolah" value="{{ $ppdb->asal_sekolah }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="form-group">
                    <strong>Minat Jurusan</strong>
                    <select name="minat_jurusan" class="form-control">
                        <option></option>
                        <option value="RPL" {{$ppdb->minat_jurusan === "RPL" ? "selected" : ""}}>Rekayasa Perangkat Lunak</option>
                        <option value="TBG" {{$ppdb->minat_jurusan === "TBG" ? "selected" : ""}}>Tata Boga</option>
                        <option value="TBS" {{$ppdb->minat_jurusan === "TBS" ? "selected" : ""}}>Tata Busana</option>
                        <option value="MMD" {{$ppdb->minat_jurusan === "MMD" ? "selected" : ""}}>Multimedia</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
   
    </form>
@endsection