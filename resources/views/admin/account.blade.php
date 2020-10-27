@extends('layouts.app')
@section('content')


            <div class="content-page">
                <div class="content">
                     @if(session('success_message'))
                        <div class="alert alert-success">
                            {{session('success_message')}}
                        </div>
                    @endif
                    <!-- Start container-fluid -->
                    <div class="container-fluid">                        
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title mb-3">Account Settings</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    

                                <form method="post" action="{{ route('admin-account.update',auth()->user()->id) }}" class="form-horizontal mt-4 mt-lg-0" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Email</label>
                                        <div class="col-md-10">
                                            <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Current password</label>
                                        <div class="col-md-10">
                                            <input type="password" class="form-control" id="old_password" name="old_password" value="" required>
                                            <span class="text-danger">{{$errors->first('old_confirmation')}}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">New password</label>
                                        <div class="col-md-10">
                                            <input type="password" class="form-control" id="new_password" name="new_password" value="" required>
                                            <span class="text-danger">{{$errors->first('new_confirmation')}}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Confirm new password</label>
                                        <div class="col-md-10">
                                            <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" value="" required>
                                            <span class="text-danger">{{$errors->first('new_password_confirmation')}}</span>
                                        </div>
                                    </div>
                                    
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary btn-block">Update </button>
                                    </div>
                                
                                </div>
                                    

                                </div>
                            </div>
                        </div>
                </div>            
            </div>
@endsection