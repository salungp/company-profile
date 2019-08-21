<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
    public function index()
    {
    	return view('public.home');
    }

    public function register(Request $req)
    {
    	$validateUser = $req->validate([
    		'name' => 'required|max:256|min:4',
    		'email' => 'required|email|max:256',
    		'password' => 'required|min:8'
    	]);
    	$dataUser = [
    		'name' => $req->input('name'),
    		'email' => $req->input('email'),
    		'password' => password_hash($req->input('password'), PASSWORD_DEFAULT)
    	];
    	DB::table('users')->insert($dataUser);
    	return redirect()->route('login')->with('alert-success', 'Registrasi berhasil silahkan log in terlebih dahulu.');
    }

    public function login(Request $req)
    {
    	$validateUser = $req->validate([
    		'email' => 'required|email',
    		'password' => 'required'
    	]);
    	$validateEmail = DB::table('users')->where('email', $req->input('email'))->first();
    	if ($validateEmail)
    	{
    		if (password_verify($req->input('password'), $validateEmail->password))
    		{
    			$req->session()->put('logged_in', true);
    			$req->session()->put('user_id', $validateEmail->id);
    			return redirect()->route('home');
    		} else {
    			return redirect()->route('login')->with('alert-danger', 'Maaf password anda salah!');
    		}
    	} else {
    		return redirect()->route('login')->with('alert-danger', 'Maaf password anda salah!');
    	}
    }

    public function userExit(Request $req)
    {
    	$req->session()->forget('logged_in');
    	$req->session()->forget('user_id');
    	return redirect()->route('login');
    }
}
