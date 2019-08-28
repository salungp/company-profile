<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Visitor;
use App\Testimonial;
use App\Content;
use App\Pricing;

class Home extends Controller
{
    public function index()
    {
        $visitor = new Visitor;
        $visitor->ip = @$_SERVER['REMOTE_ADDR'];
        $visitor->browser = @$_SERVER['HTTP_USER_AGENT'];
        $visitor->save();
        $content = Content::where('category', 'diskon')->first();
        $testimoni =  Testimonial::orderBy('id', 'desc')->get();
        $banner = Content::where('category', 'banner')->first();
        $kontak = Content::where('category', 'footer')->first();
        $testimonial = Content::where('category', 'testimonial')->first();
        $section = Content::where('category', 'section')->get();
        $pricing = Pricing::get();
    	return view('public.home', ['banner' => $banner, 'testimoni' => $testimoni, 'diskon' => $content, 'testimonial' => $testimonial, 'kontak' => $kontak, 'section' => $section, 'pricing' => $pricing]);
    }

    public function login(Request $req)
    {
    	$validateUser = $req->validate([
    		'email'    => 'required|email',
    		'password' => 'required'
    	]);
    	$validateEmail = DB::table('users')->where('email', $req->input('email'))->first();
    	if ($validateEmail)
    	{
    		if (password_verify($req->input('password'), $validateEmail->password))
    		{
    			$req->session()->put('logged_in', true);
    			$req->session()->put('user_id', $validateEmail->id);
    			return redirect()->route('admin');
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
