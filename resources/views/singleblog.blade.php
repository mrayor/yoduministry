@extends('layouts.master') 
@section('title', 'Blog') {{--
    @include('includes.headerUpper') --}} 
@section('content')

<!-- Banner Section -->
<section class="banner-section" style="background: url(images/banner/banner1.jpg)">
    <div class="banner-heading">
        <h2>Single Blog post</h2>
    </div>
    <div class="banner-link">
        <ul>
            <li>
                <a href="{{route('home')}}">Home</a>
                <i class="fa fa-chevron-right"></i>
            </li>
            <li>
                <a href="{{route('blog')}}">blog</a>
                <i class="fa fa-chevron-right"></i>
            </li>
            <li>
                <a href="{{route('singleblog')}}" class="active">Blog Detail</a>
            </li>
        </ul>
    </div>
</section>
<!--End Banner Section -->

<!--Blog Details Section-->
<section class="single-blog-section section-padding-all">
    <div class="default-container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-detail mt-30">
                    <div class="b-det-img">
                        <img src="images\blog\blog-image.jpg" alt="blog">
                    </div>
                    <div class="det-content">
                        <h3>Four ways to cheer and plan your self up on Blue Monday</h3>
                        <div class="det-meta">
                            <a href="#">
                                            <i class="fa fa-user"></i> by admin
                                        </a>
                            <a href="#">
                                            <i class="fa fa-calendar"></i> 26 Dec 2018
                                        </a>
                            <a href="#">
                                            <i class="fa fa-commenting-o"></i> 22
                                        </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, rcquisc adipiscing elit. Aenean socada commodo ligauala egets dssdolor.
                            Aenean magsfssa. Cum socadaiis nato qfuae pentua ibaus et magnsfis dis parturient mon nascqetu
                            rs idicfulus mus. Donefc quamaem felis, ultriciddedes nec, pefflslen tesquwdfe eu, pr etium quis,
                            sem.</p>
                        <p>Socadaiis nato qfuae pent ibaus et magnsfis dis parturient mon tes, nascqetur rsidicful muss enean
                            magsfssad. Cum socadaiis nato qfuae pent ibaus et magnsfis dis parturient mon tes, nascqetur
                            rsidicfulus mus. Donefc qua maem felis, ultriciddedes nec, pefflsl tesquwdfe eu, pr etium quis,
                            sem.</p>
                        <p class="box-letter">Dascqetur rsidicfulus mus donefc quamaem felis, ultriciddedes nec, pefflsl tesquwdfe eu, pr etium
                            quis, fasem. Cum socadaiis nato qfuae pent ibaus et magnsfis dis parturient mon tes, nascqetur
                            rsidicfulus mus. Cum socadaiis nato qfuae pent ibaus et magnsfis dis socad. Socadaiis nato qfuae
                            pent ibaus et magnsfis dis parturient mon tes, nascqetur rsidicful muss enean magsfssa.</p>
                    </div>
                    <blockquote>
                        <p> “ Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum et. Etiam glea quii ultricies nisi
                            vel augue. Curabitur ullamcor per ultrices etiam rhoncs. Lorem ipsum dolor sit amet,rcquisc adipiscing
                            felis eli. ”
                        </p>
                    </blockquote>
                    <div class="det-list">
                        <div class="row">
                            <div class="col-sm-7">
                                <ul>
                                    <li>
                                        <p> Lorem ipsum dolor sit ligauala consectade adipiscingi. </p>
                                    </li>
                                    <li>
                                        <p>Aenean socada commodo eget dssd qfuae pe ibaus.</p>
                                    </li>
                                    <li>
                                        <p> Magnsfis dis parturient, nascqet donefc ultcid dedes.</p>
                                    </li>
                                    <li>
                                        <p> Socadaiis nato qfuae pent et magns mon nascq rsidicful.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-5">
                                <img src="images\blog\blog-image.jpg" alt="blog">
                            </div>
                        </div>
                    </div>
                    <div class="blog-tags">
                        <div class="row">
                            <div class="col-md-8">
                                <span class="title">Tags :  </span>
                                <a href="#" class="tag">branding</a>
                                <a href="#" class="tag">Design</a>
                                <a href="#" class="tag">website</a>
                            </div>
                            <div class="col-md-4">
                                <span class="title">share :  </span>
                                <a href="#" class="blog-det-social">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                <a href="#" class="blog-det-social">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                <a href="#" class="blog-det-social">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                <a href="#" class="blog-det-social">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-nav clearfix">
                        <a href="#" class="blog-prev"><i class="fa fa-angle-left"></i></a>
                        <a href="#" class="blog-next"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <div class="author-section">
                        <div class="all-title">
                            <h3 class="sec-title">
                                <span>About Author</span>
                            </h3>
                        </div>
                        <div class="author-post">
                            <div class="aut-img">
                                <img src="images\blog\blog-image.jpg" alt="woman">
                            </div>
                            <div class="aut-content">
                                <h5>Alec Thompson</h5>
                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhon cus
                                    ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis vel, aliquet
                                    nec pretium.</p>
                                <div class="aut-social">
                                    <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                    <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                    <a href="#">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                    <a href="#">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-section">
                        <div class="all-title">
                            <h3 class="sec-title">
                                <span>comments</span>
                            </h3>
                        </div>
                        <div class="comment-wrap">
                            <div class="comment-inner">
                                <a href="#" class="reply">
                                                <i class="fa fa-mail-reply-all"> </i>Reply
                                            </a>
                                <div class="com-img">
                                    <img src="images\blog\blog-image.jpg" alt="human">
                                </div>
                                <div class="comm-content">
                                    <h5>Alec Thompson
                                        <span>March 04, 2018 at 10:05 PM</span>
                                    </h5>
                                    <p>Donec pede justo, aliquet nec, vulputate eget, arcu. In enim justo, ahon cus ut, imperdiet
                                        a, venenatis vitae, justo. Nullam dictum felis eu pede mollis vel.
                                    </p>
                                </div>
                            </div>
                            <div class="sub-comm comment-inner">
                                <a href="#" class="reply">
                                                <i class="fa fa-mail-reply-all"> </i>Reply
                                            </a>
                                <div class="com-img">
                                    <img src="images\blog\blog-image.jpg" alt="human">
                                </div>
                                <div class="comm-content">
                                    <h5>Alec Thompson
                                        <span>March 04, 2018 at 10:05 PM</span>
                                    </h5>
                                    <p>Donec pede justo, aliquet nec, vulputate eget, arcu. In enim justo, ahon cus ut, imperdiet
                                        a, venenatis vitae, justol.
                                    </p>
                                </div>
                            </div>
                        </div>
              
                    </div>
                    <div class="blog-comment-form">
                        <div class="all-title">
                            <h3 class="sec-title">
                                <span>Leave comment</span>
                            </h3>
                        </div>
                        <form action="#" class="comment-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Your Message" class="form-control" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn_custom corpo-r-btn btn-style-two">Post comment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Blog Details Section -->
@endsection