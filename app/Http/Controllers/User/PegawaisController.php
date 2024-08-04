<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaisController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::paginate(9);
        return view('user.pegawais', compact('pegawais'));
    }
}
