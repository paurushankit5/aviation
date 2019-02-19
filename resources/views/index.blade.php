@extends('layouts.main')

@section('title')
    BLUE HADAL AVIATION DREAMS
@endsection

@section('meta_keywords')
    BLUE HADAL AVIATION DREAMS
@endsection

@section('meta_description')
    BLUE HADAL AVIATION DREAMS
@endsection


@section('content')
<div class="hero-slider">
    <div class="slider-item slide1" style="background-image:url({{ asset('front/images/slider/banner2.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start -->
                    <div class="content style text-center">
                        <h2 class="text-white text-bold mb-2">The best air hostess training institute in the city!</h2>
                        <!-- <p class="tag-text mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel sunt animi sequi ratione quod at earum. <br>
                             Quis quos officiis numquam!</p> -->
                        <a href="#contact-form" class="btn btn-main btn-white">Enquire Now</a>
                    </div>
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
</div>
<section class="cta">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cta-block">
                    <div class="emmergency item">
                        <i class="fa fa-phone"></i>
                        <h2>Call Us Now</h2>
                        <a href="#">+91-8394012943</a>
                    </div>
                    <div class="top-doctor item">
                        <i class="fa fa-stethoscope"></i>
                        <h2>Best In City</h2>
                        <p>One of the Best school of Aviation in the city</p>
                        <a href="#" class="btn btn-main">Read more</a>
                    </div>
                    <div class="working-time item">
                        <i class="fa fa-hourglass-o"></i>
                        <h2>Working Hours</h2>
                        <ul class="w-hours">
                            <li>Mon - Fri  - <span>9:00 - 17:00</span></li>
                            <li>Sat - sun  - <span>8:00 - 17:00</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="feature-section section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="image-content">
					<div class="section-title text-center">
						<h3>Best Features
							<span>of Our Institution</span>
						</h3>
						<p>

                        </p>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="item">
								
								<h6>Some Content</h6>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur 
									at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
							</div>
                        </div>
                        <div class="col-sm-6">
							<div class="item">
								
								<h6>Some Content</h6>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur 
									at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
							</div>
                        </div>
                        <div class="col-sm-6">
							<div class="item">
								
								<h6>Some Content</h6>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur 
									at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
							</div>
                        </div>
                        <div class="col-sm-6">
							<div class="item">
								
								<h6>Some Content</h6>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur 
									at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="service-tab-section section">
    <div class="outer-box clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <!--Start single tab content-->
                    <div class="tab-content">
                        <div class="service-box tab-pane fade in active row" id="dormitory">
                            <div class="section-title text-center">
                            <h3>WE ARE AN AIR HOSTESS TRAINING INSTITUTE</h3>
                        </div>
                            <div class="col-md-6">
                                <img class="img-responsive" src="{{ asset('front/images/offer/about.webp') }}" alt="service-image">
                            </div>
                            <div class="col-md-6">
                                <div class="contents">
                                    
                                    <div class="text text-justify">
                                        <p>
                                        Have you always dream of a job which includes flying across the globe, spending time at an exciting destination and offers a lucrative salary package? We, BLUE HADAL Aviation Dreams, at Dehradun City, Dehradun, Uttarakhand, will guide you to your dream job. One such rewarding career is that of an air hostess & flight stewardess. Our training programs are divided into theory, practical and case studies, thereby giving more practical exposure & enhancing confidence level.
                                        </p>
                                    </div>
                                    <!-- <ul class="content-list">
                                        <li>
                                            <i class="fa fa-dot-circle-o"></i>Whitening is among the most popular dental</li>
                                        <li>
                                            <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                                        <li>
                                            <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                                    </ul> -->
                                    <a href="/about-us" class="btn btn-style-one">Read more</a>
                                </div>
                            </div>
                        </div>
                        <!--End single tab content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="service-section bg-gray section">
    <div class="container">
        <div class="section-title text-center">
            <h3>What
                <span>We Offer</span>
            </h3>
        </div>
        <div class="row items-container clearfix">
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="{{ asset('front/images/gallery/1.jpg') }}" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Dormitory</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="{{ asset('front/images/gallery/2.jpg') }}" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Germs Protection</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="{{ asset('front/images/gallery/3.jpg') }}" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Psycology</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="{{ asset('front/images/gallery/1.jpg') }}" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Dormitory</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="{{ asset('front/images/gallery/2.jpg') }}" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Germs Protection</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="{{ asset('front/images/gallery/3.jpg') }}" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Psycology</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!--team section-->
<section class="team-section section">
    <div class="container">
        <div class="section-title text-center">
            <h3>What
                <span>We Offer</span>
            </h3>
        </div>
        <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="{{ asset('front/images/offer/diploma.jpg') }}" alt="Diploma Courses" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Diploma Courses</h4>
                        <p>We offer diploma courses in Hospitality, Travel management and Aviation.</p>
                        <a href="/services#diploma-courses" class="btn btn-main">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="{{ asset('front/images/offer/pg.jpg') }}" alt="PG Diploma Courses" class="img-responsive">
                    <div class="contents text-center">
                        <h4>PG Diploma Courses</h4>
                        <p>We have a range of post graduation diploma courses, which are sure to benefit you.</p>
                        <a href="/services#pg-diploma" class="btn btn-main">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="{{ asset('front/images/offer/abc.jpg') }}" alt="Certification Courses" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Certification Courses</h4>
                        <p>You will be certified by our specially trained and experienced staffs in our institute. </p>
                        <a href="/services#certification-courses" class="btn btn-main">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="{{ asset('front/images/offer/expert.jpg') }}" alt="Expert Advice" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Expert Advice</h4>
                        <p>Our experts offer you the best guidance and advice to help you in your career as an air hostess.</p>
                        <a href="/services#expert-advice" class="btn btn-main">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@component('components.testimonial_component')
@endcomponent
<section class="appoinment-section section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="accordion-section">
    <div class="section-title">
        <h3>FAQ</h3>
    </div>
    <div class="accordion-holder">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Why Should I choose our institute
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                        helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                        heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            What are the Centre’s visiting hours?
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                        helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                        heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                            How many visitors are allowed?
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                        helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                        heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
<div class="col-md-6 col-sm-12 col-xs-12" id="contact-form">
    @component('components.contact-component')
    @endcomponent                           
</div>
        </div>                    
    </div>
</section>
@endsection