@php  $contentdata = json_decode($page->pageMeta->content); @endphp
@php  $contentAdmission = json_decode($pageAdmission->pageMeta->content); @endphp

 
 @extends('fronthtml.layouts.index')
 @section('contents')
<!-- Page Title Section -->
		<div class="row page-title page-title-about" style="background-image: url({{ asset('storage/'.$contentAdmission->imageMain) }});">
			<div class="container">
				<h2><i class="fa fa-graduation-cap"></i>{{ $contentAdmission->title }}</h2>
			</div>
		</div>
		
		<!-- Facts section -->
        <div class="row section-row">
            <div class="container">
				<div class="fact-wrapper">
					<div class="col-md-5 fact-item">
						<p class="lg-icon"><i class="fa fa-trophy"></i></p>
					<!-- 	<p>PATHSHALA won best School award in 2016</p> -->
						<h1>{{ $contentAdmission->sectionTitle1 }}</h1>
						<p>{{ $contentAdmission->sectionDesc1 }}</p>
					</div>
					<div class="col-md-7 fact-item">
						<div class="fact-item-list">
							<div class="col-xs-3">
								<i class="fa fa-star"></i>
							</div>
							<div class="col-xs-9">
								<h2>{{ $contentAdmission->sectionTitle2 }}</h2>
								<p>{{ $contentAdmission->sectionDesc2 }}</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="fact-item-list">
							<div class="col-xs-3">
								<i class="fa fa-clock-o"></i>
							</div>
							<div class="col-xs-9">
								<h2>{{ $contentAdmission->sectionTitle3 }}</h2>
								<p>{{ $contentAdmission->sectionDesc3 }}</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="fact-item-list">
							<div class="col-xs-3">
								<i class="fa fa-graduation-cap"></i>
							</div>
							<div class="col-xs-9">
								<h2>{{ $contentAdmission->sectionTitle4 }}</h2>
								<p>{{ $contentAdmission->sectionDesc4 }}</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
        </div>
		
		<!-- Numbers section -->
		<div class="row number-row" style="background-image: url({{ asset('storage/'.$contentAdmission->imageMiddle) }});" >
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
					<h1>{{ $contentAdmission->infoTitle }}</h1>
					<p>{{ $contentAdmission->infoDesc }}</p>
				</div>
				<div class="col-md-6">
					<div id="pathshalaAccordion" class="pathshala-accordion faq-accordion">
						@php $arrayQuestion = array_combine($contentAdmission->question,$contentAdmission->answere)  @endphp
						@foreach($arrayQuestion as $key=>$value)
						<h4 class="accordion-header">{{ $key }}</h4>
						<div class="accordion-inner">
							<p>{{ $arrayQuestion[$key] }}</p>
						</div>
						@endforeach
						<!-- <h4 class="accordion-header">What Pathshala Offers?</h4>
						<div class="accordion-inner">
							<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
									ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
									amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi.
							</p>
						</div>
						<h4 class="accordion-header">How Pathshala is different?</h4>
						<div class="accordion-inner">
							<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
									ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
									amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi.
							</p>
						</div> -->
					</div>
				</div>
				<div class="col-md-6">
					<div class="admissioon-youtube-video">
						<iframe src="{{ $contentAdmission->youtubeLink }}" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="clearfix"></div>
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