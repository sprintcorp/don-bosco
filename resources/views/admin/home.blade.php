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
                                    <h4 class="header-title mb-3">Welcome !</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <div class="card-box widget-inline">
                                        <div class="row">
                                            <div class="col-xl-3 col-sm-6 widget-inline-box">
                                                <div class="text-center p-3">
                                                    <h2 class="mt-2"><i class="text-primary mdi mdi-access-point-network mr-2"></i> 
                                                    <b>{{ $news->count() }}</b></h2>
                                                    <p class="text-muted mb-0">News</p>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-sm-6 widget-inline-box">
                                                <div class="text-center p-3">
                                                    <h2 class="mt-2"><i class="text-teal mdi mdi-airplay mr-2"></i> <b>{{ $galleries->count() }}</b></h2>
                                                    <p class="text-muted mb-0">Gallery</p>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-sm-6 widget-inline-box">
                                                <div class="text-center p-3">
                                                    <h2 class="mt-2"><i class="text-info mdi mdi-black-mesa mr-2"></i> <b>{{ $event->count() }}</b></h2>
                                                    <p class="text-muted mb-0">Event</p>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-sm-6">
                                                <div class="text-center p-3">
                                                    <h2 class="mt-2"><i class="text-danger mdi mdi-cellphone-link mr-2"></i> <b>{{ $slide->count() }}</b></h2>
                                                    <p class="text-muted mb-0">Slides</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row -->

                         <!-- start  -->
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title mb-3">Create News and Categories</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-4">
                                <form method="post" action="{{ route('admin-category.store') }}" class="form-horizontal">
                                @csrf
                                    <div class="form-group row">
                                        
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="name" placeholder="Category name" required>
                                        </div>
                                    </div>
                                    
                                    <div class="">
                                       <button type="submit" class="btn btn-primary btn-block">Create category</button>
                                    </div>
                                </form>
                            </div>
                            <!-- end -->

                            <div class="col-lg-8">
                                <form method="post" action="{{ route('admin-news.store') }}" class="form-horizontal mt-4 mt-lg-0" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Title</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="title" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Image</label>
                                        <div class="col-md-10">
                                            <input type="file" class="form-control" name="image" value="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Category</label>
                                        <div class="col-md-10" >
                                            <select class="form-control" name="category_id">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
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
                                </form>
                            </div>

                        </div>
                        <!-- end row -->
                       
                        <!-- end row -->

                    </div>
                    <!-- end container-fluid -->

                    

                    <!-- Footer Start -->
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    2020 - {{ date('Y') }} &copy;  <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- end Footer -->

                </div>
                <!-- end content -->
</div>


@endsection