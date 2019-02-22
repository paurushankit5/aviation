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
                <li>Services</li>
            </ul>
        </div>
    </div>
</section>
<section class="service-overview section">
    <div class="container">
        <div class="row">
            <div class="service-box col-md-12">
                <div class="row dist id="diploma-courses">
                    <div class="col-md-6">
                        <img class="img-responsive" src="{{ asset('front/images/offer/diploma.jpg') }}" alt="Diploma Courses">
                    </div>
                    <div class="col-md-6">
                        <div class="contents">
                            <div class="section-title">
                                <h3>Diploma in Aviation, Hospitality and Tourism (One Year)</h3>
                            </div>
                            <div class="text">
                                <p>We provide Certificate in Aviation, Hospitality and Tourism to train students to become professional in the field of Aviation, Hospitality and Tourism and help them become a professional. Our training programme include students to apply for jobs in the field of cabin crew, Ground Staff, Airline Catering, International Lounges at Airports, reputed hotels and many more.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row dist" id="pg-diploma">                    
                    <div class="col-md-6">
                        <div class="contents">
                            <div class="section-title">
                                <h3>Certificate in Ticketing/ Airport Management/ Hotel Management (6 Months)</h3>
                            </div>
                            <div class="text">
                                <p>We are also offering 6 Months Certificate in Ticketing/ Airport Management/ Hotel Management to enable our students with essential skill sets that are needed to build a rewarding career in World’s No.1 Industry- Service Industry. </p>
                                <p>
                                    Being the leading Air Hostess, Ground Staff and Hospitality Training Institute in North India, we also assure 100% job placement guarantee to every student after successful completion of their air hostess diploma course. 
                                </p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="{{ asset('front/images/offer/pg.jpg') }}" alt="PG Diploma Courses">
                    </div>
                </div>
                <!-- <div class="row dist" id="certification-courses">
                    <div class="col-md-6">
                        <img class="img-responsive" src="{{ asset('front/images/offer/abc.jpg') }}" alt="Certification Courses">
                    </div>
                    <div class="col-md-6">
                        <div class="contents">
                            <div class="section-title">
                                <h3>Certification Courses</h3>
                            </div>
                            <div class="text">
                                <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                                    then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                                <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                                    then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                            </div>
                            <ul class="content-list">
                                <li>
                                    <i class="fa fa-check-circle-o"></i>Whitening is among the most popular dental</li>
                                <li>
                                    <i class="fa fa-check-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                                <li>
                                    <i class="fa fa-check-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <div class="row dist" id="expert-advice">
                    <div class="col-md-6">
                        <img class="img-responsive" src="{{ asset('front/images/offer/expert.jpg') }}" alt="Expert Advice">
                    </div>
                    <div class="col-md-6">
                        <div class="contents">
                            <div class="section-title">
                                <h3>Expert Advice</h3>
                            </div>
                            <div class="text">
                                <p>We provide the advice for students looking for a career in aviation industry. Our experts will get in touch with you and provide the best advice for you to be the best in industry. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <center>
                            <figure>
                                <img src="{{ asset('front/images/gallery/8.jpg') }}" class="img img-responsive" alt="Blue Hedal Aviation">
                            </figure>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection