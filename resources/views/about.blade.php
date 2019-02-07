@extends('layouts.master') 
@section('title', 'About Us') 
@section('content')

<!-- Banner Section -->
<section class="banner-section" style="background: url(images/banner/banner1.jpg)">
    <div class="banner-heading-two">
        <h2>About Us</h2>
    </div>
    <div class="banner-link">
        <ul>
            <li>
                <a href="{{route('home')}}">Home</a>
                <i class="fa fa-chevron-right"></i>
            </li>
            <li>
                <a href="{{route('about')}}" class="active">About Us</a>
            </li>
        </ul>
    </div>
</section>
<!--End Banner Section -->

<!--About Section-->
<section class="about-section-three section-padding-all">
    <div class="default-container">
        <div class="row clearfix">

            <!--con-title Column-->
            <div class="con-title-column col-lg-5 col-md-12 col-sm-12">
                <!--Sec con-title-->
                <div class="sec-con-title">
                    <div class="con-title-text con-title-border-l">Get to Know Us</div>
                    <h2>About Our Goals</h2>
                </div>
                <div class="text">As Christians, we are individually called to life in Christ (Galatians 2:20), aftermath of a spritual rebirth;
                    a paragim shift of enormous spiritual proportions affecting lineage that only a mind, renewed within
                    the sphere of influence of the Holy Spirit can grow and mature in.<br> To aid the process of renewal
                    of mind towards achieving the set mission, the Ministry finds expression through the following centers
                    of activity.<br> To fully maximize our potential (existing in possibility: capable of development into
                    actuality) in Christ Jesus, we need to come to our birth.

                </div>
            </div>



            <!--Video Column-->
            <div class="corpo-video-col col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column" data-wow-delay="600ms" data-wow-duration="1500ms">

                    <!--Video holder-->
                    <div class="video-holder">
                        <figure class="image">
                            <img src="images\pictures\playimage.png" alt="">
                        </figure>
                        <a href="https://www.youtube.com/embed/7e90gBu4pas" class="lightbox-image overlay-holder"><span class="flaticon-play-button-5"></span></a>
                    </div>

                </div>
            </div>
            <div class="default-container margintop">
                <div class="sec-con-title text-center centered mx-auto">
                    <div class="con-title-text con-title-border-l">What is our vision?</div>

                    <h2>Our Vision</h2>

                    <div class="text">
                        <h5>To see the glory of God revealed in the life of his children</h5>
                    </div>
                </div>
            </div>

            <div class="default-container margintop-t-2">
                    <div class="sec-con-title text-center centered mx-auto">
                        <div class="con-title-text con-title-border-l">Find out about our mission</div>
    
                        <h2>Our Mission</h2>
    
                        <div class="text">
                            <h5>To kindle God's purpose in belivers of Christ thereby getting them WIRed (Word Inspired Resource Development) for service</h5>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</section>
<!--End About Section-->
@endsection