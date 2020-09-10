<?php

namespace App\Http\Controllers;

use App\Models\Repair;
use Illuminate\Http\Request;

class FakturaController extends Controller
{
    public function index(){
        $data = Repair::orderByDesc('id')->get()->take(50);

        return view('faktura.index', [
            'data' => $data,
        ]);
    }
}
