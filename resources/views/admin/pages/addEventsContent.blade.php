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
					<form id="submit" action="{{ route('eventscontent.store')}}" enctype="multipart/form-data" method="post">
						@csrf
						<div class="dash-item first-dash-item">
							<h6 class="item-title"><i class="fa fa-user"></i> INFORMATION</h6>
							<div class="inner-item">

								<div class="dash-form">

									<div class="col-sm-4">
										<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>TITLE</label>
										<input required type="text" name="title" placeholder="TITLE" />
										<div style="color:red">{{ $errors->first('title')}}</div>
									</div>

									<div class="col-sm-4">
											<label class="clear-top-margin"><i class="fa fa-bell-o"></i>CATEGORY</label>
											<select required name="catId">
												<option value="" >-- Select --</option>
												@foreach($newsCategory as $newsCategorys)
												<option  value="{{ $newsCategorys->id }}">{{ $newsCategorys->category }}</option>
															@endforeach
															</select>
															<div style="color:red">{{ $errors->first('religion')}}</div>
														</div>
									<div class="col-sm-4" >
										<label class="clear-top-margin"><i class="fa fa-calendar"></i>EVENT DATE</label>
										<input required type="text" id="studentDOB" name="eventdate" placeholder="MM/DD/YYYY" />
										<div style="color:red">{{ $errors->first('eventdate')}}</div>
									</div>
									<div class="clearfix"></div>
									
									<div class="col-sm-6" >
										<label ><i class="fa fa-calendar"></i>EVENT LOCATION</label>
										<input required type="text" name="eventLocation" placeholder="EVENT LOCATION" />
										<div style="color:red">{{ $errors->first('eventLocation')}}</div>
									</div>

									<div class="col-sm-6">
										<label ><i class="fa fa-user-circle-o"></i>EVENT TIME</label>
										<input required type="text" name="eventTime" placeholder="EVENT TIME" />
										<div style="color:red">{{ $errors->first('eventTime')}}</div>
									</div>
									<div class="clearfix"></div>


									<!-- <div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-venus"></i>GENDER</label>
										<select required  name="gender">
											<option value="">-- Select --</option>
											<option  value="Male">Male</option>
											}
											<option  value="Female">Female</option>
											</select>
											<div style="color:red">{{ $errors->first('gender')}}</div>
									</div> -->

<!-- 										<div class="col-sm-3">
											<label class="clear-top-margin"><i class="fa fa-bell-o"></i>RELIGION</label>
											<select required name="religion">
												<option value="" >-- Select --</option>
												<option  value="Buddhism">Buddhism</option>
													<option  value="Christian">Christian</option>
														<option  value="Hinduism">Hinduism</option>
															<option  value="Muslim">Muslim</option>
															</select>
															<div style="color:red">{{ $errors->first('religion')}}</div>
														</div> -->
														<div class="clearfix"></div>

														<div class="col-sm-12">
															<label><i class="fa fa-file-picture-o"></i>DESCRIPTION</label>
														<textarea  rows="10" name="description"></textarea>
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
												<h6 class="item-title"><i class="fa fa-home"></i>CONTACT INFO</h6>
												<div class="inner-item">
													<div class="dash-form">
														<div class="col-sm-6">
															<label class="clear-top-margin" ><i class="fa fa-file-picture-o"></i>EVENT IMAGE</label>
															<input required type="file" name="eventImage"  />
															
															<div style="color:red">{{ $errors->first('eventImage')}}</div>
														</div>
														<div class="col-sm-6">
															<label class="clear-top-margin" ><i class="fa fa-file-picture-o"></i>SIDE IMAGE</label>
															<input required type="file" name="sideImage"  />
															
															<div style="color:red">{{ $errors->first('sideImage')}}</div>
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
																			<div class="col-sm-12">
																				<label class="clear-top-margin"><i class="fa fa-graduation-cap"></i>HIGHEST DEGREE</label>
																					<textarea required name="scheduleDec" rows="5"></textarea>
																			</div>
																			<div class="clearfix"></div>
																			<div class="col-sm-5">
																				<label ><i class="fa fa-graduation-cap"></i>SCHEDULE HEADING</label>
																				<textarea required name="sheduleHead[]" rows="5"></textarea>
																				<div style="color:red">{{ $errors->first('degree')}}</div>
																			</div>
																		
																		
																			<div class="col-sm-5">
																				<label><i class="fa fa-puzzle-piece"></i>SCHEDULE CONTENT</label>
																				<textarea required name="sheduleContent[]" rows="5"></textarea>
																				<!-- <input  required type="text" name="highestCGPA" placeholder="" /> -->
																				<div style="color:red">{{ $errors->first('highestDegree')}}</div>
																			</div>
																			<div class="col-sm-2" style="margin-top: 23px;">
																				<button id="addEventSchudle" type="button"><i class="fa fa-paper-plane"></i> Add More</button>
																			</div>
																			<div class="clearfix"></div>

																			<div id="eventSchudleDiv"></div>
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


