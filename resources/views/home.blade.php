@extends('layouts.master') 
@section('title', 'Home')
@section('content')


<!--Main Slider-->
<section class="slider">

    <div class="slider-carousel owl-carousel owl-theme">

        <div class="slide" style="background-image:url(images/slider/sl-01-1920x750.png)">
            <div class="container">
                <div class="content">
                    <h3>Start Your Future Plan With Us</h3>
                    <h2>Grow Your Business</h2>
                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nobis aliquid sed id saepe. <br>Quasi
                        totam, dolorem repellendus cupiditate! Quos eaque, voluptas doloribus </div>
                    <div class="link-holder">
                        <a href="#" class="corpo-r-btn btn-style-two">learn more</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide" style="background-image:url(images/slider/sl-02-1920x750.png)">
            <div class="container">
                <div class="content">
                    <h3 class="style-two">Get Your Business</h3>
                    <h2>Consultant</h2>
                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nobis aliquid sed id saepe. <br>Quasi
                        totam, dolorem repellendus cupiditate! Quos eaque, voluptas doloribus </div>
                    <div class="link-holder">
                        <a href="#" class="corpo-r-btn btn-style-two">learn more</a> <a href="#" class="corpo-r-btn btn-style-three">Our Servics</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--End Main Slider-->

<!--About Section-->
<section class="about-section-three bg-style-one section-padding-all">
    <div class="default-container">
        <div class="row clearfix">

            <!--con-title Column-->
            <div class="con-title-column col-lg-5 col-md-12 col-sm-12">
                <!--Sec con-title-->
                <div class="sec-con-title">
                    <div class="con-title-text con-title-border-l">It's Best Simple & Useful</div>
                    <h2>About Our Gole</h2>
                </div>
                <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                    it to make a type specimen book.</div>
                <a href="#" class="corpo-r-btn btn-style-five">Who We Are?</a>
            </div>

            <!--Video Column-->
            <div class="corpo-video-col col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column" data-wow-delay="600ms" data-wow-duration="1500ms">

                    <!--Video holder-->
                    <div class="video-holder">
                        <figure class="image">
                            <img src="images\background\play-02.png" alt="">
                        </figure>
                        <a href="https://www.youtube.com/embed/7e90gBu4pas" class="lightbox-image overlay-holder-two"><span class="flaticon-play-button-5"></span></a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!--End About Section-->

<!--Portfolio Page Section-->
<section class="portfolio-section section-padding-all">
    <div class="default-container">
        <div class="row clearfix">
            <div class="con-title-column col-lg-12 col-md-12 col-sm-12">
                <!--Sec Title-->
                <div class="sec-con-title text-center centered">
                    <div class="con-title-text con-title-border-l">It's Best Simple & Useful</div>
                    <h2>What We Have Done?</h2>
                    <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s</div>
                </div>
            </div>
        </div>
        <!--MixitUp Galery-->
        <div class="mixitup-gallery">
            <!--Filter-->
            <div class="filters text-center clearfix">

                <ul class="filter-tabs filter-btns clearfix">
                    <li class="active filter" data-role="button" data-filter="all">All Works</li>
                    <li class="filter" data-role="button" data-filter=".seo">seo</li>
                    <li class="filter" data-role="button" data-filter=".webdesign">webdesign</li>
                    <li class="filter" data-role="button" data-filter=".work">work</li>
                    <li class="filter" data-role="button" data-filter=".wordpress">wordpress</li>
                </ul>

            </div>

            <div class="filter-list row clearfix">

                <!--Gallery Block Two-->
                <div class="gallery-block-two mix all wordpress webdesign col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images\gallery\gl-01-750x650.png" alt="">
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="single-project.html" class="link"><span class="icon fa fa-link"></span></a>
                                        <a href="images\gallery\gl-01-750x650.png" data-fancybox="gallery-images-2" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!--Gallery Block Two-->
                <div class="gallery-block-two mix all seo webdesign col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images\gallery\gl-02-750x650.png" alt="">
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="single-project.html" class="link"><span class="icon fa fa-link"></span></a>
                                        <a href="images\gallery\gl-02-750x650.png" data-fancybox="gallery-images-2" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!--Gallery Block Two-->
                <div class="gallery-block-two mix work wordpress all col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images\gallery\gl-03-750x650.png" alt="">
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="single-project.html" class="link"><span class="icon fa fa-link"></span></a>
                                        <a href="images\gallery\gl-03-750x650.png" data-fancybox="gallery-images-2" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!--Gallery Block Two-->
                <div class="gallery-block-two mix seo all col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images\gallery\gl-04-750x650.png" alt="">
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="single-project.html" class="link"><span class="icon fa fa-link"></span></a>
                                        <a href="images\gallery\gl-04-750x650.png" data-fancybox="gallery-images-2" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!--Gallery Block Two-->
                <div class="gallery-block-two mix wordpress seo all col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images\gallery\gl-05-750x650.png" alt="">
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="single-project.html" class="link"><span class="icon fa fa-link"></span></a>
                                        <a href="images\gallery\gl-05-750x650.png" data-fancybox="gallery-images-2" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!--Gallery Block Two-->
                <div class="gallery-block-two mix seo all col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images\gallery\gl-06-750x650.png" alt="">
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="single-project.html" class="link"><span class="icon fa fa-link"></span></a>
                                        <a href="images\gallery\gl-06-750x650.png" data-fancybox="gallery-images-2" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!--Gallery Block Two-->
                <div class="gallery-block-two mix wordpress all col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images\gallery\gl-07-750x650.png" alt="">
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="single-project.html" class="link"><span class="icon fa fa-link"></span></a>
                                        <a href="images\gallery\gl-07-750x650.png" data-fancybox="gallery-images-2" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!--Gallery Block Two-->
                <div class="gallery-block-two mix wordpress all col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images\gallery\gl-08-750x650.png" alt="">
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="single-project.html" class="link"><span class="icon fa fa-link"></span></a>
                                        <a href="images\gallery\gl-08-750x650.png" data-fancybox="gallery-images-2" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!--Gallery Block Two-->
                <div class="gallery-block-two mix wordpress all col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images\gallery\gl-09-750x650.png" alt="">
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="single-project.html" class="link"><span class="icon fa fa-link"></span></a>
                                        <a href="images\gallery\gl-09-750x650.png" data-fancybox="gallery-images-2" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

            </div>

            <!--Button Box-->
            <div class="button-box text-center">
                <a href="#" class="corpo-r-btn btn-style-five">Load More</a>
            </div>

        </div>

    </div>
</section>
<!--End Portfolio Page Section-->

<!-- Testimonial Section -->
<section class="testimonial-section section-padding-all">
    <div class="default-container">
        <div class="row clearfix">
            <div class="con-title-column col-lg-12 col-md-12 col-sm-12">
                <!--Sec Title-->
                <div class="sec-con-title text-center centered mx-auto">
                    <div class="con-title-text con-title-border-l">It's Best Simple & Useful</div>
                    <h2>What Our Client Says</h2>
                    <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s</div>
                </div>
            </div>
            <div class="con-title-column col-lg-12 col-md-12 col-sm-12">
                <div class="text-center single-item-carousel owl-carousel">
                    <div class="business-client-box p-4">
                        <div class="client-box-img mb-3 mx-auto">
                            <img src="images\testimonial\ts-01-120x120.png" alt="" class="img-fluid rounded-circle">
                        </div>
                        <div class="clients-name">
                            <h5 class="mb-0">David Gonzalez, Envato</h5>
                            <small class="">Founder .</small>
                        </div>
                        <p class="text pt-3 mx-auto">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                            Latin literature from 45 BC, making it over 2000 years old. </p>
                    </div>
                    <div class="business-client-box p-4">
                        <div class="client-box-img mb-3 mx-auto">
                            <img src="images\testimonial\ts-02-120x120.png" alt="" class="img-fluid rounded-circle">
                        </div>
                        <div class="clients-name">
                            <h5 class="mb-0">David Gonzalez, Envato</h5>
                            <small class="">Founder .</small>
                        </div>
                        <p class="text pt-3 mx-auto">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                            Latin literature from 45 BC, making it over 2000 years old. </p>
                    </div>
                    <div class="business-client-box p-4">
                        <div class="client-box-img mb-3 mx-auto">
                            <img src="images\testimonial\ts-03-120x120.png" alt="" class="img-fluid rounded-circle">
                        </div>
                        <div class="clients-name">
                            <h5 class="mb-0">David Gonzalez, Envato</h5>
                            <small class="">Founder .</small>
                        </div>
                        <p class="text pt-3 mx-auto">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                            Latin literature from 45 BC, making it over 2000 years old. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Section -->

<!--Price Section -->
<section class="pricing-section section-padding-all">
    <div class="default-container">
        <div class="row clearfix">
            <div class="con-title-column col-lg-12 col-md-12 col-sm-12">
                <!--Sec Title-->
                <div class="sec-con-title text-center centered mx-auto">
                    <div class="con-title-text con-title-border-l">It's Best Simple & Useful</div>
                    <h2>Our Pricing Plan</h2>
                    <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s</div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-4">
                <div class="mt-3 business-price-box text-center animated">
                    <div class="plan-price">
                        <h5 class="font-weight-bold mb-0">Basic Plan</h5>
                    </div>
                    <div class="business-plan-price mt-5">
                        <h1 class=" mb-0 font-weight-bold">$ 75</h1>
                        <div class="plan-price-tag">
                            <ul class="mb-0 text-center">
                                <li class="list-inline-item">USD</li>
                                <li class="list-inline-item">User</li>
                                <li class="list-inline-item">Month</li>
                            </ul>
                        </div>
                        <p class="text-muted pt-3">It is a long established fact that a reader will be distracted</p>
                    </div>
                    <div class="business-price-features text-muted">
                        <p>Additional Features </p>
                        <p>Free Email Support</p>
                        <p>10 Domain</p>
                        <p>24/7 Support</p>
                        <p>Single User</p>
                    </div>
                    <div class="text-center mt-5">
                        <a href="#" class="corpo-r-btn btn-style-two">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="mt-3 business-price-box text-center price-active">
                    <div class="plan-price">
                        <h5 class="font-weight-bold mb-0">Pro Plan</h5>
                    </div>
                    <div class="business-plan-price mt-5">
                        <h1 class="text_custom mb-0 font-weight-bold">$ 150</h1>
                        <div class="plan-price-tag">
                            <ul class="mb-0 text-center">
                                <li class="list-inline-item">USD</li>
                                <li class="list-inline-item">User</li>
                                <li class="list-inline-item">Month</li>
                            </ul>
                        </div>
                        <p class="text-muted pt-3">It is a long established fact that a reader will be distracted</p>
                    </div>
                    <div class="business-price-features text-muted">
                        <p>Additional Features </p>
                        <p>Free Email Support</p>
                        <p>30 Domain</p>
                        <p>24/7 Support</p>
                        <p>Single User</p>
                    </div>
                    <div class="text-center mt-5">
                        <a href="#" class="corpo-r-btn btn-style-two">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="mt-3 business-price-box text-center animated">
                    <div class="plan-price">
                        <h5 class="font-weight-bold mb-0">Premiume Plan</h5>
                    </div>
                    <div class="business-plan-price mt-5">
                        <h1 class=" mb-0 font-weight-bold">$ 300</h1>
                        <div class="plan-price-tag">
                            <ul class="mb-0 text-center">
                                <li class="list-inline-item">USD</li>
                                <li class="list-inline-item">User</li>
                                <li class="list-inline-item">Month</li>
                            </ul>
                        </div>
                        <p class="text-muted pt-3">It is a long established fact that a reader will be distracted</p>
                    </div>
                    <div class="business-price-features text-muted">
                        <p>Additional Features </p>
                        <p>Free Email Support</p>
                        <p>Unlimited Domain</p>
                        <p>24/7 Support</p>
                        <p>Single User</p>
                    </div>
                    <div class="text-center mt-5">
                        <a href="#" class="corpo-r-btn btn-style-two">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Price Section-->

<!--Team Section-->
<section class="teams-ection section-padding-all">
    <div class="default-container">
        <div class="row clearfix">
            <div class="con-title-column col-lg-12 col-md-12 col-sm-12">
                <!--Sec Title-->
                <div class="sec-con-title text-center centered mx-auto">
                    <div class="con-title-text con-title-border-l">It's Best Simple & Useful</div>
                    <h2>Our Team</h2>
                    <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s</div>
                </div>
            </div>
        </div>

        <div class="row clearfix mt-3">
            <div class="col-lg-3 mb-4">
                <div class="team-box-all text-center">
                    <div class="team-img">
                        <img src="images\team\tm-01-460x460.png" alt="" class="img-fluid mx-auto d-block">
                    </div>
                    <div class="mt-3">
                        <h6 class="mb-0 font-weight-bold">Jeffery Newman</h6>
                        <p class="text-muted team-work">CEO</p>
                    </div>

                    <div class="team_social">
                        <ul class="list-inline mb-0 text-center">
                            <li class="list-inline-item"><a href="#" class=""><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="fa fa-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="team-box-all text-center">
                    <div class="team-img">
                        <img src="images\team\tm-02-460x460.png" alt="" class="img-fluid mx-auto d-block">
                    </div>
                    <div class="mt-3">
                        <h6 class="mb-0 font-weight-bold">Christopher Mayo</h6>
                        <p class="text-muted team-work">Founder</p>
                    </div>

                    <div class="team_social">
                        <ul class="list-inline mb-0 text-center">
                            <li class="list-inline-item"><a href="#" class=""><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="fa fa-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="team-box-all text-center">
                    <div class="team-img">
                        <img src="images\team\tm-03-460x460.png" alt="" class="img-fluid mx-auto d-block">
                    </div>
                    <div class="mt-3">
                        <h6 class="mb-0 font-weight-bold">Douglass Foster</h6>
                        <p class="text-muted team-work">Co-Founder</p>
                    </div>

                    <div class="team_social">
                        <ul class="list-inline mb-0 text-center">
                            <li class="list-inline-item"><a href="#" class=""><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="fa fa-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="team-box-all text-center">
                    <div class="team-img">
                        <img src="images\team\tm-04-460x460.png" alt="" class="img-fluid mx-auto d-block">
                    </div>
                    <div class=" mt-3">
                        <h6 class="mb-0 font-weight-bold">Ismael Oliver</h6>
                        <p class="text-muted team-work">Sr. Developers</p>
                    </div>

                    <div class="team_social">
                        <ul class="list-inline mb-0 text-center">
                            <li class="list-inline-item"><a href="#" class=""><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="fa fa-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Team Section-->

<!--Counter Section-->
<section class="counter-section section-padding-all">
    <div class="com-counter default-container">
        <div class="row clearfix">
            <div class="column counter-column col-md-6 col-sm-6 col-xs-12">
                <!--Column-->
                <div class="row clearfix">
                    <div class="column counter-column col-md-6 col-sm-6 col-xs-12">
                        <div class="inner">
                            <div class="title-text count-title align-middle">
                                <h2><strong>Company</strong> Success</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Column-->
            <div class="column counter-column col-md-6 col-sm-6 col-xs-12">
                <div class="row clearfix">
                    <div class="column counter-column col-md-6 col-sm-6 col-xs-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="775">0</span>+
                                </div>
                                <h4 class="counter-title">happy customers</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-md-6 col-sm-6 col-xs-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box alternate">
                                    <span class="count-text" data-speed="3000" data-stop="279">0</span>+
                                </div>
                                <h4 class="counter-title">Project complete</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="column counter-column col-md-6 col-sm-6 col-xs-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box alternate">
                                    <span class="count-text" data-speed="3000" data-stop="675">0</span>+
                                </div>
                                <h4 class="counter-title">World Wide Branch</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-md-6 col-sm-6 col-xs-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="471">0</span>+
                                </div>
                                <h4 class="counter-title">Digital Instrument</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--End Counter Section-->

<!--Blog Section-->
<section class="blog-section section-padding-all">
    <div class="default-container">
        <div class="row clearfix">
            <div class="con-title-column col-lg-12 col-md-12 col-sm-12">
                <!--Sec Title-->
                <div class="sec-con-title text-center centered mx-auto">
                    <div class="con-title-text con-title-border-l">It's Best Simple & Useful</div>
                    <h2>Latest News</h2>
                    <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s</div>
                </div>
            </div>
        </div>
        <div class="row clearfix mt-3">
            <div class="col-lg-4 mb-4">
                <div class="img_blog">
                    <div class="carousel-item active">
                        <img src="images\blog\bl-01-750x430.png" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="blog-box-detail p-4">
                    <div class="mt-0">
                        <p class="labal text-muted">Business Tips</p>
                        <h5 class="font-weight-bold"><a href="#" class="read-more">The Most Advance Business Plan</a></h5>
                        <p class="text-muted">It is a long established fact that a reader will be distracted by the readable content</p>
                        <p class="space-date text-muted"> Kazi Porag - 27 Dec 2018</p>
                        <a class="read-more text-uppercase font-weight-bold" href="single-post.html">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="img_blog">
                    <div class="carousel-item active">
                        <img src="images\blog\bl-02-750x430.png" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="blog-box-detail p-4">
                    <div class="mt-0">
                        <p class="labal text-muted">Business Workflow</p>
                        <h5 class="font-weight-bold"><a href="#" class="read-more">The Most Advance Business Plan</a></h5>
                        <p class="text-muted">It is a long established fact that a reader will be distracted by the readable content</p>
                        <p class="space-date text-muted"> Kazi Porag -28 Dec 2018</p>
                        <a class="read-more text-uppercase font-weight-bold" href="single-post.html">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="img_blog">
                    <div class="carousel-item active">
                        <img src="images\blog\bl-03-750x430.png" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="blog-box-detail p-4">
                    <div class="mt-0">
                        <p class="labal text-muted">Popular Business</p>
                        <h5 class="font-weight-bold"><a href="#" class="read-more"> The Most Advance Business Plan</a></h5>
                        <p class="text-muted">It is a long established fact that a reader will be distracted by the readable content</p>
                        <p class="space-date text-muted"> Kazi Porag -28 Dec 2018</p>
                        <a class="read-more text-uppercase font-weight-bold" href="single-post.html">Read More</a>
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