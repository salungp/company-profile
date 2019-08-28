<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class Profile extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('users')->where('id', session()->has('user_id'))->first();
        return view('profile.index', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateUser = $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $oldData = DB::table('users')->where('id', $id)->first();

        $file = $request->file('image');

        if ($file == null)
        {
            return redirect()->route('profile.index')->with('alert-danger', 'Your file is required!');
        }
        else if ($file->move('users', strtolower(str_replace(' ', '-', $request->name)).date('d-m-Y_H:i:s').'.'.$file->getClientOriginalExtension()) && File::delete('users/'.$oldData->profile_image))
        {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'profile_image' => strtolower(str_replace(' ', '-', $request->name)).date('d-m-Y_H:i:s').'.'.$file->getClientOriginalExtension(),
                'role_id' => 1
            ];
            DB::table('users')->where('id', $id)->update($data);
            return redirect()->route('profile.index')->with('alert-success', 'Your data successfully updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
