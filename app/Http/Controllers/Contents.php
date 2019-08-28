<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Content;

class Contents extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ( ! session()->has('logged_in'))
        {
            return redirect()->route('login');
        }
        $content = new Content;
        $contents = $content::orderBy('id', 'desc')->get();
        return view('admin.content', ['contents' => $contents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       if ( ! session()->has('logged_in'))
        {
            return redirect()->route('login');
        }
        return view('admin.store_content'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title'       => 'required|max:256',
            'description' => 'required',
            'category'    => 'required'
        ]);
        $file     = $request->file('image');
        $title    = $request->title;
        $slug     = explode(' ', $request->title);
        $slug     = implode('-', $slug);
        $slug     = strtolower($slug);
        $fileName = uniqid().$file->getClientOriginalName();
        if ($file->move('content_images', $fileName))
        {
            $content = new Content;
            $content->title       = htmlspecialchars($request->title);
            $content->slug        = explode(' ', $request->title);
            $content->slug        = implode('-', $content->slug);
            $content->slug        = strtolower($content->slug);
            $content->description = $request->description;
            $content->icons       = $request->icon;
            $content->image       = $fileName;
            $content->link        = $request->link;
            $content->status      = 0;
            $content->author      = session()->has('user_id');
            $content->category    = $request->category;
            $content->save();
            return redirect()->route('contents.index')->with('alert-success', 'Content berhasil ditambahkan!');
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
        if ( ! session()->has('logged_in'))
        {
            return redirect()->route('login');
        }
        $data = Content::where('id', $id)->first();
        return view('admin.show_content', ['content' => $data]);
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
        // validate
        $validateData = $request->validate([
            'title'       => 'required|max:256',
            'description' => 'required',
            'category'    => 'required'
        ]);
        $file    = $request->file('image');
        $content = new Content;
        $oldData = $content::where('id', $id)->first();
        $slug    = explode(' ', $request->title);
        $slug    = implode('-', $slug);
        $slug    = strtolower($slug);
        // Check it if file is empty file replace with old file
        if (is_null($file) || empty($file))
        {
            $image = $oldData->image;
        } else {
            $image = uniqid().$file->getClientOriginalName();
            $file->move('content_images', $image) && File::delete('content_images/'.$oldData->image);
        }
        $author = session()->has('user_id');
        $data = [
            'title'       => $request->title,
            'slug'        => $slug,
            'description' => $request->description,
            'icons'       => $request->icons,
            'image'       => $image,
            'link'        => $request->link,
            'status'      => 0,
            'author'      => $author,
            'category'    => $request->category
        ];
        // run
        $content::find($id)->update($data);
        return redirect()->route('contents.index')->with('alert-success', 'Content berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = new Content;
        $data = $content::where('id', $id)->first();
        if (File::delete('content_images/'.$data->image))
        {
            $content::findOrFail($id)->delete();
            return redirect()->route('contents.index')->with('alert-success', 'Hapus data dengan id '.$id.' berhasil!');
        } else {
            $content::findOrFail($id)->delete();
            return redirect()->route('contents.index')->with('alert-danger', 'file "'.$data->image.'" not found!');
        }
    }
}
