@extends('layouts.app')
@section('content')


            <div class="content-page">
                <div class="content">

                    <!-- Start container-fluid -->
                    <div class="container-fluid">                        
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title mb-3">Categories Overview</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Name</th>
                                                <th>News</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody>
                                        @foreach ($categories as $key=> $category)
                                           <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->news->count() }}</td>
                                                 <td class="p-3">
                                                <div class="row">
                                                <button data-toggle="modal" class="mr-3" data-target="#exampleModal{{ $category->id }}">
                                                    <i class="ti-pencil">
                                                    </i>
                                                </button>
                                                    <form action="{{ route('admin-category.destroy',$category->id) }}" method="post">
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



@foreach ($categories as $category)
  <div class="modal fade" id="exampleModal{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Category Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('admin-category.update',$category->id) }}" method="post">
            @csrf
            @method('PATCH')
          <div class="form-group row">
            <label  class="col-2 form-label">Name:</label>
            <div class="col-md-10">
            <input type="text" class="form-control" value="{{ $category->name }}" name="name">
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
            </div>
@endsection