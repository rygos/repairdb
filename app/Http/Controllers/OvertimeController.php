<?php

namespace App\Http\Controllers;

use App\Models\Overtime;
use Illuminate\Http\Request;

class OvertimeController extends Controller
{
    public function index(){
        $data = Overtime::whereUserId(\Auth::id())->orderBy('created_at', 'asc')->get();

        return view('overtime.index', [
            'data' => $data,
        ]);
    }
}
