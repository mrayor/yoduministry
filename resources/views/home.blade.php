@extends('layouts.master') 
@section('title', 'Home')
@section('content')

@include('includes.slider')
<!--About Section-->
<section class="about-section-three bg-style-one section-padding-all">
    <div class="default-container">
        <div class="row clearfix">

            <!--con-title Column-->
            <div class="con-title-column col-lg-5 col-md-12 col-sm-12">
                <!--Sec con-title-->
                <div class="sec-con-title">
                    <div class="con-title-text con-title-border-l">Lorem Ipsum Dummy</div>
                    <h2>About Our Goals</h2>
                </div>
                <div class="text">As Christians, we are individually called to life in Christ (Galatians 2:20), aftermath of a spritual
                    rebirth; a paragim shift of enormous spiritual proportions affecting lineage that only a mind, renewed within the sphere
                    of influence of the Holy Spirit can grow and mature in.
                </div>
                <a href="{{route('about')}}" class="corpo-r-btn btn-style-five">Read More</a>
            </div>

            <!--Video Column-->
            <div class="corpo-video-col col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column" data-wow-delay="600ms" data-wow-duration="1500ms">

                    <!--Video holder-->
                    <div class="video-holder">
                        <figure class="image">
                            <img src="images\pictures\playimage.png" alt="">
                        </figure>
                        <a href="https://www.youtube.com/embed/7e90gBu4pas" class="lightbox-image overlay-holder-two"><span class="flaticon-play-button-5"></span></a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!--End About Section-->

<!--Blog Section-->
<section class="blog-section section-padding-all">
    <div class="default-container">
        <div class="row clearfix">
            <div class="con-title-column col-lg-12 col-md-12 col-sm-12">
                <!--Sec Title-->
                <div class="sec-con-title text-center centered mx-auto">
                    <div class="con-title-text con-title-border-l">Mind Transformation</div>
                    <h2>Latest Blog Posts</h2>
                    <div class="text">Fully maximize your potential and develop into actuality, and enhance
                        your relationship with God
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix mt-3">
            <div class="col-lg-4 mb-4">
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
                        <a class="read-more text-uppercase font-weight-bold" href="#">Read More</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--End Blog Section-->
<!--Contact Section-->
@include('includes.contact')
<!--End Contact Section-->
<!--End pagewrapper-->
@endsection