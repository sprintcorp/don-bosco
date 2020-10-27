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
                            <div class="col-md-12">
                                <div>
                                    <h4 class="header-title mb-3">Add Slider Images (N:B Maximum Slider image of Five)</h4>
                                     
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                               <form method="post" action="{{route('admin-slider.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="custom-file-picker">
                                                <div class="picture-container form-group">
                                                    <h4 class="info_text">Click to upload Slider images</h4>
                                                    <div class="picture">
                                                        <span class="icon"><i class="fas fa-file-upload"></i></span>
                                                        <input type="file" name="image[]" id="uploadFile" class="wizard-file" multiple>
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 37 37" xml:space="preserve">
                                                        <path class="circ path" style="fill:none;stroke:#77d27b;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;" d="M30.5,6.5L30.5,6.5c6.6,6.6,6.6,17.4,0,24l0,0c-6.6,6.6-17.4,6.6-24,0l0,0c-6.6-6.6-6.6-17.4,0-24l0,0C13.1-0.2,23.9-0.2,30.5,6.5z"></path>
                                                                                                    <polyline class="tick path" style="fill:none;stroke:#77d27b;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;" points="11.6,20 15.9,24.2 26.4,13.8 "></polyline>
                                                    </svg>
                                                    </div>
                                                    <div id="image_preview"></div>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                            <div class="col-md-12 col-lg-offset-2">
                                                <button type="submit" class="btn btn-primary btn-block">upload</button>
                                            </div>
                                        </div>
                                </form>
                            </div>                       
                        </div>
                    </div>
                </div>
            </div>
           
@endsection