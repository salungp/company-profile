<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor;

class Visitors extends Controller
{
    public function index()
	{
	    $visitor = new Visitor;
	    $data = $visitor::orderBy('id', 'desc')->get();
	    return view('admin.visitor', ['visitors' => $data]);
	}

	public function destroy($id)
	{
		Visitor::where('id', $id)->delete();
		return redirect()->route('visitor')->with('alert-success', 'Delete data successfully');
	}
}
