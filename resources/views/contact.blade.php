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
            <h1>Contact</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="/">home &nbsp;/</a>
                </li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>
<section class="story">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            @component('components.contact-component')
            @endcomponent
            </div>            
        </div>
    </div>
</section>
@endsection