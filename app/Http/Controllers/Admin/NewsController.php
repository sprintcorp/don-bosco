<?php

namespace App\Http\Controllers\Admin;

use App\News;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::latest()->get();
        $categories = Category::latest()->get();
        return view('admin.news',compact('news','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
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
            'category_id' => 'required'
        ]);

        if ($validator->fails()) {
            alert()->warning('WarningAlert','Validation Error');
            return back();
        }   
        $data = $request->all();
        $data['slug'] = Str::slug($request->title).'-'.md5(uniqid(rand(), true));
        $data['image'] =  $this->fileUpload($request->file('image'),'news');
        News::create($data);
        alert()->success('SuccessAlert', 'News Created Successfully');
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
        $news = News::findorFail($id);
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'body' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:500',
            'category_id' => 'required'
        ]);

        if ($validator->fails()) {
            alert()->warning('WarningAlert','Validation Error');
            return back();
        }   
        $data = $request->all();
        $data['slug'] = Str::slug($request->title).'-'.md5(uniqid(rand(), true));
        if ($request->hasFile('image')) {
            if(!empty($news->image)) {
                unlink('news/'.$news->image);
            }
            $data['image'] =  $this->fileUpload($request->file('image'), 'news');
        }
        $news->update($data);
        alert()->success('SuccessAlert', 'News Updated Successfully');
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
            $news = News::finorFail($id);
            $news->delete();
            if(!empty($news->image)) {
                unlink('news/'.$news->image);
            }
            alert()->success('SuccessAlert','News deleted successful');
            return back();
        } catch (\Exception $e) {
            alert()->warning('WarningAlert',$e->getMessage());
            return back();
        }
    }
}