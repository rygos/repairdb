<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $usercount = User::all()->count();

        return view('admin.index', [
            'usercount' => $usercount,
        ]);
    }

    public function show_users(){
        $users = User::get();

        foreach ($users as $u){

        }

        return view('admin.show_users', [
            'users' => $users,
        ]);
    }

    public function show_user($user_id){

    }

    public function store_user(Request $request){

    }
}
