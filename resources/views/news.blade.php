@extends('layouts.public')
@section('content')

 <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="index.html">Home</a></h6>
                    <h6><span class="page-active">Blog</span></h6>
                </div>
            </div>
        </div>
    </div>
   


 <div class="container">
        <div class="row">

            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="row">
                    @foreach ($news as $info)
                       <div class="col-md-6 col-sm-6">
                        <div class="blog-grid-item">
                            <div class="blog-grid-thumb">
                                <a href="#" class="cat-blog">{{ $info->news_category->name }}</a>
                                <a href="blog-single.html">
                                    <img src="{{ url('news/'.$info->image) }}" alt="">
                                </a>
                            </div>
                            <div class="box-content-inner">
                                <h4 class="blog-grid-title"><a href="{{ route('news-page.show',$info->slug) }}">{{ $info->title }}</a></h4>
                                <p class="blog-grid-meta small-text"><span><a href="#">{{ $info->created_at->diffForHumans() }}</a></span> </p>
                            </div> <!-- /.box-content-inner -->
                        </div> <!-- /.blog-grid-item -->
                    </div> <!-- /.col-md-6 --> 
                    @endforeach
                    

                    

                </div> <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="load-more-btn">
                            {{ $news->links() }}
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-8 -->

            <!-- Here begin Sidebar -->
            <div class="col-md-4">
                
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
                        <h4 class="widget-title">Categories</h4>
                    </div>
                    <div class="widget-inner">
                        <div class="blog-categories">
                            <div class="row">
                                <ul>
                                @foreach ($categories as $category)
                                    <li class="col-md-6"><a href="{{ route('category-page.show',$category->slug) }}">{{ $category->name }}</a></li>
                                @endforeach
                                    
                                </ul>
                               
                            </div>
                        </div> <!-- /.blog-categories -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

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

              

            </div> <!-- /.col-md-4 -->
    
        </div> <!-- /.row -->
    </div> 

@endsection