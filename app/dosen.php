<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    //
    protected $table = 'dosen';
    //protected $fillable = ['nama','nip','alamat','pengguna_id'];
    protected $guarded = ['id'];

    public function pengguna() //membuat fungsi dengan nama pengguna
    {
    	return $this->belongsTo(pengguna::class); //sintaks ini berfungsi untuk mendekllarasikan relasi dari model dosen dan model pengguna. dengan nilai return belongsTO model pengguna. sehingga kita bisa mengakses isi dari tabel pengguna melalui model dosen,begitu pula sebaliknya.
    }
    public function dosen_matakuliah() // membuat fungsi dengan nama dosen_matakuliah
    {
    	return $this->hasMany(dosen_matakuliah::class); //sintaks ini fungsinya untuk menyatakan relasi dari model dosen dan model dosen_matakuliah. sehingga kita bisa mngakses tabel dosen_matakuliah melalui model dosen, begitu pula sebaliknya. sintaks hasmany menandakan bahwa relasinya adalah one to many.
    }
    public function listdosendannip()
    {
        $out = [];
        foreach ($this->all() as $dosen)
        {
            $out[$dosen->id] = "{$dosen->nama} ({$dosen->nip})";
        }
        return $out;
    }
}
