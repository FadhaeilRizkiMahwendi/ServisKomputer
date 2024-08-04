<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Komputer;

class KomputersController extends Controller
{
    public function index()
    {
        $komputers = Komputer::paginate(9);
        return view('user.komputers', compact('komputers'));
    }
}
