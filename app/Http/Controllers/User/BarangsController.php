<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;

class BarangsController extends Controller
{
    public function index()
    {
        $barang = Barang::paginate(9);
        return view('user.barangs', compact('barang'));
    }
}
