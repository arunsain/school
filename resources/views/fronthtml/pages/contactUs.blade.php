@php  $contentdata = json_decode($page->pageMeta->content); @endphp

@php  $pageContact = json_decode($pageContact->pageMeta->content); @endphp
 @extends('fronthtml.layouts.index')
 @section('contents')
    <!-- Page Title Section -->
        <div class="row page-title page-title-about" style="background-image: url({{ asset('storage/'.$pageContact->contactImage) }});">
            <div class="container">
                <h2><i class="fa fa-phone"></i>{{ $pageContact->title }}</h2>
            </div>
        </div>
        
        <!-- contact row -->
        <div class="row contact-row">
            <div class="container">
                <div class="contact-form col-sm-6">
                    <div class="col-xs-12">
                        <h3><i class="fa fa-edit"></i>WRITE TO US.</h3>
                    </div>
                    <div class="col-xs-6">
                        <label>FIRST NAME</label>
                        <input type="text" placeholder="First Name" class="form-control">
                    </div>
                    <div class="col-xs-6">
                        <label>FIRST NAME</label>
                        <input type="text" placeholder="First Name" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-xs-12">
                        <label>EMAIL</label>
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="col-xs-12">
                        <label>EMAIL</label>
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="col-xs-12">
                        <label>CONTACT REGARDING</label>
                        <select class="form-control">
                            <option>- Select -</option>
                            <option>Admission regarding query</option>
                            <option>Partnership regarding query</option>
                        </select>
                    </div>
                    <div class="col-xs-12">
                        <label>YOUR MESSAGE</label>
                        <textarea rows="3" placeholder="Write here" class="form-control"></textarea>
                    </div>
                    <div class="col-xs-12">
                        <a href="#" class="submit-contact-form"><i class="fa fa-paper-plane"></i> SEND</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-sm-6 address-box">
                    <h3><i class="fa fa-phone"></i>CONTACT US.</h3>
                    <div class="address-body">
                        <div class="address-item">
                            <div class="col-xs-1">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="col-xs-11">
                                <p>{{ $contentdata->address }}</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="address-item">
                            <div class="col-xs-1">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="col-xs-11">
                                <p>{{ $contentdata->email }}</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="address-item">
                            <div class="col-sm-1">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="col-xs-11">
                                <p>{{ $contentdata->mobile }}</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="address-item no-border">
                            <div class="col-xs-1">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="col-xs-11">
                                <p>{{ $contentdata->time1 }}</p>
                            </div>
                             <div class="col-xs-1">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="col-xs-11">
                                  <p>{{ $contentdata->time2 }}</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
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