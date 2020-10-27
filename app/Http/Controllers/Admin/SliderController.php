<?php

namespace App\Http\Controllers\Admin;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::latest()->paginate(20);
        return view('admin.sliders',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        if ($request->file('image') == '') {
            alert()->error('ErrorAlert','Select an image to upload');
            return back();
        }
        $check = Slider::all();
        if ($check->count() + count($request->file('image')) <= 5) {
            foreach ($request->file('image') as $key => $image) {
                $name = time()  .$key. "file" .$image->getClientOriginalName();
                $image->move('slider/', $name);
                $data = $name;
                $slider = new Slider();
                $slider->image = $data;
                $slider->save();
            }
            alert()->success('SuccessAlert', 'Slider Image uploaded Successfully');
            return back();
        }else{
            alert()->warning('WarningAlert', 'Slider image exceeds limit of 5');
            return back();
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
        $slider = Slider::findorFail($id);
        if($request->hasFile('image')){
            try {

                if(!empty($slider->image)) {
                    unlink('slider/'.$slider->image);
                }
                $slider->image =  $this->fileUpload($request->file('image'),'slider');
                $slider->save();
                alert()->success('SuccessAlert','Slider '.$id.' Updated Successfully');
                return back();
            }catch (\Exception $e){
                alert()->warning('WarningAlert',$e->getMessage());
                return back();
            }
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
        try {
            $slider = Slider::findorFail($id);
            $slider->delete();
            if(!empty($slider->image)) {
                unlink('slider/'.$slider->image);
            }
            alert()->success('SuccessAlert','Slider image deleted successful');
            return back();
        } catch (\Exception $e) {
            alert()->warning('WarningAlert',$e->getMessage());
            return back();
        }
    }
}