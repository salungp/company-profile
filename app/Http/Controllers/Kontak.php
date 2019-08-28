<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kontakModel;

class Kontak extends Controller
{
    public function store(Request $request)
    {
    	$validateUser = $request->validate([
    		'name'    => 'required|max:50',
    		'email'   => 'required',
    		'subjek'  => 'required',
    		'message' => 'required'
    	]);
    	$kontak = new kontakModel;
    	$kontak->name    = htmlspecialchars($request->name);
    	$kontak->email   = htmlspecialchars($request->email);
    	$kontak->subjek  = htmlspecialchars($request->subjek);
    	$kontak->message = htmlspecialchars($kontak->message);
    	$kontak->save();
    	return redirect()->route('home');
    }

    public function destroy($id)
    {
    	if (is_null($id))
    	{
    		return redirect()->route('contact')->with('alert-danger', 'Your data id is null!');
    	} else {
    		kontakModel::where('id', $id)->delete();
    		return redirect()->route('contact')->with('alert-success', 'Delete data successfully');
    	}
    }
}
