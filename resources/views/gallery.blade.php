@extends('layouts.public')
@section('content')

 <!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="/">Home</a></h6>
                    <h6><span class="page-active">Gallery</span></h6>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="widget-main">
                    <div class="widget-inner">
                        <div class="search-form-widget">
                            <form name="search_form" method="get" action="#" class="search_form">
                                <input type="text" name="s" placeholder="Type and click enter to search..." title="Type and click enter to search..." class="field_search">
                            </form>
                        </div>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Filter Controls</h4>
                    </div>
                    <div class="widget-inner">
                        <ul class="mixitup-controls">
                            <li class="filter" data-filter="all">All Galleries</li>
                            
                        </ul>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Sort Controls</h4>
                    </div>
                    <div class="widget-inner">
                        <ul class="mixitup-controls">
                            <li class="sort active" data-sort="default" data-order="desc">Default</li>
                            <li class="sort" data-sort="data-cat" data-order="asc">Ascending</li>
                            <li class="sort" data-sort="data-cat" data-order="desc">Descending</li>
                        </ul>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

            </div> <!-- /.col-md-3 -->

            <div class="col-md-9">
                <div class="row">
                    
                    <div id="Grid">
                        
                    @foreach ($galleries as $gallery)
                    <div class="col-md-4 mix" data-cat="3">
                        <div class="gallery-item">
                            <a class="fancybox" rel="gallery1" href="{{ url('gallery/'.$gallery->image) }}">
                                <div class="gallery-thumb">
                                    <img src="{{ url('gallery/'.$gallery->image) }}" style="width:100%; height=100%" alt="" />
                                </div>
                                {{-- <div class="gallery-content">
                                    <h4 class="gallery-title">2014 Faculty Biennial</h4>
                                    <p class="small-text">Featuring painting, sculpture, ceramics</p>
                                </div> --}}
                            </a>
                        </div> <!-- /.gallery-item -->
                    </div> <!-- /.col-md-4 -->
                    @endforeach
                    

                    </div> <!-- /#Grid -->

                </div> <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="load-more-btn">
                           {{$galleries->links()}}
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-9 -->

        </div> <!-- /.row -->
        
    </div> <!-- /.container -->

@endsection