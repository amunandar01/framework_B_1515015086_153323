@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh data dosen matakuliah</strong>
		<a href="{{ url('dosen_matakuliah/tambah') }}" class="btn btn-xs btn-primary pull-right"> <i class="fa fa-plus"></i>
		dosen matakuliah</a>

		<div class="clearfix"></div>
		</div>

		<table class="table">
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama Dosen</th>
					<th>NIP</th>
					<th>Nama Matakuliah</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>

				<?php $x=1;?>

				@foreach ($semuadosenmatakuliah as $dosen_mtk)
					<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $dosen_mtk->dosen->nama or 'nama kosong' }}</td>
					<td>{{ $dosen_mtk->dosen->nip or 'nim kosong' }}</td>
					<td>{{ $dosen_mtk->matakuliah->title or 'matakuliah kosong' }}</td>
					<td>
					<div class="btn-group" role="group">

			<a href="{{ url('dosen_matakuliah/edit/'.$dosen_mtk->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>

			<a href="{{ url('dosen_matakuliah/'.$dosen_mtk->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>

			<a href="{{ url('dosen_matakuliah/hapus/'.$dosen_mtk->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>

			</div>
			</td>
			</tr>
			@endforeach
			</tbody>
			</table>
	</div>
@stop			