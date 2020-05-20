@php $jsondata = json_decode($getUser->getuser->content) @endphp
@extends('layouts.schoolapp')
@section('content')
<!-- MAIN CONTENT -->
<div class="main-content" id="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<h5 class="page-title"><i class="fa fa-user-secret"></i>ADMIN DETAIL</h5>
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
					<form id="submit" action="{{ route('principal.store')}}" enctype="multipart/form-data" method="post">
						@csrf
						<div class="dash-item first-dash-item">
							<h6 class="item-title"><i class="fa fa-user"></i>ADMIN INFO</h6>
							<div class="inner-item">

								<div class="dash-form">

									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>FIRST NAME</label>
										<input required type="text" name="name" value="{{ $getUser->name}}" />
										<div style="color:red">{{ $errors->first('name')}}</div>
									</div>
									<div class="col-sm-3" >
										<label class="clear-top-margin"><i class="fa fa-calendar"></i>DATE OF BIRTH</label>
										<input required type="text" id="studentDOB" name="dateOfBirth" value="{{ $jsondata->dateOfBirth }}" />
										<div style="color:red">{{ $errors->first('dateOfBirth')}}</div>
									</div>

									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-venus"></i>GENDER</label>
										<select required  name="gender">
											<option value="">-- Select --</option>
											<option <?php if($jsondata->gender == "Male" ){
												echo "selected" ;} ?> value="Male">Male</option>
											}
											<option <?php if($jsondata->gender == "Female" ){
												echo "selected" ;} ?> value="Female">Female</option>
											</select>
											<div style="color:red">{{ $errors->first('gender')}}</div>
										</div>

										<div class="col-sm-3">
											<label class="clear-top-margin"><i class="fa fa-bell-o"></i>RELIGION</label>
											<select required name="religion">
												<option value="" >-- Select --</option>
												<option <?php if($jsondata->religion == "Buddhism" ){
													echo "selected" ;} ?> value="Buddhism">Buddhism</option>
													<option <?php if($jsondata->religion == "Christian" ){
														echo "selected" ;} ?> value="Christian">Christian</option>
														<option <?php if($jsondata->religion == "Hinduism" ){
															echo "selected" ;} ?> value="Hinduism">Hinduism</option>
															<option <?php if($jsondata->religion == "Muslim" ){
																echo "selected" ;} ?> value="Muslim">Muslim</option>
															</select>
															<div style="color:red">{{ $errors->first('religion')}}</div>
														</div>
														<div class="clearfix"></div>

														<div class="col-sm-12">
															<label><i class="fa fa-file-picture-o"></i>UPLOAD PHOTO</label>
														<textarea  rows="5" name="aboutUs">{{ $jsondata->aboutUs}}</textarea>
														</div>
														<div class="clearfix"></div>
														<div class="col-sm-6">
															<div class="event-img">
																<img style="max-width: 200px;max-height: 265px" src="{{ asset('storage/'.$jsondata->image) }}" alt="event">

															</div>
														</div>
														<div class="col-sm-6">
															<label><i class="fa fa-file-picture-o"></i>UPLOAD PHOTO</label>
															<input  type="file" name="image" placeholder="90890" />
															<input type="hidden" name="userId" value="1" />
															<div style="color:red">{{ $errors->first('image')}}</div>
														</div>
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
														<div class="col-sm-3">
															<label class="clear-top-margin"><i class="fa fa-home"></i>ADDRESS 1</label>
															<input required type="text" name="address1" value="{{ $jsondata->address1 }}" />
															<div style="color:red">{{ $errors->first('address1')}}</div>
														</div>
														<div class="col-sm-3">
															<label class="clear-top-margin"><i class="fa fa-home"></i>ADDRESS 2</label>
															<input required type="text" name="address2" value="{{ $jsondata->address2 }}" />
															<input type="hidden" name="oldImage" value="{{ $jsondata->image}}" />
															<div style="color:red">{{ $errors->first('address2')}}</div>
														</div>
														<div class="col-sm-3">
															<label class="clear-top-margin"><i class="fa fa-flag"></i>COUNTRY</label>
															<select required name="country">
																<option  value="">-- Select --</option>
																<option <?php if($jsondata->country == "Canada" ){
																	echo "selected" ;} ?>  value="Canada">Canada</option>
																	<option <?php if($jsondata->country == "India" ){
																		echo "selected" ;} ?> value="India">India</option>
																		<option <?php if($jsondata->country == "Japan" ){
																			echo "selected" ;} ?> value="Japan">Japan</option>
																		</select>
																		<div style="color:red">{{ $errors->first('country')}}</div>
																	</div>
																	<div class="col-sm-3">
																		<label class="clear-top-margin"><i class="fa fa-id-card"></i>STATE</label>
																		<select required name="state">
																			<option value="">-- Select --</option>
																			<option <?php if($jsondata->state == "British Columbia" ){
																				echo "selected" ;} ?> value="British Columbia">British Columbia</option>
																				<option <?php if($jsondata->state == "Ontario" ){
																					echo "selected" ;} ?> value="Ontario">Ontario</option>
																				</select>
																				<div style="color:red">{{ $errors->first('state')}}</div>
																			</div>
																			<div class="clearfix"></div>
																			<div class="col-sm-3">
																				<label><i class="fa fa-code"></i>ZIP</label>
																				<input required type="text" name="zip" value="{{ $jsondata->zip }}" />
																				<div style="color:red">{{ $errors->first('zip')}}</div>
																			</div>
																			<div class="col-sm-3">
																				<label><i class="fa fa-phone"></i>PHONE #</label>
																				<input required type="text" name="phone" value="{{ $jsondata->phone }}" />
																				<div style="color:red">{{ $errors->first('phone')}}</div>
																			</div>
																			<div class="col-sm-3">
																				<label><i class="fa fa-phone"></i>ALTERNATE PHONE #</label>
																				<input required type="text" name="alternatePhone" value="{{ $jsondata->alternatePhone }}" />
																				<div style="color:red">{{ $errors->first('alternatePhone')}}</div>
																			</div>
																			<div class="col-sm-3">
																				<label><i class="fa fa-envelope-o"></i>EMAIL</label>
																				<input required type="text" name="email" value="{{ $getUser->email}}" />
																				<div style="color:red">{{ $errors->first('email')}}</div>
																			</div>
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
																			<div class="col-sm-4">
																				<label class="clear-top-margin"><i class="fa fa-graduation-cap"></i>HIGHEST DEGREE</label>
																				<input required type="text" name="highestDegree" value="{{ $jsondata->highestDegree }}" />
																				<div style="color:red">{{ $errors->first('degree')}}</div>
																			</div>
																			<div class="col-sm-2">
																				<label class="clear-top-margin"><i class="fa fa-building"></i>UNIVERSITY/COLLEGE</label>
																				<select required name="highestUniversity">
																					<option value="">-- Select --</option>
																					<option <?php if($jsondata->highestUniversity == "IIT" ){
												echo "selected" ;} ?>  value="IIT">IIT</option>
																					<option <?php if($jsondata->highestUniversity == "Harvard" ){
												echo "selected" ;} ?> value="Harvard">Harvard</option>
																				</select>
																				<div style="color:red">{{ $errors->first('university')}}</div>
																			</div>
																			<div class="col-sm-2">
																				<label class="clear-top-margin" ><i class="fa fa-calaendar"></i>YEAR PASSED</label>
																				<select required name="highestYearPassed">
																					<option value="">-- Select --</option>
																					<option <?php if($jsondata->highestYearPassed == "2005" ){
												echo "selected" ;} ?>  value="2005">2005</option>
																					<option <?php if($jsondata->highestYearPassed == "2006" ){
												echo "selected" ;} ?> value="2006">2006</option>
																				</select>
																				<div style="color:red">{{ $errors->first('yearPassed')}}</div>
																			</div>
																			<div class="col-sm-2">
																				<label class="clear-top-margin"><i class="fa fa-puzzle-piece"></i>CGPA</label>
																				<input  required type="text" name="highestCGPA" value="{{ $jsondata->highestDegree }}" />
																				<div style="color:red">{{ $errors->first('highestDegree')}}</div>
																			</div>
																			<div class="col-sm-2">
																				<button id="addQualification" type="button"><i class="fa fa-paper-plane"></i> Add More</button>
																			</div>
																			<div class="clearfix"></div>
	@if($jsondata->degree)																		
	@php $countQuali = 1 @endphp																		

@foreach($jsondata->degree as $key=>$value)

@php $getDegree =$jsondata->degree @endphp
@php $getCGPA =$jsondata->CGPA @endphp
@php $getUniversity =$jsondata->university @endphp
@php $getYearPassed =$jsondata->yearPassed @endphp

																			<div id="newRow{{ $countQuali }}" >
   <div class="col-sm-4" ><label ><i class="fa fa-graduation-cap"></i>HIGHEST DEGREE</label><input required type="text" name="degree[]" value="{{ $getDegree[$key] }}" /></div>
   <div class="col-sm-2">
      <label ><i class="fa fa-building"></i>UNIVERSITY/COLLEGE</label>
      <select required name="university[]">
         <option value="">-- Select --</option>
         <option <?php if($getUniversity[$key] == "IIT" ){
				echo "selected" ;} ?> value="IIT">IIT</option>
         <option  <?php if($getUniversity[$key] == "Harvard" ){
				echo "selected" ;} ?> value="Harvard">Harvard</option>
      </select>
   </div>
   <div class="col-sm-2">
      <label ><i class="fa fa-calaendar"></i>YEAR PASSED</label>
      <select required name="yearPassed[]">
         <option value="">-- Select --</option>
         <option  <?php if( $getYearPassed[$key] == "2005" ){
				echo "selected" ;} ?> value="2005">2005</option>
         <option   <?php if( $getYearPassed[$key] == "2006" ){
				echo "selected" ;} ?> value="2006">2006</option>
      </select>
   </div>
   <div class="col-sm-2"><label><i class="fa fa-puzzle-piece"></i>CGPA</label><input required name="CGPA[]" type="text" value="{{ $getCGPA[$key] }}" /></div>
   <div class="col-sm-2"><button class="removeBtnFetch" data-id="{{ $countQuali}}" type="button"><i class="fa fa-paper-plane"></i>Remove</button></div>
   <div class="clearfix"></div>
</div>
@php $countQuali++ @endphp
@endforeach
@endif


																			<div id="addQualificationField"></div>
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


