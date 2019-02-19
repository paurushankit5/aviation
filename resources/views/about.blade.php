@extends('layouts.main')

@section('title')
    BLUE HADAL AVIATION DREAMS SERVICES
@endsection

@section('meta_keywords')
    BLUE HADAL AVIATION DREAMS SERVICES
@endsection

@section('meta_description')
    BLUE HADAL AVIATION DREAMS SERVICES
@endsection

@section('content')
<section class="page-title text-center" style="background-image:url('{{ asset('front/images/gallery/banner.jpg') }}');">
    <div class="container">
        <div class="title-text">
            <h1>Services</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="/">home &nbsp;/</a>
                </li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>
<section class="story">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('front/images/offer/about.webp') }}" class="responsive" alt="story">
            </div>
            <div class="col-md-6">
                <div class="story-content">
                    <h2>Our Story</h2>
                    <h5 class="tagline">"WE ARE AN AIR HOSTESS TRAINING INSTITUTE"</h6>
                    <p class="text-justify">
                        Have you always dream of a job which includes flying across the globe, spending time at an exciting destination and offers a lucrative salary package?
                    </p>
                    <p class="text-justify">
                        We, BLUE HADAL Aviation Dreams, at Dehradun City, Dehradun, Uttarakhand, will guide you to your dream job. 
                    </p>
                    <p clas="text-justify">
                        One such rewarding career is that of an air hostess & flight stewardess. Our training programs are divided into theory, practical and case studies, thereby giving more practical exposure & enhancing confidence level.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection