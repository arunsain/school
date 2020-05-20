@php  $contentdata = json_decode($page->pageMeta->content); @endphp
 @php $recevieData = json_decode($getAllEvent->news_content) @endphp
 @php  $pageEvents = json_decode($pageEvent->pageMeta->content); @endphp

 
 




 


 @extends('fronthtml.layouts.index')
 @section('contents')

 <!-- Page Title Section -->
		<div class="row page-title page-title-about" style="background-image: url({{ asset('storage/'.$pageEvents->eventImage) }});">
			<div class="container">
				<h2><i class="fa fa-calendar"></i>{{ $pageEvents->title }}</h2>
			</div>
		</div>
		
		<!-- Events Section -->
		<div class="row section-row evets-row">
			<div class="container">
				<div class="col-md-8 left-event-items">
					<div class="col-xs-12 event-single-wrapper">
						<h3>{{ $recevieData->title}}</h3>
						<h5>
							<span><i class="fa fa-calendar"></i>{{ $getAllEvent->created_at->format('d') }} {{ $getAllEvent->created_at->format('M') }}, {{ $getAllEvent->created_at->format('Y') }}</span>
							<span><i class="fa fa-clock-o"></i>{{ $recevieData->eventTime}}</span>
							<span><i class="fa fa-map-marker"></i>{{ $recevieData->eventLocation}}</span>
						</h5>
						<p>{{ $recevieData->description}}</p>
						<img class="featured-img" src="{{ asset('storage/'.$recevieData->eventImage)}}" alt="event-single">
				<!-- 		<div class="section-divider"></div>
						<h3>MAIN ARTISTS IN EVENT</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
						<div class="col-md-6 clear-padding academic-teachers">
							<div class="col-sm-4 teacher-img">
								<img src= "{{ asset('storage/'.$recevieData->eventImage)}}" alt="teacher"/>
							</div>
							<div class="col-sm-8 teacher-info">
								<h5><i class="fa fa-user"></i>LENORE DOE</h5>
								<p><i class="fa fa-graduation-cap"></i>BSc. Science</p>
								<p><i class="fa fa-phone"></i>+1 9876543210</p>
							</div>
						</div>
						<div class="clearfix visible-sm"></div>
						<div class="col-md-6 clear-padding academic-teachers">
							<div class="col-sm-4 teacher-img">
								<img src= "assets/img/parent/parent2.jpg" alt="teacher"/>
							</div>
							<div class="col-sm-8 teacher-info">
								<h5><i class="fa fa-user"></i>JOHN DOE</h5>
								<p><i class="fa fa-graduation-cap"></i>BSc. Science</p>
								<p><i class="fa fa-phone"></i>+1 9876543210</p>
							</div>
						</div> -->
						<div class="clearfix"></div>
						<div class="section-divider"></div>
						<h3>EVENT SCHEDULE</h3>
						<p>{{ $recevieData->scheduleDec}}

							@php 
							
							 $fetchData = array_combine($recevieData->sheduleHead,$recevieData->sheduleContent);

							

							 @endphp
							


						</p>
						<div id="pathshalaAccordion" class="pathshala-accordion">
							


  @foreach( $fetchData as $keys=>$values)

   <h4 class="accordion-header"><i class="fa fa-clock-o"></i>
								{{ $keys }}</h4>
							<div class="accordion-inner">
								<p>{{ $fetchData[$keys] }}
								</p>
							</div>
								

@endforeach					 
								
								

							
		
													
							
							
														
							
							
							
							
							<!-- <h4 class="accordion-header"><i class="fa fa-clock-o"></i>DAY 2</h4>
							<div class="accordion-inner">
								<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
									ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
									amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
									odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
								</p>
							</div>
							<h4 class="accordion-header"><i class="fa fa-clock-o"></i>DAY 3</h4>
							<div class="accordion-inner">
								<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
									ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
									amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
									odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
								</p>
							</div> -->
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 right-event-items">
					<div class="event-item">
						<img src="{{ asset('storage/'.$recevieData->sideImage)}}" alt="event" />
					</div>
					<div class="featured-event">
						<div class="event-date">
							<p><span>{{ $getAllEvent->created_at->format('d') }}</span>  {{ strtoupper($getAllEvent->created_at->format('M')) }}</p>
						</div>
						<h3>{{ $recevieData->title}}</h3>
						<h6><i class="fa fa-map-marker"></i>{{ $recevieData->eventLocation}}</h6>
						<p>{{ str_limit($recevieData->description, $limit = 124, $end = '...') }}</p>
						<a href="{{ route('singleEvents',$getAllEvent->id) }}"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
					</div>
					<div class="event-item categories-list">
						<div class="sidebar-box">
							<h5><i class="fa fa-list"></i>CATEGORIES</h5>
							<div class="inner-content-box">
								<ul class="list-group">
									 @foreach($category as $categorys)
									<li class="list-group-item"><a href="{{ route('events',['cat_id' => $categorys->id ,'page' =>1])}}"><i class="fa fa-graduation-cap"></i>{{ $categorys->category }}</a><span class="badge">{{ $categorys->newscontents->count() }}</span></li>
									 @endforeach
									
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>


 @endsection