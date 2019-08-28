<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Testimonial;

class Testimonials extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = new Testimonial;
        $testimonials = $data::orderBy('id', 'desc')->get();
        return view('admin.testimonial', ['testimonials' => $testimonials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.store_testimonial');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateUser = $request->validate([
            'name'    => 'required|max:256',
            'email'   => 'required|email',
            'message' => 'required',
            'rate'    => 'required|max:5'
        ]);

        $file = $request->file('image');

        if (is_null($file))
        {
            return redirect()->route('testimonial.create')->with('alert-danger', 'Image is required!');
        } else if ($file->move('testimonials', $file->getClientOriginalName()))
        {
            $data = new Testimonial;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->company = $request->company;
            $data->message = $request->message;
            $data->image = $file->getClientOriginalName();
            $data->rate = $request->rate;
            $data->save();
            return redirect()->route('testimonial.index')->with('alert-success', 'Testimonial berhasil ditambah!');
        }
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
        $testimonial = new Testimonial;
        $data = $testimonial::where('id', $id)->first();
        return view('admin.show_testimonial', ['testimonial' => $data]);
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
            'name'    => 'required|max:256',
            'email'   => 'required|email',
            'message' => 'required',
            'rate'    => 'required|max:5'
        ]);

        $class = new Testimonial;

        $file = $request->file('image');

        $oldData = $class::where('id', $id)->first();
        if (is_null($file))
        {
            return redirect()->route('testimonial.edit', $id)->with('alert-danger', 'Your image is required!');
        } else if ($file->move('testimonials', $file->getClientOriginalName()) && File::delete('testimonials/'.$oldData->image))
        {
            $data = [
                'name'    => $request->name,
                'email'   => $request->email,
                'company' => $request->company,
                'message' => $request->message,
                'image'   => $file->getClientOriginalName(),
                'rate'    => $request->rate
            ];

            $class::where('id', $id)->update($data);
            return redirect()->route('testimonial.index')->with('alert-success', 'Your data successfully updated!');
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
        if (is_null($id))
        {
            return redirect()->route('testimonial.index')->with('alert-danger', 'Your data is empty!');
        }
        $testimonial = new Testimonial;
        $testimonial::where('id', $id)->delete();
        return redirect()->route('testimonial.index')->with('alert-success', 'Data with id '.$id.' successfully deleted!');
    }
}
