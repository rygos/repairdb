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
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $u = User::whereId($request->post('id'))->first();
        $u->access_admin = $request->post('access_admin',0);
        $u->access_overtime = $request->post('access_overtime',0);
        $u->access_parts = $request->post('access_parts',0);
        $u->access_repairs = $request->post('access_repairs',0);
        $u->access_reports = $request->post('access_reports',0);
        $u->access_scrape = $request->post('access_scrape',0);
        $u->access_xcharge = $request->post('access_xcharge',0);
        $u->save();

        return redirect()->action('AdminController@show_user', [$request->post('id')]);
    }
}
