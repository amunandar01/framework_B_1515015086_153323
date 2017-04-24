<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
    //
    protected $table = 'jadwal_matakuliah';
    protected $guarded = ['id'];
    //protected $fillable = ['mahasiswa_id','dosen_id','matakuliah_id'];

    public function mahasiswa() //membuat fungsi dengan nama mahasiswa
    {
    	return $this->belongsTo(mahasiswa::class);
    	//sintaks ini fungsinya untuk menyatakan relasi dari model jadwal_matakuliah dan model mahasiswa. jadi kita dapat mengakses model mahasiswa, meskipun pengaksesannya melalui model jadwal_matakuliah. jadi kita bisa menampilkan isi tabel mahasiswa, melalui model jadwal_matakuliah.
    }
    public function ruangan() //membuat fungsi dengan nama ruangan
    {
    	return $this->belongsTo(ruangan::class);
    	//sintaks ini fungsinya untuk menyatakan relasi dari model ruangan dan model jadwal_matakuliah. sehingga kita bisa mengakses model ruangan melalui model jadwal_matakuliah, begitu pula sebaliknya.

    }
    public function dosen_matakuliah() //membuat fungsi dengan nama dosen_matakuliah
    {
    	return $this->belongsTo(dosen_matakuliah::class);
    	//sintak ini menghubungkan antara model dosen_matakuliah dengan model jadwal_matakuliah, jadi kita bisa mengakses isi dari model dosen_matakuliah melalui model jadwal_matakuliah. begitu juga kebalikannya.
    }
}
