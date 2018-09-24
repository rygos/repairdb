<?php

namespace App\Http\Controllers;

use App\Models\Repair;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = Repair::whereNotIn('closing_reason_id', [2])->orWhereNull('closing_reason_id')->orderBy('started_at')->get();

        return view('home.index', [
            'data' => $data
        ]);
    }
}
