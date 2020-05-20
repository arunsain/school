@php  $contentdata = json_decode($page->pageMeta->content); @endphp
@php  $pageEvents = json_decode($pageEvent->pageMeta->content); @endphp



 @extends('fronthtml.layouts.index')
 @section('contents')
<!-- Page Title Section -->
        <div class="row page-title page-title-events" style="background-image: url({{ asset('storage/'.$pageEvents->eventImage) }});">
            <div class="container">
                <h2><i class="fa fa-calendar"></i>{{ $pageEvents->title }}</h2>
            </div>
        </div>
        
        <!-- Events Section -->
        <div class="row section-row evets-row">
            <div class="container">
                <div class="col-md-8 left-event-items">
                    @foreach($getAllEvent as $getAllEvents)
                    @php $recevieData = json_decode($getAllEvents->news_content) @endphp
                   
                    <div class="event-item">
                        <div class="col-sm-7">
                            <div class="event-date">
                                <p><span>{{ $getAllEvents->created_at->format('d') }}</span>  {{ strtoupper($getAllEvents->created_at->format('M')) }}</p>
                            </div>
                            <h3>{{ $recevieData->title }}</h3>
                            <h6><i class="fa fa-map-marker"></i> {{ $recevieData->eventLocation }}</h6>
                            <p>{{ str_limit($recevieData->description, $limit = 124, $end = '...') }}</p>
                        </div>
                        <div class="col-sm-5 event-item-img">
                            <div class="event-img">
                                <img src="{{ asset('storage/'.$recevieData->thumbnailEventImage )}}" />
                                <div class="event-detail-link">
                                    <a href="{{ route('singleEvents',$getAllEvents->id) }}">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    @endforeach
                   <div style="float: right"> {{ $getAllEvent->appends('cat_id',request()->cat_id)->links()}}</div>
                  
                    <div class="clearfix"></div>
                    
                   <!--  <div class="event-item">
                        <div class="col-sm-7">
                            <div class="event-date">
                                <p><span>21</span> AUG</p>
                            </div>
                            <h3>Inter School Sports Meet</h3>
                            <h6><i class="fa fa-map-marker"></i>Playground</h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                        <div class="col-sm-5 event-item-img">
                            <div class="event-img">
                                <img src="assets/img/news/news-sm2.jpg" alt="event" />
                                <div class="event-detail-link">
                                    <a href="#">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="event-item">
                        <div class="col-sm-7">
                            <div class="event-date">
                                <p><span>01</span> AUG</p>
                            </div>
                            <h3>Rugby Match</h3>
                            <h6><i class="fa fa-map-marker"></i>Rugby</h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                        <div class="col-sm-5 event-item-img">
                            <div class="event-img">
                                <img src="assets/img/news/news-sm3.jpg" alt="event" />
                                <div class="event-detail-link">
                                    <a href="#">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="event-item">
                        <div class="col-sm-7">
                            <div class="event-date">
                                <p><span>29</span> JUL</p>
                            </div>
                            <h3>Inter School Sports Meet</h3>
                            <h6><i class="fa fa-map-marker"></i>Playground</h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                        <div class="col-sm-5 event-item-img">
                            <div class="event-img">
                                <img src="assets/img/news/news-sm1.jpg" alt="event" />
                                <div class="event-detail-link">
                                    <a href="#">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="event-item">
                        <div class="col-sm-7">
                            <div class="event-date">
                                <p><span>20</span> JUL</p>
                            </div>
                            <h3>Annual Science Fest</h3>
                            <h6><i class="fa fa-map-marker"></i>Sciene Building</h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                        <div class="col-sm-5 event-item-img">
                            <div class="event-img">
                                <img src="assets/img/news/news-sm2.jpg" alt="event" />
                                <div class="event-detail-link">
                                    <a href="#">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div> -->
                  <!--   <div class="event-control-box">
                        <div class="pull-left">
                            <a href="#">
                                <i class="fa fa-arrow-left"></i>
                                PREVIOUS
                            </a>
                        </div>
                        <div class="pull-right">
                            <a href="#">
                                NEXT
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div> -->
                </div>
                <div class="col-md-4 right-event-items">
                   @php $countevent = 1 @endphp
                      @foreach($getAllEvent as $getAllEvented)
                    @php $recevieDataed = json_decode($getAllEvented->news_content) @endphp

                    @if($countevent == 1)
                    <div class="event-item">
                        <img src="{{ asset('storage/'.$recevieDataed->sideImage )}}" alt="event" />
                    </div>
                    <div class="featured-event">
                        <div class="event-date">
                            <p><span>{{ $getAllEvented->created_at->format('d') }}</span> {{ strtoupper($getAllEvented->created_at->format('M')) }}</p>
                        </div>
                        <h3>{{ $recevieDataed->title }}</h3>
                        <h6><i class="fa fa-map-marker"></i>{{ $recevieDataed->eventLocation }}</h6>
                        <p>{{ str_limit($recevieDataed->description, $limit = 124, $end = '...') }}</p>
                        <a href="{{ route('singleEvents',$getAllEvented->id) }}"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
                    </div>
                    @endif
                    @php $countevent++ @endphp
                     @endforeach


                    <div class="event-item categories-list">
                        <div class="sidebar-box">
                            <h5><i class="fa fa-list"></i>CATEGORIES</h5>
                            <div class="inner-content-box">
                                <ul class="list-group">

                                    @foreach($category as $categorys)
                                    <li class="list-group-item"><a href="{{ route('events',['cat_id' => $categorys->id ,'page' =>1])}}"><i class="fa fa-graduation-cap"></i>{{ $categorys->category }} </a><span class="badge">{{ $categorys->newscontents->count() }}</span></li>
                                    @endforeach
                                    <!-- <li class="list-group-item"><a href="#"><i class="fa fa-users"></i>ADMISSION</a><span class="badge">20</span></li>
                                    <li class="list-group-item"><a href="#"><i class="fa fa-trophy"></i>SPORTS</a><span class="badge">12</span></li>
                                    <li class="list-group-item"><a href="#"><i class="fa fa-code"></i>MISCELLANEOUS</a><span class="badge">12</span></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

@endsection