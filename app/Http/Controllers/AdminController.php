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
        $u->name = $request->get('name');
        $u->email = $request->get('email');
        $u->access_admin = $request->has('access_admin');
        $u->access_overtime = $request->has('access_overtime');
        $u->access_parts = $request->has('access_parts');
        $u->access_repairs = $request->has('access_repairs');
        $u->access_reports = $request->has('access_reports');
        $u->access_scrape = $request->has('access_scrape');
        $u->access_xcharge = $request->has('access_xcharge');
        $u->location = $request->get('location');

        $u->save();

        return redirect()->action('AdminController@show_user', [$request->post('id')]);
    }
}
