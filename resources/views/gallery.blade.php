@extends('layouts.main')

@section('title')
    BLUE HADAL AVIATION DREAMS GALLERY
@endsection

@section('meta_keywords')
    BLUE HADAL AVIATION DREAMS GALLERY
@endsection

@section('meta_description')
    BLUE HADAL AVIATION DREAMS GALLERY
@endsection

@section('content')
<section class="page-title text-center" style="background-image:url('{{ asset('front/images/gallery/banner.jpg') }}');">
    <div class="container">
        <div class="title-text">
            <h1>gallery</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="/">home &nbsp;/</a>
                </li>
                <li>gallery</li>
            </ul>
        </div>
    </div>
</section>
<section class="gallery bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3>Collected Shots
                        <span>of Our Aviation School</span>
                    </h3>
                    
                </div>
            </div>
            <?php
                for($i=1;$i<=9;$i++)
                {
                    ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="gallery-item">
                                <img src="{{ asset('front/images/gallery') }}/<?= $i?>.jpg" class="img-responsive" alt="gallery-image">
                                <a data-fancybox="images" href="{{ asset('front/images/gallery') }}/<?= $i?>.jpg"></a>
                                <!-- <h3>Facility 01</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p> -->
                            </div>
                        </div>
                    <?php
                }
            ?>
            
            
        </div>
    </div>
</section>
@endsection