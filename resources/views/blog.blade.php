@extends('layouts.master') 
@section('title', 'Blog')
{{-- @include('includes.headerUpper')  --}}
@section('content')

<!-- Banner Section -->
<section class="banner-section" style="background: url(images/banner/blog_banner.jpg); background-size: 1490px">
    <div class="banner-heading">
        <h2>Blog</h2>
    </div>
    <div class="banner-link">
        <ul>
            <li>
                <a href="{{route('home')}}">Home</a>
                <i class="fa fa-chevron-right"></i>
            </li>
            <li>
                <a href="{{route('blog')}}" class="active">Blog</a>
            </li>
        </ul>
    </div>
</section>
<!--End Banner Section -->

<!--Blog Details Section-->
<section class="single-blog-section section-padding-all">
    <div class="default-container">
        <div class="row clearfix">
            <div class="col-lg-8">
                <div class="row clearfix">
                    <div class="col-lg-6 mb-4">
                        <div class="img_blog">
                            <div class="carousel-item active">
                                <img src="images\blog\blog-image.jpg" alt="" class="img-fluid mx-auto d-block">
                            </div>
                        </div>
                        <div class="blog-box-detail p-4">
                            <div class="mt-0">
                                <p class="labal text-muted">Business Tips</p>
                                <h5 class="font-weight-bold"><a href="#" class="read-more">The Most Advance Business Plan</a></h5>
                                <p class="text-muted">It is a long established fact that a reader will be distracted by the readable content</p>
                                <p class="space-date text-muted"> Kazi Porag - 27 Dec 2018</p>
                                <a class="read-more text-uppercase font-weight-bold" href="{{route('singleblog')}}">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul class="cr-pagination-center">
                            <li><a href="#" title=""><i class="fa fa-angle-left"></i></a></li>
                            <li class="active"><a href="#" title="">1</a></li>
                            <li><a href="#" title="">2</a></li>
                            <li><a href="#" title="">3</a></li>
                            <li><a href="#" title=""><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget widget-search">
                    <form class="side-form">
                        <input type="text" class="form-control" placeholder="Search Here...">
                        <button type="submit">
                                        <i class="fa fa-paper-plane"></i>
                                    </button>
                    </form>
                </div>
                <div class="widget widget-categories">
                    <div class="all-title">
                        <h3>
                            <span>Categories</span>
                        </h3>
                    </div>
                    <div class="widget-items">
                        <ul>
                            <li class="blog-category">
                                <a href="#">Online Marketing
                                                <span>(23)</span>
                                            </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="widget widget-recent-post">
                    <div class="all-title">
                        <h3>
                            <span>Recent Post</span>
                        </h3>
                    </div>
                    <div class="widget-items">
                        <ul>
                            <li>
                                <div class="blog-rp-image">
                                    <a href="single-post-left-sidebar.html">
                                                    <img src="images\blog\blog-image.jpg" alt="thumb">
                                                </a>
                                </div>
                                <div class="blog-rp-info">
                                    <p><a href="single-post-left-sidebar.html">Fundamental analysis</a></p>
                                    <p>Lorem ipsum dolor sit amet, cohy elitr</p>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Blog Details Section -->
@endsection