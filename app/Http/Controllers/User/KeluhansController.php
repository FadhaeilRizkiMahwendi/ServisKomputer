<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Keluhan;
use Illuminate\Http\Request;

class KeluhansController extends Controller
{
    public function index()
    {
        $keluhans = Keluhan::with(['komputer', 'customer', 'pegawai'])->paginate(9);
        return view('user.keluhans', compact('keluhans'));
    }
}
