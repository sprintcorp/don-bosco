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
                                    <h4 class="header-title mb-3">Gallery Overview</h4>
                                     
                                </div>
                            </div>
                            <div class="col-md-2">
                               <a href="{{ route('admin-gallery.create') }}" class="btn btn-icon btn-success"> <i class="ti-camera"></i> Add images</a>
                            </div>
                        </div>
                        <div class="row">
                        @foreach($galleries as $gallery)
                            <div class="col-md-3">
                                <div class="card p-3" style="width: 100%;">
                                    <img src="{{ url('gallery/'.$gallery->image) }}" class="card-img-top" width="250" height="200">
                                    <div class="card-body">
                                        <form action="{{ route('admin-gallery.destroy',$gallery->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit " class="btn btn-icon btn-danger">
                                                    Delete
    {{--                                                <i class="icon wb-trash" aria-hidden="true"></i>--}}
                                                </button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="text-center">{{ $galleries->links() }}</div>
                    </div>
                </div>
            </div>
@endsection