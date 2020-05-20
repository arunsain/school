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
  									<strong>Sucess!</strong> {{ session()->get('success')}}
								</div>

								@endif
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-user"></i>FIRST IMAGE</h6>
									<div class="inner-item">
										<div class="dash-form">
											<form action="{{ route('MainPage.update') }}" enctype="multipart/form-data" method="post" >
												@csrf
												
											<div class="col-sm-6">
												<div class="event-img">
											<img style="max-width: 400px;max-height: 265px" src="{{ asset('storage/'.$contentData->firstImage) }}" alt="event">

										</div>
											</div>
												<div class="col-sm-6">
												<label><i class="fa fa-file-picture-o"></i>UPLOAD PHOTO</label>
												<input type="file" name="firstImage" />
												<div style="color:red;">{{ $errors->first('firstImage')}}</div>
												<input type="hidden" name="firstImageOld" value="{{ $contentData->firstImage }}" />
												<input type="hidden" name="secondImageOld" value="{{ $contentData->secondImage }}" />
												<input type="hidden" name="thirdImageOld" value="{{ $contentData->thirdImage }}" />
												<input type="hidden" name="pageId" value="{{ $page->id }}" />
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
											<img style="max-width: 400px;max-height: 265px" src="{{ asset('storage/'.$contentData->secondImage) }}" alt="event">
										</div>
											</div>
												<div class="col-sm-6">
												<label><i class="fa fa-file-picture-o"></i>UPLOAD PHOTO</label>
												<input type="file" name="secondImage" />
												<div style="color:red;">{{ $errors->first('secondImage')}}</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>


								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-user"></i>THIRD IMAGE</h6>
									<div class="inner-item">
										<div class="dash-form">
											<div class="col-sm-6">
												<div class="event-img">
											<img style="max-width: 400px;max-height: 265px" src="{{ asset('storage/'.$contentData->thirdImage) }}" alt="event">
										</div>
											</div>
												<div class="col-sm-6">
												<label><i class="fa fa-file-picture-o"></i>UPLOAD PHOTO</label>
												<input type="file" name="thirdImage" />
												<div style="color:red;">{{ $errors->first('thirdImage')}}</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>



								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-user-secret"></i>CONTACT INFO</h6>
									<div class="inner-item">
										<div class="dash-form">
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-home"></i>ADDRESS</label>
												<input type="text" name="address" value="{{ $contentData->address }}" />
												<div style="color:red;">{{ $errors->first('address')}}</div>
											</div>
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-phone"></i>CONTACT #</label>
												<input type="text" name="mobile" value="{{ $contentData->mobile }}" />
												<div style="color:red;">{{ $errors->first('mobile')}}</div>
											</div>

											<div class="col-sm-3">
												<label class="clear-top-margin" ><i class="fa fa-envelope-o"></i>EMAIL</label>
												<input type="text" name="email" value="{{ $contentData->email }}" />
												<div style="color:red;">{{ $errors->first('email')}}</div>
											</div>

											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-flag"></i>SCHOOL TIME 1#</label>
												<input type="text" name="time1" value="{{ $contentData->time1 }}" />
												<div style="color:red;">{{ $errors->first('time1')}}</div>
											</div>
											<div class="clearfix"></div>
											<div class="col-sm-3">
												<label><i class="fa fa-flag"></i>SCHOOL TIME 2#</label>
												<input type="text" name="time2" value="{{ $contentData->time2 }}" />
												<div style="color:red;">{{ $errors->first('time2')}}</div>
											</div>
											<!-- <div class="col-sm-3">
												<label><i class="fa fa-envelope-o"></i>EMAIL</label>
												<input type="text" placeholder="john@pathshala.com" />
											</div>
											<div class="col-sm-3">
												<label><i class="fa fa-bell-o"></i>RELIGION</label>
												<select>
													<option>-- Select --</option>
													<option>Buddhism</option>
													<option>Christian</option>
													<option>Hinduism</option>
												</select>
											</div> -->
											<!-- <div class="col-sm-3">
												<label><i class="fa fa-flag"></i>NATIONALITY</label>
												<select>
													<option>-- Select --</option>
													<option>Canadian</option>
													<option>Indian</option>
												</select>
											</div> -->
											<div class="clearfix"></div>
											<!-- <div class="col-sm-3">
												<label><i class="fa fa-home"></i>ADDRESS</label>
												<input type="text" placeholder="H/N 42 Street# 10" />
											</div>
											<div class="col-sm-3">
												<label><i class="fa fa-flag"></i>COUNTRY</label>
												<select>
													<option>-- Select --</option>
													<option>Canada</option>
													<option>India</option>
													<option>Japan</option>
												</select>
											</div>
											<div class="col-sm-3">
												<label><i class="fa fa-id-card"></i>STATE</label>
												<select>
													<option>-- Select --</option>
													<option>British Columbia</option>
													<option>Ontario</option>
												</select>
											</div>
											<div class="col-sm-3">
												<label><i class="fa fa-code"></i>ZIP</label>
												<input type="text" placeholder="90890" />
											</div> -->
											<div class="clearfix"></div>
										<!-- 	<div class="col-sm-3">
												<label><i class="fa fa-file-picture-o"></i>UPLOAD PHOTO</label>
												<input type="file" placeholder="90890" />
											</div> -->
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-book"></i>SOCIAL INFO</h6>
									<div class="inner-item">
										<div class="dash-form">
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-id-card"></i>FACEBOOK #</label>
												<input type="text" name="fbLink" value="{{ $contentData->fbLink }}" />
												<div style="color:red;">{{ $errors->first('fbLink')}}</div>
											</div>
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-id-card"></i>TWITTER  #</label>
												<input type="text" name="twitLink" value="{{ $contentData->twitLink }}" />
												<div style="color:red;">{{ $errors->first('twitLink')}}</div>
											</div>
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-id-card"></i>GOOGLE PLUS #</label>
												<input type="text" name="gPlusLink" value="{{ $contentData->gPlusLink }}" />
												<div style="color:red;">{{ $errors->first('gPlusLink')}}</div>
											</div>
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-puzzle-piece"></i>LINKEDIN #</label>
												<input type="text" name="lkdLink" value="{{ $contentData->lkdLink }}" />
												<div style="color:red;">{{ $errors->first('lkdLink')}}</div>
											</div>
											<div class="clearfix"></div>
											<!-- <div class="col-sm-3">
												<label><i class="fa fa-graduation-cap"></i>LAST SCHOOL</label>
												<input type="text" placeholder="ABC SCHOOL" />
											</div>
											<div class="col-sm-3">
												<label><i class="fa fa-star"></i>LAST STD</label>
												<input type="text" placeholder="4 STD" />
											</div> -->
											<!-- <div class="col-sm-3">
												<label><i class="fa fa-code"></i>MARKS OBTAINED</label>
												<input type="text" placeholder="76%" />
											</div>
											<div class="col-sm-3">
												<label><i class="fa fa-futbol-o"></i>SPORTS</label>
												<select>
													<option>-- Select --</option>
													<option>Cricket</option>
													<option>Football</option>
													<option>Tenis</option>
												</select>
											</div> -->
											<div class="clearfix"></div>
											<div class="col-sm-12">
												<button type="submit"><i class="fa fa-paper-plane"></i> SAVE</button>
											</div>
										</form>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
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


