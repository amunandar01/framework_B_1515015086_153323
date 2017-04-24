<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwalmatakuliah;

class jadwalmatakuliahcontroller extends Controller
{
public function awal()
 {
	 return "hello dari jadwal matakuliah controller";
 }
 public function tambah()
 {
	 return $this->simpan();
 }
 public function simpan()
 {
	 $jadwalkul = new jadwalmatakuliah();
	 $jadwalkul->mahasiswa_id = '7';
	 $jadwalkul ->dosen_matakuliah_id = '1';
	 $jadwalkul ->ruangan_id = '1';
	 $jadwalkul->save();
	 return "data matkul dengan Id mahasiswa {$jadwalkul->mahasiswa_id} , dosen id {$jadwalkul->dosen_matakuliah_id} , dan ruangan id {$jadwalkul->ruangan_id} telah disimpan";
 }
}

