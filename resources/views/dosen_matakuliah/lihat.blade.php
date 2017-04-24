@extends('master')
@section('container')
<div class="panel panel-warning">
<div class="panel-heading">
<strong> <a href="{{ url('jadwal_matakuliah') }}"><i style="color: #8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail dosen matakuliah</strong>
</div>
	<table class="table">
		<tr>
			<td>Nama dosen</td>
			<td>:</td>
			<td>{{ $dosen_matakuliah->dosen->nama }}</td>
		</tr>
		<tr>
			<td>NIP dosen</td>
			<td>:</td>
			<td>{{ $dosen_matakuliah->dosen->nip }}</td>
		</tr>
		<tr>
			<td>nama matakuliah</td>
			<td>:</td>
			<td>{{ $dosen_matakuliah->matakuliah->title }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$dosen_matakuliah->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui</td>
			<td class="col-xs-1">:</td>
			<td>{{$dosen_matakuliah->updated_at}}</td>
		</tr>
	</table>
</div>
@stop