<?php

namespace App\Http\Controllers;

use App\Models\Bitacora;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $bitacoras = Bitacora::all();
        return view('dashboard', [
            'bitacoras' => $bitacoras
        ]);
    }
}
