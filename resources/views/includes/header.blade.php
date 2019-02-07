<!-- Main Header-->
<header class="corpo-header">

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="default-container">
            <div class="clearfix">

                <div class="pull-left logo-box">
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="{{ asset('images/logo.png') }}" alt="" title=""></a>
                    </div>
                </div>

                <div class="nav-outer clearfix">

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="icon-bar"></i>
                                    <i class="icon-bar"></i>
                                    <i class="icon-bar"></i>
                                </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="{{ Request::routeIs('home') ? 'current' : '' }}"><a href="{{route('home')}}">Home</a></li>
                                <li class="{{Request::routeIs('about') ? 'current' : ''}}"><a href="{{route('about')}}">About Us</a></li>
                                <li class="{{Request::routeIs('blog') ? 'current' : ''}}"><a href="{{route('blog')}}">Blog</a></li>
                                <li class="{{Request::routeIs('contact') ? 'current' : ''}}"><a href="{{route('contact')}}">Contact us</a></li>
                            </ul>
                        </div>

                    </nav>

                    <!--Search Box Outer-->
                    <div class="menu-search-box">
                        <div class="dropdown">
                            <button class="menu-sb-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="fa fa-search"></i></button>
                            <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                <li class="panel-outer">
                                    <div class="form-container">
                                        <form method="post" action="#">
                                            <div class="form-group">
                                                <input type="search" name="field-name" value="" placeholder="Search Here" required="">
                                                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="default-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{route('home')}}" class="img-responsive"><img src="{{ asset('images/logo-small.png') }}" alt="logo" title="Yodu Ministry"></a>
            </div>

            <!--Right Col-->
            <div class="right-col pull-right">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                        aria-expanded="false" aria-label="Toggle navigation">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </button>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                        <ul class="navigation clearfix">
                            <li class="{{ Request::routeIs('home') ? 'current' : '' }}"><a href="{{route('home')}}">Home</a></li>
                            <li class="{{Request::routeIs('about') ? 'current' : ''}}"><a href="{{route('about')}}">About Us</a></li>
                            <li class="{{Request::routeIs('blog') ? 'current' : ''}}"><a href="{{route('blog')}}">Blog</a></li>
                            <li class="{{Request::routeIs('contact') ? 'current' : ''}}"><a href="{{route('contact')}}">Contact us</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Main Menu End-->
            </div>

        </div>
    </div>
    <!--End Sticky Header-->

</header>
<!--End Main Header -->