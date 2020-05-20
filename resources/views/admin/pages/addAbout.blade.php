@php $contentData = json_decode($page->pageMeta->content) @endphp
@extends('layouts.schoolapp')
@section('content')
<div class="main-content" id="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 clear-padding-xs">
                <h5 class="page-title"><i class="fa fa-user"></i>MAIN PAGE</h5>
                <div class="section-divider"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 clear-padding-xs">
                <div class="col-md-12">
                    @if(session()->has('success'))

                                <div class="alert alert-success">
                                    <strong>Success!</strong> {{ session()->get('success') }}
                                </div>

                                @endif
                	<form action="{{ route('about.store') }}" enctype="multipart/form-data" method="post">
                    <div class="dash-item first-dash-item">
                        <h6 class="item-title"><i class="fa fa-user"></i>FIRST IMAGE</h6>
                        <div class="inner-item">
                            <div class="dash-form">
                                    @csrf
                                    <div class="col-sm-6">
                                        <div class="event-img">
                                            <img style="max-width: 400px;max-height: 265px" src="{{  asset('storage/'.$contentData->firstImage) }}" alt="event">

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label><i class="fa fa-file-picture-o"></i>UPLOAD PHOTO</label>
                                        <input type="file" name="firstImage">
                                        <div style="color:red;"></div>
                                        <input type="hidden" name="firstImageOld" value="{{ $contentData->firstImage }}">
                                        <input type="hidden" name="secondImageOld" value="{{ $contentData->secondImage }}">
                                        <input type="hidden" name="pageId" value="{{ $page->pagemeta->id }}">
                                    </div>
                                    <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="dash-item">
                        <h6 class="item-title"><i class="fa fa-user"></i>SECOND IMAGE</h6>
                        <div class="inner-item">
                            <div class="dash-form">
                                <div class="col-sm-6">
                                    <div class="event-img">
                                        <img style="max-width: 400px;max-height: 265px" src="{{  asset('storage/'.$contentData->secondImage) }}" alt="event">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label><i class="fa fa-file-picture-o"></i>UPLOAD PHOTO</label>
                                    <input type="file" name="secondImage">
                                    <div style="color:red;"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="dash-item">
                        <h6 class="item-title"><i class="fa fa-book"></i>SOCIAL INFO</h6>
                        <div class="inner-item">
                            <div class="dash-form">
                            	  <div class="col-sm-12">
                                    <label class="clear-top-margin"><i class="fa fa-id-card"></i>PAGE TITLE #</label>
                                    <input type="text" name="pageTitle" value="{{ $contentData->pageTitle }}">
                                    <div style="color:red;"></div>
                                </div>
                                <div class="clearfix"></div>

                                <div class="col-sm-6">
                                    <label ><i class="fa fa-id-card"></i>TITLE #</label>
                                    <input type="text" name="title" value="{{ $contentData->title }}">
                                    <div style="color:red;"></div>
                                </div>
                                <div class="col-sm-6">
                                    <label ><i class="fa fa-id-card"></i>DESCRIPTION #</label>
                                    <input type="text" name="description" value="{{ $contentData->description }}">
                                    <div style="color:red;"></div>
                                </div>
                               
                                <div class="clearfix"></div>
                                 <div class="col-sm-6">
                                    <label ><i class="fa fa-id-card"></i>COURSE NAME 1 #</label>
                                    <input type="text" name="courseName1" value="{{ $contentData->courseName1 }}">
                                    <div style="color:red;"></div>
                                </div>
                                <div class="col-sm-6">
                                    <label ><i class="fa fa-id-card"></i>COURSE DESCRIPTION 1 #</label>
                                    <input type="text" name="coureseDesc1" value="{{ $contentData->coureseDesc1 }}">
                                    <div style="color:red;"></div>
                                </div>
                               
                                <div class="clearfix"></div>

                                 <div class="col-sm-6">
                                    <label ><i class="fa fa-id-card"></i>COURSE NAME 2 #</label>
                                    <input type="text" name="courseName2" value="{{ $contentData->courseName2 }}">
                                    <div style="color:red;"></div>
                                </div>
                                <div class="col-sm-6">
                                    <label ><i class="fa fa-id-card"></i>COURSE DESCRIPTION 2 #</label>
                                    <input type="text" name="coureseDesc2" value="{{ $contentData->coureseDesc2 }}">
                                    <div style="color:red;"></div>
                                </div>
                               
                                <div class="clearfix"></div>

                                 <div class="col-sm-6">
                                    <label ><i class="fa fa-id-card"></i>COURSE NAME 3 #</label>
                                    <input type="text" name="courseName3" value="{{ $contentData->courseName3 }}">
                                    <div style="color:red;"></div>
                                </div>
                                <div class="col-sm-6">
                                    <label ><i class="fa fa-id-card"></i>COURSE DESCRIPTION 3 #</label>
                                    <input type="text" name="coureseDesc3" value="{{ $contentData->coureseDesc3 }}">
                                    <div style="color:red;"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-sm-12">
                                    <button type="submit"><i class="fa fa-paper-plane"></i> SAVE</button>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-togggle-btn">
        <a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
    </div>
    <div class="dash-footer col-lg-12">
        <p>Copyright Pathshala</p>
    </div>
</div>
@endsection


