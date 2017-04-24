<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;
use App\dosen;

class RelationshipRebornController extends Controller
{
    public function ujihas()
    {
    	return dosen::has('dosen_matakuliah')->get();
    }

    public function ujidoesnthave()
    {
    	return dosen::doesnthave('dosen_matakuliah')->get();
    }
    public function ujidoesnthavemk()
    {
    	return matakuliah::doesnthave('dosen_matakuliah')->get();
    }
}