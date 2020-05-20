@php  $contentdata = json_decode($page->pageMeta->content); @endphp
@php $principalData = json_decode($user->getuser->content) @endphp

@php  $pageAboutData = json_decode($pageAbout->pageMeta->content); @endphp
 @extends('fronthtml.layouts.index')
 @section('contents')
<!-- Page Title Section -->
        <div class="row page-title page-title-about"  style="background-image: url({{ asset('storage/'.$pageAboutData->firstImage) }});" >
            <div class="container">
                <h2><i class="fa fa-graduation-cap"></i>{{ $pageAboutData->pageTitle }}</h2>
            </div>
        </div>
        
        <!-- Principal Intro Section -->
        <div class="row principal-intro-row">
            <div class="container">
                <div class="col-sm-5">
                    <img src="{{ asset('storage/'.$principalData->image) }}"/>
                </div>
                <div class="col-sm-7 principal-intro">
                    <h6><i class="fa fa-star-o"></i><span>MEET OUR STAR</span><i class="fa fa-star-o"></i></h6>
                    <h3>MEET OUR PRINCIPAL</h3>
                    <p>{{ $principalData->aboutUs}}</p>
                    <h6 class="principal-name">Mr {{ ucfirst($user->name) }}, {{ $principalData->highestDegree}}</h6>
                    <div>
                        <a href="#" class="know-more-btn"><i class="fa fa-paper-plane"></i>KNOW MORE</a>
                    </div>
                </div>
            </div>
        </div>

            
        <!-- What we offer section -->
        <div class="row section-row dark-row">
            <div class="container">
                <div class="section-row-header-center">
                    <h6><i class="fa fa-star-o"></i>WE ARE BEST<i class="fa fa-star-o"></i></h6>
                    <h1>{{ $pageAboutData->title }}</h1>
                    <p>{{ $pageAboutData->description }}</p>
                </div>
                <div class="about-row">
                    <div class="col-sm-6 col-md-4">
                        <div class="we-offer-item">
                            <div class="we-offer-side">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <h5>{{ $pageAboutData->courseName1 }}</h5>
                            <p>{{ $pageAboutData->coureseDesc1 }}</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="we-offer-item">
                            <div class="we-offer-side">
                                <i class="fa fa-trophy"></i>
                            </div>
                            <h5>{{ $pageAboutData->courseName2 }}</h5>
                            <p>{{ $pageAboutData->coureseDesc2 }}</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="we-offer-item">
                            <div class="we-offer-side">
                                <i class="fa fa-book"></i>
                            </div>
                            <h5>{{ $pageAboutData->courseName3 }}</h5>
                            <p>{{ $pageAboutData->coureseDesc3 }}</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        
        <!-- Numbers section -->
        <div class="row number-row" style="background-image: url({{ asset('storage/'.$pageAboutData->secondImage) }});">
            <div class="container">
                <div class="col-sm-6 col-md-3 number-item">
                    <i class="fa fa-book"></i>
                    <span>30+</span>
                    <p>COURSES OFFERED</p>
                </div>
                <div class="col-sm-6 col-md-3 number-item">
                    <i class="fa fa-graduation-cap"></i>
                    <span>20</span>
                    <p>QUALIFIED TEACHERS</p>
                </div>
                <div class="col-sm-6 col-md-3 number-item">
                    <i class="fa fa-child"></i>
                    <span>300</span>
                    <p>ENERGETIC STUDENTS</p>
                </div>
                <div class="col-sm-6 col-md-3 number-item">
                    <i class="fa fa-clock-o"></i>
                    <span>100+</span>
                    <p>AWESOME EVENTS</p>
                </div>
            </div>
        </div>
        
        <!-- Teachers row -->
        <div class="row section-row">
            <div class="container">
                <div class="section-row-header-center">
                    <h6><i class="fa fa-star-o"></i>WE ARE BEST<i class="fa fa-star-o"></i></h6>
                    <h1>MEET OUR TEACHERS</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
                <div class="teacher-item col-sm-4 teacher-about-row">
                    <div class="teacher-about-row-inner">
                        <h5><i class="fa fa-flask"></i>ORGANIC CHEMISTRY</h5>
                        <div class="teacher-item-inner">
                            <p class="teacher-desc">
                                It is a long established fact that a reader will be distracted by the readable content 
                                of a page when looking at its layout.
                            </p>
                            <div class="col-xs-4 clear-padding teacher-img">
                                <img src="assets/img/parent/parent2.jpg" alt="teacher" />
                            </div>
                            <div class="col-xs-8 teacher-details">
                                <p><strong>John Doe</strong></p>
                                <p><i>MSc. Chemistry</i></p>
                                <p>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="teacher-know-more-link">
                            <a href="#"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
                        </div>
                    </div>
                </div>
                <div class="teacher-item col-sm-4 teacher-about-row">
                    <div class="teacher-about-row-inner">
                        <h5><i class="fa fa-flash"></i>ELECTROSTATICS</h5>
                        <div class="teacher-item-inner">
                            <p class="teacher-desc">
                                It is a long established fact that a reader will be distracted by the readable content 
                                of a page when looking at its layout.
                            </p>
                            <div class="col-xs-4 clear-padding teacher-img">
                                <img src="assets/img/parent/parent1.jpg" alt="teacher" />
                            </div>
                            <div class="col-xs-8 teacher-details">
                                <p><strong>Lenore Doe</strong></p>
                                <p><i>Ph.D. Physics</i></p>
                                <p>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="teacher-know-more-link">
                            <a href="#"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
                        </div>
                    </div>
                </div>
                <div class="teacher-item col-sm-4 teacher-about-row">
                    <div class="teacher-about-row-inner">
                        <h5><i class="fa fa-heartbeat"></i>HUMAN BIOLOGY</h5>
                        <div class="teacher-item-inner">
                            <p class="teacher-desc">
                                It is a long established fact that a reader will be distracted by the readable content 
                                of a page when looking at its layout.
                            </p>
                            <div class="col-xs-4 clear-padding teacher-img">
                                <img src="assets/img/parent/parent2.jpg" alt="teacher" />
                            </div>
                            <div class="col-xs-8 teacher-details">
                                <p><strong>John Doe</strong></p>
                                <p><i>Ph.D. Biology</i></p>
                                <p>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="teacher-know-more-link">
                            <a href="#"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Know More Info & Admission apply row -->
        <div class="row apply-know-row">
            <div class="container">
                <div class="col-sm-6 admission-row">
                    <h3>ADMISSIONS ARE OPEN</h3>
                    <p>It is a long established fact that a reader will be distracted by the content of a page when looking at its layout.</p>
                    <a href="#"><i class="fa fa-edit"></i>APPLY NOW</a>
                </div>
                <div class="col-sm-6 info-row">
                    <h3>HAVE ANY QUERIES?</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <div class="input-wrapper">
                        <input type="text" placeholder="e.g. email@pathshala.com"/><a href="#"><i class="fa fa-paper-plane"></i></a>
                    </div>
                </div>
            </div>
        </div>

@endsection