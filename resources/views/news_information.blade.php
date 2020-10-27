@extends('layouts.public')
@section('content')

    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="/">Home</a></h6>
                    <h6><a href="{{ route('news-page.index') }}">News</a></h6>
                    <h6><span class="page-active">{{ $news->title }}</span></h6>
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
                        <div class="blog-post-container">
                            <div class="blog-post-image">
                                <img src="{{ url('news/'.$news->image) }}" width="500" height="400" alt="">
                                <div class="blog-post-meta">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i>{{ $news->created_at->diffForHumans() }}</li>
                                       
                                    </ul>
                                </div> <!-- /.blog-post-meta -->
                            </div> <!-- /.blog-post-image -->
                            <div class="blog-post-inner">
                                <h3 class="blog-post-title">{{ $news->title }}</h3>
                                <p>{{ $news->body }}</p>
                                <div class="tag-items">
                                    <span class="small-text">Category:</span>
                                    <a href="{{ route('category-page.show',$news->news_category->slug) }}" rel="tag">{{ $news->news_category->name }}</a>
                                </div>
                            </div>
                        </div> <!-- /.blog-post-container -->
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
                        <h4 class="widget-title">Other News</h4>
                    </div>
                    <div class="widget-inner">
                        <div class="blog-categories">
                            <div class="row">
                                @foreach ($random as $info )
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
                            </div>
                        </div> <!-- /.blog-categories -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

            

            </div> <!-- /.col-md-4 -->
    
        </div> <!-- /.row -->
    </div> <!-- /.container -->



@endsection