<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContrast;
use Illuminate\Auth\Authenticatable;

class pengguna extends Model implements AuthenticatableContrast
{
    use Authenticatable;
    //
    protected $table = 'pengguna';
    //protected $fillable = ['username','password'];
    protected $guarded = ['id'];
    
    public function mahasiswa() // membuat fungsi dengan nama mahasiswa
    {
    	return $this->hasOne(mahasiswa::class);
    	//sintaks ini menghubungkan antara model mahasiswa dengan model pengguna, yang artinya kita bisa mengakses model mahasiswa melalui model mpengguna. sintaks hasOne sendiri menandakan hubungan relasinya adalah one to one
    }
    public function dosen() //membuat fungs dengan nama dosen
    {
    	return $this->hasOne(dosen::class);
    	//sintaks ini menghubungkan antara model dosen dengan model pengguna, yang artinya kita bisa mengakses isi dari model dosen melalui model pengguna. sintaks hasOne sendiri menandakan hubungan relasinya adalah one to one
    }
    public function peran()
    {
    	return $this->belongsToMany(peran::class);
    }
}
