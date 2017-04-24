<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    //
    protected $table = 'matakuliah';
    //protected $fillable = ['title','keterangan'];
    protected $guarded = ['id'];

    public function dosen_matakuliah() //membuat fungsi dengan nama dosen_matakuliah
    {
    	return $this->hasMany(dosen_matakuliah::class);
    	//sintaks ini membuat hubungan antara model matakuliah dengan model dosen_matakuliah, yang artinya kita bisa mengakses isi model dosen_matakuliah melalui model matakuliah. jadi isi dari tabel dosen_matakuliah bisa kita tampilkan melalui model matakuliah, begitu juga kebalikannya.sintaks hasmany menandakan bahwa relasinya adalah one to many.
    }

    public function listmatakuliah()
    {
        $out = [];
        foreach ($this->all() as $mtk)
        {
            $out[$mtk->id] = "{$mtk->title}";
        }
        return $out;
    }
}
