<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pricing;

class Pricings extends Controller
{
    public function index()
    {
    	$data = Pricing::orderBy('id', 'desc')->get();
    	return view('admin.pricing', ['data' => $data]);
    }

    public function create()
    {
    	if (count(Pricing::get()) >= 3)
    	{
    		return redirect()->route('pricing')->with('alert-danger', 'Maaf pricing maksimal 3!');
    		die;
    	}
    	
    	return view('admin.store_pricing');
    }

    public function destroy($id)
    {
    	Pricing::where('id', $id)->delete();
    	return redirect()->route('pricing')->with('alert-success', 'Data berhasil di hapus!');
    }

    public function store(Request $request)
    {
    	$validateInput = $request->validate([
    		'price' => 'required',
    		'link'  => 'required',
    		'icon'  => 'required'
    	]);

    	$db = new Pricing;
    	$db->type = $request->type;
    	$db->price = $request->price;
    	$db->mata_uang = $request->mata_uang;
    	$db->per_time = $request->per_time;
    	$db->features = $request->features;
    	$db->link = $request->link;
    	$db->icon = $request->icon;
    	$db->save();

    	return redirect()->route('pricing')->with('alert-success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
    	$data = Pricing::where('id', $id)->first();
    	return view('admin.show_pricing', ['data' => $data]);
    }

    public function update(Request $request)
    {
    	$validateInput = $request->validate([
    		'price' => 'required',
    		'link'  => 'required',
    		'icon'  => 'required'
    	]);

    	$id = $request->id;
    	$data = [
    		'type'      => $request->type,
    		'price'     => $request->price,
    		'mata_uang' => $request->mata_uang,
    		'per_time'  => $request->per_time,
    		'features'  => $request->features,
    		'link'      => $request->link,
    		'icon'      => $request->icon
    	];
    	Pricing::where('id', $id)->update($data);
    	return redirect()->route('pricing')->with('alert-success', 'Data berhasil di update!');
    }
}
