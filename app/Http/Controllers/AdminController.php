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

        return view('admin.show_users', [
            'users' => $users,
        ]);
    }

    public function show_user($id){
        $user = User::whereId($id)->first();

        return view('admin.show_user', [
            'user' => $user,
        ]);
    }

    public function store_user(Request $request){

    }
}
