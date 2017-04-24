<div class="form-group">
<label class="col-sm-2 control-label" id="mahasiswa_id">ID Mahasiswa</label>

<div class="col-sm-10">
{!! Form::select('mahasiswa_id',$mahasiswa->listmahasiswadannim(),null,['class'=>'form-control','id'=>'mahasiswa_id','placeholder'=>"Mahasiswa"]) !!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="dosen_matakuliah_id">matakuliah</label>
<div class="col-sm-10">
{!! Form::select('dosen_matakuliah_id',$dosen_matakuliah->listdosenmatakuliah(),null,['class'=>'form-control','id'=>'dosen_matakuliah_id','placeholder'=>"matakuliah"]) !!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="ruangan_id">id_Ruangan</label>
<div class="col-sm-10">
{!! Form::select('ruangan_id',$ruangan->lists('title','id'),null,['class'=>'form-control','id'=>'ruangan_id','placeholder'=>"Ruangan"]) !!}
</div>
</div>