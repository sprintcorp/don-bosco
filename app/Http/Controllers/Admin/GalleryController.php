<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::latest()->paginate(20);
        return view('admin.galleries',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach($request->file('image') as $key => $image)
            {
                $name = time()  .$key. "file" .$image->getClientOriginalName();
                $image->move('gallery/', $name);
                $data = $name;
                $gallery = new Gallery();
                $gallery->image = $data;
                $gallery->save();
            }
                alert()->success('SuccessAlert','Gallery Image uploaded Successfully');
                return back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        try {
            $gallery = Gallery::findorFail($id);
            $gallery->delete();
            if(!empty($gallery->image)) {
                unlink('gallery/'.$gallery->image);
            }
            alert()->success('SuccessAlert','Gallery image deleted successful');
            return back();
        } catch (\Exception $e) {
            alert()->warning('WarningAlert',$e->getMessage());
            return back();
        }
    }
}