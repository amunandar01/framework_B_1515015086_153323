<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwalmatakuliah extends Model
{
protected $table = 'jadwal_matakuliah';
protected $fillabe = ['mahasiswa_id','dosen_matakuliah_id','ruangan_id'];
}