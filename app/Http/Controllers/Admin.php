<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin extends Controller
{
    public function index()
    {
    	return view('admin.dashboard');
    }

    public function content()
    {
    	return view('admin.content');
    }

    public function users()
    {
    	$users = DB::table('users')->get();
    	return view('admin.users', ['users' => $users]);
    }

    public function contact()
    {
    	return view('admin.contact');
    }

    public function setting()
    {
    	return view('admin.setting');
    }
}
