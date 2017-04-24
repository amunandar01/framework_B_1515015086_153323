<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosenmatakuliah extends Model
{
protected $table = 'dosen_matakuliah';
protected $fillabe = ['dosen_id','matakuliah_id'];
}
