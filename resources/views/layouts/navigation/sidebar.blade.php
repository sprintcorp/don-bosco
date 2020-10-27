<div class="left-side-menu">


                        <div class="user-box">
                                <div class="float-left">
                                    <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="" class="avatar-md rounded-circle">
                                </div>
                                <div class="user-info">
                                    <a href="#">Bosco Admin</a>
                                    <p class="text-muted m-0">Administrator</p>
                                </div>
                            </div>
            
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
            
                        <ul class="metismenu" id="side-menu">
            
                            <li class="menu-title">Navigation</li>
            
                            <li>
                                <a href="{{ route('home') }}">
                                    <i class="ti-home"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>
            
                            <li>
                                <a href="{{ route('admin-category.index') }}">
                                    <i class="ti-comment-alt"></i>
                                    <span> News Category </span>
                                    {{-- <span class="badge badge-primary float-right">{{ $categories->count() }}</span> --}}
                                </a>
                            </li>
            
                            <li>
                                <a href="{{ route('admin-news.index') }}">
                                    <i class="ti-rss-alt"></i>
                                    <span> News </span>
                                    
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin-gallery.index') }}">
                                    <i class="ti-camera"></i>
                                    <span> Galleries </span>
                                </a>
                            </li>
            
                            <li>
                                <a href="{{ route('admin-event.index') }}">
                                    <i class="ti-world"></i>
                                    <span>  Events  </span>
                                    
                                </a>
                               
                            </li>
            
                            <li>
                                <a href="{{ route('admin-slider.index') }}">
                                    <i class="ti-desktop"></i>
                                    <span>  Sliders </span>
                                    
                                </a>
                            </li>
            
                           
                        </ul>
            
                    </div>
                    <!-- End Sidebar -->
            
                    <div class="clearfix"></div>

            
            </div>