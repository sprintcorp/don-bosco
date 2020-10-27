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
                                    <h4 class="header-title mb-3">News Overview</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                {{-- <th></th> --}}
                                                <th width="20%">Title</th>
                                                <th width="35%">Body</th>
                                                <th>Image</th>
                                                <th>Category</th>
                                                <th width="10%">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($news as $key => $info)
                                            <tr>
                                                {{-- <td>{{ $key+1 }}</td> --}}
                                                <td>{{ $info->title }}</td>
                                                <td>{{ substr($info->body,0,250) }}...</td>
                                                <td><img src="{{ url('news/'.$info->image) }}" width="170" height="150"></td>
                                                <td>{{ $info->news_category->name }}</td>
                                                <td class="p-3">
                                                <div class="row">
                                                <button data-toggle="modal" class="mr-3" data-target="#exampleModal{{ $info->id }}">
                                                    <i class="ti-pencil">
                                                    </i>
                                                </button>
                                                    <form action="{{ route('admin-news.destroy',$info->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    <button type="submit">
                                                    <i class="ti-trash"></i>
                                                    </button>
                                                    </form>
                                                </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            </div>



@foreach ($news as $info)
  <div class="modal fade" id="exampleModal{{ $info->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">News Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('admin-news.update',$info->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
          <div class="form-group row">
            <label  class="col-2 form-label">Title:</label>
            <div class="col-md-10">
            <input type="text" class="form-control" value="{{ $info->title }}" name="title">
            </div>
          </div>
          <div class="form-group row">
                <label class="col-2 form-label">Category </label>
                <div class="col-md-10" >
                     <select class="form-control" name="category">
                     
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $info->category ? 'selected' :'' }}> 
                        {{ $category->name }}
                        </option>
                        
                     @endforeach
                     {{-- <option selected>hello</option> --}}
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 form-label">Image</label>
                <div class="col-md-10">
                    <input type="file" class="form-control" name="image" value="">
                </div>
            </div>


          <div class="form-group row">
            <label for="message-text" class="col-2 form-label">Body:</label>
            <div class="col-md-10">
            <textarea class="form-control" name="body" id="message-text" style="height:300px">{{ $info->body }}</textarea>
            </div>
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
                </div>            
            </div>
@endsection