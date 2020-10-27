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
                            <div class="col-md-10">
                                <div>
                                    <h4 class="header-title mb-3">Slider Overview</h4>
                                     
                                </div>
                            </div>
                            <div class="col-md-2">
                               <a href="{{ route('admin-slider.create') }}" class="btn btn-icon btn-success"> <i class="ti-camera"></i> Add images</a>
                            </div>
                        </div>
                        <div class="row">
                        @foreach($sliders as $slider)
                            <div class="col-md-3">
                                <div class="card p-3" style="width: 100%;">
                                    <img src="{{ url('slider/'.$slider->image) }}" class="card-img-top" width="250" height="200">
                                    <div class="card-body">
                                    <div class="row">

                                        <form action="{{ route('admin-slider.destroy',$slider->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit " class="btn btn-icon btn-danger mr-5">
                                                    Delete
    {{--                                                <i class="icon wb-trash" aria-hidden="true"></i>--}}
                                                </button>
                                            </form>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $slider->id }}">Edit</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="text-center">{{ $sliders->links() }}</div>
                    </div>
                </div>

            @foreach($sliders as $slider)
            <div class="modal fade" id="exampleModal{{ $slider->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Slider {{ $slider->id }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin-slider.update',$slider->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Select Slider Image:</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                       
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                    </div>
                </div>
            </div>
             @endforeach


            </div>
@endsection