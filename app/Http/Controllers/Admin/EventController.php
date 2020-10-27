<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::latest()->get();
        return view('admin.events',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'body' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:500',
            // 'category' => 'required'
        ]);

        if ($validator->fails()) {
            alert()->warning('WarningAlert','Validation Error');
            return back();
        }   
        $data = $request->all();
        $data['slug'] = Str::slug($request->title).'-'.md5(uniqid(rand(), true));
        $data['image'] =  $this->fileUpload($request->file('image'),'event');
        Event::create($data);
        alert()->success('SuccessAlert', 'Event Created Successfully');
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
        $event = Event::findorFail($id);
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'body' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:500',
            // 'category' => 'required'
        ]);

        if ($validator->fails()) {
            alert()->warning('WarningAlert','Validation Error');
            return back();
        }   
        $data = $request->all();
        $data['slug'] = Str::slug($request->title).'-'.md5(uniqid(rand(), true));
        if ($request->hasFile('image')) {
            if(!empty($event->image)) {
                unlink('event/'.$event->image);
            }
            $data['image'] =  $this->fileUpload($request->file('image'), 'event');
        }
        $event->update($data);
        alert()->success('SuccessAlert', 'Event Updated Successfully');
        return back();
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
            $event = Event::finorFail($id);
            $event->delete();
            if(!empty($event->image)) {
                unlink('event/'.$event->image);
            }
            alert()->success('SuccessAlert','Event deleted successful');
            return back();
        } catch (\Exception $e) {
            alert()->warning('WarningAlert',$e->getMessage());
            return back();
        }
    }
}