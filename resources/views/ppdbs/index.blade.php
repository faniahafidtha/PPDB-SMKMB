@extends('ppdbs.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br><a class="btn btn-primary" href="/dashboard">Kembali</a><br><br>
                <h2>Data Pendaftar SMK Merdeka Belajar</h2>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No Registrasi</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Asal Sekolah</th>
            <th>Minat Jurusan</th>
            <th width="175px">Action</th>
        </tr>
        @foreach ($ppdbs as $ppdb)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $ppdb->nama }}</td>
            <td>{{ $ppdb->jk }}</td>
            <td>{{ $ppdb->alamat }}</td>
            <td>{{ $ppdb->agama }}</td>
            <td>{{ $ppdb->asal_sekolah }}</td>
            <td>{{ $ppdb->minat_jurusan }}</td>
            <td>
                <form action="{{ route('ppdbs.destroy',$ppdb->id) }}" method="POST" onsubmit="return confirm('Apakah yakin data akan di hapus?')">
   
                    <a class="btn btn-primary" href="{{ route('ppdbs.edit',$ppdb->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <tr>
        <th><a class="btn btn-danger" href="{{ route('cetak-ppdb') }}" target="_blank">Cetak Data</a></th>
   </tr>
    {!! $ppdbs->links() !!}
      
@endsection