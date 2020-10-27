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
                                    <h4 class="header-title mb-3">Create Event</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    

                                <form method="post" action="{{ route('admin-event.store') }}" class="form-horizontal mt-4 mt-lg-0" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Title</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="title" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Date</label>
                                        <div class="col-md-10">
                                            <input type="date" class="form-control" name="event_date" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Image</label>
                                        <div class="col-md-10">
                                            <input type="file" class="form-control" name="image" value="">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="example-textarea">Body</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" required name="body" rows="8" id="example-textarea"></textarea>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Create </button>
                                    </div>
                                
                            </div>
                                    

                                </div>
                            </div>
                        </div>
                </div>            
            </div>
@endsection