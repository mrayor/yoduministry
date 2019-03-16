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
                    <div class="con-title-text con-title-border-l">Inform.Educate.Inspire</div>
                    <h2>Word Inspired Resource Development</h2>
                </div>
                <div class="text">The mind is functionally elastic; we exercise willing minds through biblical teaching and counselling thereby
                    inspiring beyound perceived limitations.
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
                        <a href="https://www.youtube.com/embed/sCknLOVAf7E" class="lightbox-image overlay-holder-two"><span class="flaticon-play-button-5"></span></a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!--End About Section-->


<!--Register-->
<div class="container-fluid">
    <img src="images/pictures/training_image.jpg" class="img-fluid" alt="Responsive image">
    <a href="{{route('register')}}" class="corpo-r-btn btn-style-five" style="
    margin: 20px;">Register Now</a>
</div>


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Crucified. Alive. Reigning</h1>
        <p class="lead font-weight-normal">To fully maximize our potential (existing in possibility, capable of developemt into actuality) in Christ,
            we need to come to full understanding of our relationship with God in order to walk in the realization
            of our newbirth.</p>
        <a class="btn btn-outline-secondary" href="#">Blog Coming soon</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>


{{-- 
<!--Blog Section-->
<section class="blog-section section-padding-all">
    <div class="default-container">
        <div class="row clearfix">
            <div class="con-title-column col-lg-12 col-md-12 col-sm-12">
                <!--Sec Title-->
                <div class="sec-con-title text-center centered mx-auto">
                    <div class="con-title-text con-title-border-l">Crucified . Alive . Reigning</div>
                    <h2>Living in Christ</h2>
                    <div class="text">To fully maximize our potential (existing in possibility, capable of developemt into actuality) in Christ,
                        we need to come to full understanding of our relationship with God in order to walk in the realization
                        of our newbirth.
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
<!--End Blog Section--> --}}
<!--Contact Section-->
    @include('includes.contact')
<!--End Contact Section-->
<!--End pagewrapper-->
@endsection