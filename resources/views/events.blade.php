@extends('layouts.public')
@section('content')

    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="/">Home</a></h6>
                    <h6><span class="page-active">Events List</span></h6>
                    <div class="grid-or-list">
                        {{-- <ul>
                            <li><a href="events-grid.html"><i class="fa fa-th"></i></a></li>
                            <li><a href="events-list.html"><i class="fa fa-list"></i></a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <!-- Here begin Main Content -->
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-12">
                    @foreach ($events as $event)
                        <div class="list-event-item">
                            <div class="box-content-inner clearfix">
                                <div class="list-event-thumb">
                                    <a href="{{ route('event-page.show',$event->slug) }}">
                                        <img src="{{ url('event/'.$event->image) }}" alt="">
                                    </a>
                                </div>
                                <div class="list-event-header">
                                    <span class="event-place small-text"><i class="fa fa-globe"></i>109 Health</span>
                                    <span class="event-date small-text"><i class="fa fa-calendar-o"></i>
                                    {{ date('F, d Y', strtotime($event->event_date)) }}
                                    </span>
                                    <div class="view-details"><a href="{{ route('event-page.show',$event->slug) }}" class="lightBtn">View Details</a></div>
                                </div>
                                <h5 class="event-title"><a href="{{ route('event-page.show',$event->slug) }}">{{ $event->title }}</a></h5>
                                <p>{{ substr($event->body,0,250) }}...</p>
                            </div> <!-- /.box-content-inner -->
                        </div> <!-- /.list-event-item -->
                    @endforeach
                        
                         
                    </div> <!-- /.col-md-12 -->

                </div> <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="load-more-btn">
                            <a href="#">Click here to load more events</a>
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-8 -->

            <!-- Here begin Sidebar -->
           
    
        </div> <!-- /.row -->
    </div> <!-- /.container -->


@endsection