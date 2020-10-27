@extends('layouts.public')
@section('content')

<!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="/">Home</a></h6>
                    <h6><a href="{{ route('event-page.index') }}">Events List</a></h6>
                    <h6><span class="page-active">{{ $event->title }}</span></h6>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="event-container clearfix">
                            <div class="left-event-content">
                                <img src="{{ url('event/'.$event->image) }}" width="720" height="600" alt="">
                                <div class="event-contact">
                                   
                                </div>
                            </div> <br>
                            <div class="event-content">
                                <h2 class="event-title">{{ $event->title }}</h2> 
                                <span class="event-time">{{ date('F, d Y', strtotime($event->event_date)) }}</span>
                                <p>{{ $event->body }}</p>
                                <div class="google-map-canvas" id="map-canvas" style="height: 210px;">
                                </div>
                            </div> <!-- /.right-event-content -->
                        </div> <!-- /.event-container -->
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.col-md-8 -->

            <!-- Here begin Sidebar -->
            <div class="col-md-4">

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Other Events</h4>
                    </div> <!-- /.widget-main-title -->
                    <div class="widget-inner">
                    @foreach ($random as $others)
                        <div class="event-small-list clearfix">
                                    <div class="calendar-small">
                                        <span class="s-month">{{ date('M', strtotime($others->event_date)) }}</span>
                                        <span class="s-date">{{ date('d', strtotime($others->event_date)) }}</span>
                                    </div>
                                    <div class="event-small-details">
                                        <h5 class="event-small-title"><a href="{{ route('event-page.show',$others->slug) }}">{{ substr($others->title,0,80) }}...</a></h5>
                                        {{-- <p class="event-small-meta small-text">Cramton Auditorium 9:00 AM to 1:00 PM</p> --}}
                                    </div>
                        </div>
                    @endforeach
                        
                        
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->


            </div> <!-- /.col-md-4 -->
    
        </div> 
    </div> 
    @endsection