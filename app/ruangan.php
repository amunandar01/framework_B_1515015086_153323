<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    //
    protected $table = 'ruangan';
    //protected $fillable = ['tittle'];
    protected $guarded = ['id'];

    public function jadwal_matakuliah() //membuat fungsi dengan nama jadwal_matakuliah
    {
    	return $this->hasMany(jadwal_matakuliah::class);
    	//sintaks ini menghubungkan antara model ruangan dengan model jadwal_matakuliah, jadi kita bisa mengakses isi model jadwal_matakuliah melalui model ruangan. sintaks hasMany sendiri menandakan hubungan relasinya adalah many to many.
    }
}
