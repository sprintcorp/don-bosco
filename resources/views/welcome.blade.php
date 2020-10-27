@extends('layouts.public');
@section('content');

    <div class="container">
        <div class="row">
        @if(session('success_message'))
                        <div class="alert alert-success">
                            {{session('success_message')}}
                        </div>
                    @endif
            <div class="col-md-8">
                <div class="main-slideshow">
                    <div class="flexslider">
                        <ul class="slides">
                        @foreach ($slides as $slide)
                            <li>
                                <img src="{{ url('slider/'.$slide->image) }}" />
                                <div class="slider-caption">
                                    <h2><a href="#">Don Bosco</a></h2>
                                    <p></p>
                                </div>
                            </li>
                        @endforeach
                            
                           
                        </ul> <!-- /.slides -->
                    </div> <!-- /.flexslider -->
                </div> <!-- /.main-slideshow -->
            </div> <!-- /.col-md-12 -->
            
            <div class="col-md-4">
                <div class="widget-item">
                    <div class="request-information">
                        <h4 class="widget-title">Request Information</h4>
                        <form action="{{ route('event-page.store') }}" method="post" class="request-info clearfix"> 
                        @csrf
                            <div class="full-row">
                                <label for="cat">Event:</label>                
                                <div class="input-select">
                                    <select name="event" id="cat" class="postform">
                                        <option>-- Select Event--</option>
                                        
                                        @foreach ($allevents as $event)
                                            <option value="{{ $event->title }}">{{ $event->title }}</option>
                                        @endforeach
                                          
                                          
                                        </optgroup>
                                    </select>
                                </div> <!-- /.input-select -->  
                            </div> <!-- /.full-row -->

                            <div class="full-row">
                                <label for="yourname">Full Name:</label>
                                <input type="text" id="yourname" name="name">
                            </div> <!-- /.full-row -->

                            <div class="full-row">
                                <label for="email-id">Email Address:</label>
                                <input type="text" id="email-id" name="email">
                            </div> <!-- /.full-row -->
                            
                            <div class="full-row">
                                <div class="submit_field">
                                    <input class="mainBtn pull-right" type="submit" name="" value="Submit Request">
                                </div> <!-- /.submit-field -->
                            </div> <!-- /.full-row -->


                        </form> <!-- /.request-info -->
                    </div> <!-- /.request-information -->
                </div> <!-- /.widget-item -->
            </div> <!-- /.col-md-4 -->
        </div>
    </div>


    <div class="container">
        <div class="row">
            
            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-item">
                            <h2 class="welcome-text">Welcome to Don Bosco Secondary School, Obosi</h2>
                            <p style="align:justify">DBSS came into existence as a result of the good works that Don Bosco 
                            Training Institute Onitsha has been doing and is still doing since 1992 for
                            the citizens of our great nation Nigeria especially those coming from South
                            East region and beyond. Its trained students are successful wherever they are
                            posted in companies. As a result, many well meaning individuals, some of who 
                            are DBSS parents\guardians today solicited that Don Bosco Youth Centre also do
                            something for the younger ones. Salesians' consideration which reflected much 
                            on the situation and realities of the people living around Ibolo Obosi, Ugwuagba,
                            Awada, Okpoko and Fegge environs met the above request with a positive and favourable
                            consideration.With this, DBSS came into existence in the year 2007.<br> The fame with
                            which this school is known for today has been and is still attracting students of post
                            primary school ages from environments that are far from above mentioned ones. The curricular
                            and extra-curricular activities that the school has been engaging in both inside and outside
                            the school advertise the school even when such is not solicited for.<br>
                            <strong>As a mission school:</strong> Promote young people especially the less privileged, preparing them for life, enriching them culturally and professionally and instilling in them strong religious values.<br>

<strong>As a Catholic school:</strong> Instill the young the Christian values and to share in the mission of the Catholic Church to form genuine Christians. It is open to young people of all denominations and religions.<br>
<strong>As a Nigerian school:</strong> Endeavour to form upright and patriotic citizens imbued with authentic Nigerian values.<br>
<strong>As a Salesian school:</strong> Educates in the style of St. John Bosco through an educating community that seeks to form Good Christian and Honest Citizens.</p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

                <div class="row">
                    
                    <!-- Show Latest Blog News -->
                    <div class="col-md-6">
                        <div class="widget-main">
                            <div class="widget-main-title">
                                <h4 class="widget-title">Latest News</h4>
                            </div> <!-- /.widget-main-title -->
                            <div class="widget-inner">
                            @foreach ($news as $info )
                                <div class="blog-list-post clearfix">
                                    <div class="blog-list-thumb">
                                        <a href="{{ route('news-page.show',$info->slug) }}"><img src="{{ url('news/'.$info->image) }}" alt=""></a>
                                    </div>
                                    <div class="blog-list-details">
                                        <h5 class="blog-list-title"><a href="{{ route('news-page.show',$info->slug) }}">{{ $info->title }}</a></h5>
                                        <p class="blog-list-meta small-text"><span><a href="{{ route('news-page.show',$info->slug) }}">{{ $info->created_at->diffForHumans() }}</a></p>
                                    </div>
                                </div> <!-- /.blog-list-post -->
                            @endforeach
                                
                                
                            </div> <!-- /.widget-inner -->
                        </div> <!-- /.widget-main -->
                    </div> <!-- /col-md-6 -->
                    
                    <!-- Show Latest Events List -->
                    <div class="col-md-6">
                        <div class="widget-main">
                            <div class="widget-main-title">
                                <h4 class="widget-title">Events</h4>
                            </div> <!-- /.widget-main-title -->
                            <div class="widget-inner">
                            @foreach ($events as $event )
                                <div class="event-small-list clearfix">
                                    <div class="calendar-small">
                                        <span class="s-month">{{ date('M', strtotime($event->event_date)) }}</span>
                                        <span class="s-date">{{ date('d', strtotime($event->event_date)) }}</span>
                                    </div>
                                    <div class="event-small-details">
                                        <h5 class="event-small-title"><a href="{{ route('event-page.show',$event->slug) }}">{{ substr($event->title,0,80) }}...</a></h5>
                                        {{-- <p class="event-small-meta small-text">Cramton Auditorium 9:00 AM to 1:00 PM</p> --}}
                                    </div>
                                </div>
                            @endforeach
                                
                                
                            </div> <!-- /.widget-inner -->
                        </div> <!-- /.widget-main -->
                    </div> <!-- /.col-md-6 -->
                    
                </div> <!-- /.row -->
                
                {{-- <div class="row">
                    <div class="col-md-12">
                        <div class="widget-main">
                            <div class="widget-main-title">
                                <h4 class="widget-title">Our Campus</h4>
                            </div> <!-- /.widget-main-title -->
                            <div class="widget-inner">
                                <div class="our-campus clearfix">
                                    <ul>
                                        <li><img src="images/campus/campus-logo1.jpg" alt=""></li>
                                        <li><img src="images/campus/campus-logo2.jpg" alt=""></li>
                                        <li><img src="images/campus/campus-logo3.jpg" alt=""></li>
                                        <li><img src="images/campus/campus-logo4.jpg" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- /.widget-main -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row --> --}}

            </div> <!-- /.col-md-8 -->
            
            <!-- Here begin Sidebar -->
            <div class="col-md-4">

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Rector</h4>
                    </div>
                    <div class="widget-inner">
                        <div class="prof-list-item clearfix">
                           <div>
                                <img src="{{asset('images/rector.jpg')}}" width="300" height="250" alt="Profesor Name">
                            </div> <!-- /.prof-thumb -->
                            
                        </div> <!-- /.prof-list-item -->
                        <div class="prof-list-item clearfix">
                           
                            <div class="prof-details">
                                <h5 class="prof-name-list">DBSS as a Salesian</h5>
                                <p class="small-text">Educates in the style of St. John Bosco through an educating community that seeks to form Good Christian and Honest Citizens.</p>
                            </div> <!-- /.prof-details -->
                        </div> <!-- /.prof-list-item -->
                        <div class="prof-list-item clearfix">
                           <div class="prof-details">
                                <h5 class="prof-name-list">DBSS as a Mission School</h5>
                                <p class="small-text">We Promote young people especially the less privileged, preparing them for life, enriching them culturally and professionally 
                                and instilling in them strong religious values.</p>
                            </div> <!-- /.prof-details -->
                        </div> <!-- /.prof-list-item -->
                        <!--<div class="prof-list-item clearfix">-->
                        <!--   <div class="prof-details">-->
                        <!--        <h5 class="prof-name-list">DBSS as a Catholic School</h5>-->
                        <!--        <p class="small-text">We instill the young the Christian values and to share in the mission of the Catholic Church to form genuine Christians. -->
                        <!--        It is open to young people of all denominations and religions.</p>-->
                        <!--    </div> <!-- /.prof-details -->
                        <!--</div> <!-- /.prof-list-item -->
                        
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                {{-- <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Testimonial</h4>
                    </div>
                    <div class="widget-inner">
                        <div id="slider-testimonials">
                            <ul>
                                <li>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, quos, veniam optio voluptas hic delectus soluta odit nemo harum <strong class="dark-text">Shannon D. Edwards</strong></p>
                                </li>
                                <li>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, quos, veniam optio voluptas hic delectus soluta odit nemo harum <strong class="dark-text">Shannon D. Edwards</strong></p>
                                </li>
                                <li>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, quos, veniam optio voluptas hic delectus soluta odit nemo harum <strong class="dark-text">Shannon D. Edwards</strong></p>
                                </li>
                            </ul>
                            <a class="prev fa fa-angle-left" href="#"></a>
                            <a class="next fa fa-angle-right" href="#"></a>
                        </div>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main --> --}}

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Our Gallery</h4>
                    </div>
                    <div class="widget-inner">
                        <div class="gallery-small-thumbs clearfix">
                             @foreach ($galleries as $gallery)
                          <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ url('gallery/'.$gallery->image) }}" title="Gallery Tittle One">
                                    <img src="{{ url('gallery/'.$gallery->image) }}" alt="" />
                                </a>
                            </div>  
                        @endforeach
                            
                        </div> <!-- /.galler-small-thumbs -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

            </div>
        </div>
    </div>

@endsection