<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Content;
use App\Visitor;
use App\kontakModel;

class Admin extends Controller
{
    public function index()
    {
        if ( ! session()->get('logged_in'))
        {
            return redirect()->route('login');
        }
        // visitor
        $visitor = new Visitor;
        $countVisitor = $visitor::select('id')->get();
        $countVisitor = count($countVisitor);
        // users
        $users = count(DB::table('users')->orderBy('id', 'desc')->get());
        $kontak = count(kontakModel::all());
    	return view('admin.dashboard', ['visitor' => $countVisitor, 'users' => $users, 'kontak' => $kontak]);
    }

    public function users()
    {
        if ( ! session()->get('logged_in'))
        {
            return redirect()->route('login');
        }
    	$users = DB::table('users')->orderBy('id', 'desc')->get();
    	return view('admin.users', ['users' => $users]);
    }

    public function contact()
    {
        if ( ! session()->get('logged_in'))
        {
            return redirect()->route('login');
        }
        $kontak = kontakModel::orderBy('id', 'desc')->get();
    	return view('admin.contact', ['kontak' => $kontak]);
    }

    public function setting()
    {
        if ( ! session()->get('logged_in'))
        {
            return redirect()->route('login');
        }
    	return view('admin.setting');
    }
}
