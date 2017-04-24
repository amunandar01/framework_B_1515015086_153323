<div class="form-group">
<label class="col-sm-2 control-label" id="dosen_id">ID dosen</label>

<div class="col-sm-10">
{!! Form::select('dosen_id',$dosen->listdosendannip(),null,['class'=>'form-control','id'=>'dosen_id','placeholder'=>"Dosen"]) !!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="dosen_matakuliah_id">matakuliah</label>
<div class="col-sm-10">
{!! Form::select('matakuliah_id',$matakuliah->listmatakuliah(),null,['class'=>'form-control','id'=>'matakuliah_id','placeholder'=>"matakuliah"]) !!}
</div>
</div>
