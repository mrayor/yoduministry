@extends('layouts.master') 
@section('title', 'Register')
{{-- @include('includes.headerUpper') --}}
@section('content')

<!-- Banner Section -->
<section class="banner-section" style="background: url(images/banner/blog_banner.jpg); background-size: 1490px">
    <div class="banner-heading-two">
        <h2>Register</h2>
    </div>
    <div class="banner-link">
        <ul>
            <li>
                <a href="{{route('home')}}">Home</a>
                <i class="fa fa-chevron-right"></i>
            </li>
            <li>
                <a href="{{route('register')}}" class="active">Register</a>
            </li>
        </ul>
    </div>
</section>
<!--End Banner Section -->

@include('includes.register')
@endsection