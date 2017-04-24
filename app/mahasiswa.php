<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    //protected $fillable = ['nim','nama','alamat','pengguna_id'];
    protected $guarded = ['id'];

    public function pengguna() //membuat fungsi dengan nama pengguna
    {
    	return $this->belongsTo(pengguna::class);
        //sintaks ini menghubungkan antara model mahasiswa dengan model pengguna, yang artinya kita bisa mengakses model pengguna melalui model mahasiswa. jadi isi dai tabel pengguna bisa kita tampilkan melalui model mahasiswa, begitu juga kebalikannya.
    }

    public function jadwal_matakuliah() //membuat fungsi dengan nama jadwal_matakuliah
    {
    	return $this->hasMany(jadwal_matakuliah::class);
        //sintaks ini menghubungkan antara model mahasiswa dengan model jadwal_matakuliah,artinya kita bisa mengakses model jadwal_matakuliah melalui model mahasiswa.sintaks hasmany menandakan bahwa relasinya adalah one to many.
    }

    public function getusernameAttribute()
    {
        return $this->pengguna->username;
    }
    
    public function listmahasiswadannim()
    {
        $out = [];
        foreach ($this->all() as $mhs)
        {
            $out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
        }
        return $out;
    }
}