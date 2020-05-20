@php  $contentdata = json_decode($page->pageMeta->content); @endphp

@php  $pageGalleryData = json_decode($pageGallery->pageMeta->content); @endphp
 @extends('fronthtml.layouts.index')
 @section('contents')
<!-- Page Title Section -->
      <!-- Page Title Section -->
        <div class="row page-title page-title-about" style="background-image: url({{ asset('storage/'.$pageGalleryData->galleryImage) }});">
            <div class="container">
                <h2><i class="fa fa-picture-o"></i>{{ $pageGalleryData->title }}</h2>
            </div>
        </div>
        
        <!-- START: GALLERY -->
        <div class="row gallery-row">
            <div class="container clear-padding">
                <div class="image-set">

                    @foreach($gallery as $galleries)
                    <div class="col-md-4 col-sm-4">
                        <div class="image-wrapper">
                            <img src="{{ asset('storage'.$galleries->thumbnail_image) }}" alt="Cruise">
                            <div class="img-caption">
                                <div class="link">
                                 @php   $str = str_replace('/uploads/','',$galleries->image); @endphp
                                    <a title="{{ $str }}" href="{{ asset('storage'.$galleries->image) }}">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                 <!--    <div class="col-md-4 col-sm-4">
                        <div class="image-wrapper">
                            <img src="assets/img/news/news-sm2.jpg" alt="Cruise">
                            <div class="img-caption">
                                <div class="link">
                                    <a title="Arts" href="assets/img/news/news-sm2.jpg">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="image-wrapper">
                            <img src="assets/img/news/news-sm3.jpg" alt="Cruise">
                            <div class="img-caption">
                                <div class="link">
                                    <a title="Arts" href="assets/img/news/news-sm3.jpg">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4 col-sm-4">
                        <div class="image-wrapper">
                            <img src="assets/img/news/news-sm1.jpg" alt="Cruise">
                            <div class="img-caption">
                                <div class="link">
                                    <a title="Fine Arts" href="assets/img/news/news-sm3.jpg">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="image-wrapper">
                            <img src="assets/img/news/news-sm1.jpg" alt="Cruise">
                            <div class="img-caption">
                                <div class="link">
                                    <a title="Arts" href="assets/img/news/news-sm1.jpg">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="image-wrapper">
                            <img src="assets/img/news/news-sm2.jpg" alt="Cruise">
                            <div class="img-caption">
                                <div class="link">
                                    <a title="Arts" href="assets/img/news/news-sm2.jpg">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- END: GALLERY -->

@endsection