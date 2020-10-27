<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.account');
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
        $user = User::findorFail($id);
        $user->email= $request['email']; 
        if($request['old_password'] != "") {
            if (!(Hash::check($request['old_password'], Auth::user()->password))) {
                alert()->warning('WarningAlert','Your current Password Does not match the former password');
                return back();
            }

            if (strcmp($request['old_password'], $request['new_password']) == 0) {
                alert()->warning('WarningAlert','Your current Password Cannot be the same as your previous password');
                return back();
            }

            $this->validate($request, [
                'old_password' => 'required',
                'new_password' => 'required|string|min:8|confirmed'
            ]);

            $user->password = bcrypt($request['new_password']);
        }
        try {
            $user->save();
            alert()->success('SuccessAlert','Profile Updated Successfully');
            return back();
        }catch (\Exception $exception){
            alert()->warning('WarningAlert',$exception->getMessage());
            return back();
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