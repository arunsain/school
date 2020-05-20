@php $contentData = json_decode($page->pageMeta->content) @endphp

@extends('layouts.schoolapp')
@section('content')
<!-- MAIN CONTENT -->
<div class="main-content" id="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<h5 class="page-title"><i class="fa fa-user-secret"></i>ADD EVENT CONTENT</h5>
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
					<form id="submit" action="{{ route('admission.store')}}" enctype="multipart/form-data" method="post">
						@csrf
						<div class="dash-item first-dash-item">
							<h6 class="item-title"><i class="fa fa-user"></i> INFORMATION</h6>
							<div class="inner-item">

								<div class="dash-form">

									<div class="col-sm-12">
										<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>TITLE</label>
										<input required type="text" name="title" value="{{ $contentData->title }}" />
										<div style="color:red">{{ $errors->first('title')}}</div>
									</div>

									

									<div class="clearfix"></div>



									<div class="col-sm-6">
										<label ><i class="fa fa-user-circle-o"></i>SECTION TITLE 1</label>
										<input required type="text" name="sectionTitle1" value="{{ $contentData->sectionTitle1 }}" />
										<div style="color:red">{{ $errors->first('title')}}</div>
									</div>

									<div class="col-sm-6">
															<label  ><i class="fa fa-file-picture-o"></i>SECTION DESC 1</label>
															<textarea required name="sectionDesc1" rows="2">{{ $contentData->sectionDesc1 }}</textarea>
															
															<div style="color:red">{{ $errors->first('sideImage')}}</div>
														</div>
									<div class="clearfix"></div>
									


									<div class="col-sm-6">
										<label ><i class="fa fa-user-circle-o"></i>SECTION TITLE 2</label>
										<input required type="text" name="sectionTitle2"  value="{{ $contentData->sectionTitle2 }}" />
										<div style="color:red">{{ $errors->first('title')}}</div>
									</div>

									<div class="col-sm-6">
															<label  ><i class="fa fa-file-picture-o"></i>SECTION DESC 2</label>
															<textarea required name="sectionDesc2" rows="2">{{ $contentData->sectionDesc2 }}</textarea>
															
															<div style="color:red">{{ $errors->first('sideImage')}}</div>
														</div>
									<div class="clearfix"></div>


									<div class="col-sm-6">
										<label ><i class="fa fa-user-circle-o"></i>SECTION TITLE 3</label>
										<input required type="text" name="sectionTitle3"  value="{{ $contentData->sectionTitle3 }}" />
										<div style="color:red">{{ $errors->first('title')}}</div>
									</div>

									<div class="col-sm-6">
															<label  ><i class="fa fa-file-picture-o"></i>SECTION DESC 3</label>
																<textarea required name="sectionDesc3" rows="2">{{ $contentData->sectionDesc3 }}</textarea>
															
															<div style="color:red">{{ $errors->first('sideImage')}}</div>
														</div>
									<div class="clearfix"></div>

									<div class="col-sm-6">
										<label ><i class="fa fa-user-circle-o"></i>SECTION TITLE 4</label>
										<input required type="text" name="sectionTitle4"  value="{{ $contentData->sectionTitle4 }}" />
											<input required type="hidden" name="pageId" value="{{ $page->pageMeta->page_id }}" />
										<div style="color:red">{{ $errors->first('title')}}</div>
									</div>

									<div class="col-sm-6">
															<label  ><i class="fa fa-file-picture-o"></i>SECTION DESC 4</label>
																<textarea required name="sectionDesc4" rows="2">{{ $contentData->sectionDesc4 }}</textarea>
															
															<div style="color:red">{{ $errors->first('sideImage')}}</div>
														</div>
									<div class="clearfix"></div>
									
									


														
													
														
														<!-- <div class="col-sm-3">
															<label><i class="fa fa-file-picture-o"></i>FACEBOOK</label>
															<input  type="text" name="facebook" placeholder="FACEBOOK" />
															
															<div style="color:red">{{ $errors->first('image')}}</div>
														</div> -->
														<!-- <div class="col-sm-3">
															<label><i class="fa fa-file-picture-o"></i>GOOGLE +</label>
															<input  type="text" name="googlePlus" placeholder="GOOGLE +" />
															
															<div style="color:red">{{ $errors->first('googlePlus')}}</div>
														</div> -->
														<!-- <div class="col-sm-3">
															<label><i class="fa fa-file-picture-o"></i>LINKEDIN</label>
															<input  type="text" name="linkedin" placeholder="LINKEDIN" />
															
															<div style="color:red">{{ $errors->first('linkedin')}}</div>
														</div> -->
														<!-- <div class="col-sm-3">
															<label><i class="fa fa-file-picture-o"></i>UPLOAD PHOTO</label>
															<input required type="file" name="image"  />
															
															<div style="color:red">{{ $errors->first('image')}}</div>
														</div> -->
														<div class="clearfix"></div>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="clearfix"></div>
											</div>

											<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-user"></i>MAIN IMAGE</h6>
									<div class="inner-item">
										<div class="dash-form">
											<div class="col-sm-6">
												<div class="event-img">
											<img style="max-width: 400px;max-height: 265px" src="{{ asset('storage/'.$contentData->imageMain) }}" alt="event">
										</div>
											</div>
												<div class="col-sm-6">
												<label><i class="fa fa-file-picture-o"></i>MAIN IMAGE</label>
												<input  type="file" name="imageMain"  />
												<input  type="hidden" name="oldImageMain" value="{{ $contentData->imageMain }}"  />
												<div style="color:red;"></div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>



								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-user"></i>MIDDLE IMAGE</h6>
									<div class="inner-item">
										<div class="dash-form">
											<div class="col-sm-6">
												<div class="event-img">
											<img style="max-width: 400px;max-height: 265px" src="{{ asset('storage/'.$contentData->imageMiddle) }}" alt="event">
										</div>
											</div>
												<div class="col-sm-6">
												<label><i class="fa fa-file-picture-o"></i>MIDDLE IMAGE</label>
												<input  type="file" name="imageMiddle"  />
												<input  type="hidden" name="oldImageMiddle" value="{{ $contentData->imageMiddle }}"  />
												<div style="color:red;"></div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>




											<div class="dash-item">
												<h6 class="item-title"><i class="fa fa-home"></i>SOCAIL LINKS</h6>
												<div class="inner-item">
													<div class="dash-form">
														
														
														<div class="col-sm-12">
															<label class="clear-top-margin" ><i class="fa fa-file-picture-o"></i>YOUTUPE LINK</label>
															<input required type="text" name="youtubeLink"  value="{{ $contentData->youtubeLink }}" />
															
															<div style="color:red">{{ $errors->first('youtubeLink')}}</div>
														</div>
														
																	
																			<!-- <div class="clearfix"></div> -->
																			<!-- <div class="col-sm-3">
																				<label><i class="fa fa-code"></i>ZIP</label>
																				<input required type="text" name="zip" placeholder="ZIP" />
																				<div style="color:red">{{ $errors->first('zip')}}</div>
																			</div> -->
																			<!-- <div class="col-sm-3">
																				<label><i class="fa fa-phone"></i>PHONE #</label>
																				<input required type="text" name="phone" placeholder="PHONE" />
																				<div style="color:red">{{ $errors->first('phone')}}</div>
																			</div> -->
																			<!-- <div class="col-sm-3">
																				<label><i class="fa fa-phone"></i>ALTERNATE PHONE #</label>
																				<input required type="text" name="alternatePhone" placeholder="ALTERNATE PHONE" />
																				<div style="color:red">{{ $errors->first('alternatePhone')}}</div>
																			</div> -->
																			<!-- <div class="col-sm-3">
																				<label><i class="fa fa-envelope-o"></i>EMAIL</label>
																				<input required type="text" name="email" placeholder="EMAIL" />
																				<div style="color:red">{{ $errors->first('email')}}</div>
																			</div> -->
																			<div class="clearfix"></div>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																	<div class="clearfix"></div>
																</div>

																<div class="dash-item">
																	<h6 class="item-title"><i class="fa fa-book"></i>ACADEMIC INFO</h6> 
																	<div class="inner-item">
																		<div class="dash-form">
																			<div class="col-sm-6">
																				<label class="clear-top-margin"><i class="fa fa-graduation-cap"></i>INFO TITLE</label>
																					<input required type="text" name="infoTitle" value="{{ $contentData->infoTitle }}"/>
																			</div>

																			<div class="col-sm-6">
																				<label class="clear-top-margin"><i class="fa fa-graduation-cap"></i>INFO DESCRIPTION</label>
																					<textarea required name="infoDesc" rows="2">{{ $contentData->infoDesc }}</textarea>
																			</div>
																			<div class="clearfix"></div>
																			<div class="col-sm-5">
																				<label ><i class="fa fa-graduation-cap"></i>QUESTION</label>
																				<textarea required name="question[]" rows="2">{{ $contentData->question[0]}}
																				</textarea>
																				<div style="color:red">{{ $errors->first('degree')}}</div>
																			</div>
																		
																		
																			<div class="col-sm-5">
																				<label><i class="fa fa-puzzle-piece"></i>ANSWERE</label>
																				<textarea required name="answere[]" rows="2">{{ $contentData->answere[0]}}</textarea>
																				<!-- <input  required type="text" name="highestCGPA" placeholder="" /> -->
																				<div style="color:red">{{ $errors->first('highestDegree')}}</div>
																			</div>
																			<div class="col-sm-2" style="margin-top: 23px;">
																				<button id="addQuestionButton" type="button"><i class="fa fa-paper-plane"></i> Add More</button>
																			</div>



																			<div class="clearfix"></div>

 @for ($g = 1; $g < count($contentData->question); $g++)

<div id="addQuestionRowEdit{{$g}}">
    <div class="col-sm-5">
        <label><i class="fa fa-graduation-cap"></i>QUESTION</label>
        <textarea required name="question[]" rows="2">{{ $contentData->question[$g] }}</textarea>
    </div>
    <div class="col-sm-5">
        <label><i class="fa fa-graduation-cap"></i>ANSWERE</label>
        <textarea name="answere[]" required rows="2">{{ $contentData->answere[$g] }}</textarea>
    </div>
    <div class="col-sm-2">
        <button class="removeQuestionEdit" data-id="{{$g}}" type="button"><i class="fa fa-paper-plane"></i>Remove</button>
    </div>
    <div class="clearfix"></div>
</div>

																			@endfor

																			<div id="quertionDiv"></div>
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


