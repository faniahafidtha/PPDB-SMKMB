@extends('ppdbs.layout')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>PPDB PDF</title>
</head>
	<br>
	<p align="center"><b>Data PPDB SMK Merdeka Belajar</b></p>
	<div class="col-md-12">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No Registrasi</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Asal Sekolah</th>
                    <th scope="col">Minat Jurusan</th>
            </thead>
            @php $i=1 @endphp
			@foreach ($ppdbs as $ppdb)
            <tr bgcolor="white">
                <td>{{ $i++ }}</td>
                <td>{{ $ppdb->nama }}</td>
                <td>{{ $ppdb->jk }}</td>
                <td>{{ $ppdb->alamat }}</td>
                <td>{{ $ppdb->agama }}</td>
                <td>{{ $ppdb->asal_sekolah }}</td>
                <td>{{ $ppdb->minat_jurusan }}</td>
            </tr>
            @endforeach
        </table>
    </div>
	<script type="text/javascript">
    window.print();
</script>

</body>

<h6 align="right">
	@php $tgl=date('d-m-Y'); @endphp
   	Bogor, {{$tgl}} 
   	</br>
	Kepala SMK
	<br><br><br><br><br>
</h6>

<h6 align="right"> 
TTD
</html>
@endsection