@extends('layouts.schoolapp')
@section('content')
<!-- MAIN CONTENT -->
<div class="main-content" id="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<h5 class="page-title"><i class="fa fa-user-secret"></i>ADD TEACHER</h5>
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
					<form id="submit" action="{{ route('teacher.store')}}" enctype="multipart/form-data" method="post">
						@csrf
						<div class="dash-item first-dash-item">
							<h6 class="item-title"><i class="fa fa-user"></i>TEACHER INFO</h6>
							<div class="inner-item">

								<div class="dash-form">

									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>NAME</label>
										<input required type="text" name="name" placeholder="NAME" />
										<div style="color:red">{{ $errors->first('name')}}</div>
									</div>
									<div class="col-sm-3" >
										<label class="clear-top-margin"><i class="fa fa-calendar"></i>DATE OF BIRTH</label>
										<input required type="text" id="studentDOB" name="dateOfBirth" placeholder="MM/DD/YYYY" />
										<div style="color:red">{{ $errors->first('dateOfBirth')}}</div>
									</div>

									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-venus"></i>GENDER</label>
										<select required  name="gender">
											<option value="">-- Select --</option>
											<option  value="Male">Male</option>
											}
											<option  value="Female">Female</option>
											</select>
											<div style="color:red">{{ $errors->first('gender')}}</div>
										</div>

										<div class="col-sm-3">
											<label class="clear-top-margin"><i class="fa fa-bell-o"></i>RELIGION</label>
											<select required name="religion">
												<option value="" >-- Select --</option>
												<option  value="Buddhism">Buddhism</option>
													<option  value="Christian">Christian</option>
														<option  value="Hinduism">Hinduism</option>
															<option  value="Muslim">Muslim</option>
															</select>
															<div style="color:red">{{ $errors->first('religion')}}</div>
														</div>
														<div class="clearfix"></div>

														<div class="col-sm-12">
															<label><i class="fa fa-file-picture-o"></i>UPLOAD PHOTO</label>
														<textarea  rows="5" name="aboutUs"></textarea>
														</div>
														<div class="clearfix"></div>
														<div class="col-sm-3">
															<label><i class="fa fa-file-picture-o"></i>FACEBOOK</label>
															<input  type="text" name="facebook" placeholder="FACEBOOK" />
															
															<div style="color:red">{{ $errors->first('image')}}</div>
														</div>
														<div class="col-sm-3">
															<label><i class="fa fa-file-picture-o"></i>GOOGLE +</label>
															<input  type="text" name="googlePlus" placeholder="GOOGLE +" />
															
															<div style="color:red">{{ $errors->first('googlePlus')}}</div>
														</div>
														<div class="col-sm-3">
															<label><i class="fa fa-file-picture-o"></i>LINKEDIN</label>
															<input  type="text" name="linkedin" placeholder="LINKEDIN" />
															
															<div style="color:red">{{ $errors->first('linkedin')}}</div>
														</div>
														<div class="col-sm-3">
															<label><i class="fa fa-file-picture-o"></i>UPLOAD PHOTO</label>
															<input required type="file" name="image"  />
															
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
															<input required type="text" name="address1" placeholder ="ADDRESS 1" />
															<div style="color:red">{{ $errors->first('address1')}}</div>
														</div>
														<div class="col-sm-3">
															<label class="clear-top-margin"><i class="fa fa-home"></i>ADDRESS 2</label>
															<input required type="text" name="address2" placeholder="ADDRESS 2" />
															<div style="color:red">{{ $errors->first('address2')}}</div>
														</div>
														<div class="col-sm-3">
															<label class="clear-top-margin"><i class="fa fa-flag"></i>COUNTRY</label>
															<select required name="country">
																<option  value="">-- Select --</option>
																<option  value="Canada">Canada</option>
																	<option value="India">India</option>
																		<option  value="Japan">Japan</option>
																		</select>
																		<div style="color:red">{{ $errors->first('country')}}</div>
																	</div>
																	<div class="col-sm-3">
																		<label class="clear-top-margin"><i class="fa fa-id-card"></i>STATE</label>
																		<select required name="state">
																			<option value="">-- Select --</option>
																			<option  value="British Columbia">British Columbia</option>
																				<option  value="Ontario">Ontario</option>
																				</select>
																				<div style="color:red">{{ $errors->first('state')}}</div>
																			</div>
																			<div class="clearfix"></div>
																			<div class="col-sm-3">
																				<label><i class="fa fa-code"></i>ZIP</label>
																				<input required type="text" name="zip" placeholder="ZIP" />
																				<div style="color:red">{{ $errors->first('zip')}}</div>
																			</div>
																			<div class="col-sm-3">
																				<label><i class="fa fa-phone"></i>PHONE #</label>
																				<input required type="text" name="phone" placeholder="PHONE" />
																				<div style="color:red">{{ $errors->first('phone')}}</div>
																			</div>
																			<div class="col-sm-3">
																				<label><i class="fa fa-phone"></i>ALTERNATE PHONE #</label>
																				<input required type="text" name="alternatePhone" placeholder="ALTERNATE PHONE" />
																				<div style="color:red">{{ $errors->first('alternatePhone')}}</div>
																			</div>
																			<div class="col-sm-3">
																				<label><i class="fa fa-envelope-o"></i>EMAIL</label>
																				<input required type="text" name="email" placeholder="EMAIL" />
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
																				<input required type="text" name="highestDegree" placeholder="HIGHEST DEGREE" />
																				<div style="color:red">{{ $errors->first('degree')}}</div>
																			</div>
																			<div class="col-sm-2">
																				<label class="clear-top-margin"><i class="fa fa-building"></i>UNIVERSITY/COLLEGE</label>
																				<select required name="highestUniversity">
																					<option value="">-- Select --</option>
																					<option  value="IIT">IIT</option>
																					<option  value="Harvard">Harvard</option>
																				</select>
																				<div style="color:red">{{ $errors->first('university')}}</div>
																			</div>
																			<div class="col-sm-2">
																				<label class="clear-top-margin" ><i class="fa fa-calaendar"></i>YEAR PASSED</label>
																				<select required name="highestYearPassed">
																					<option value="">-- Select --</option>
																					<option   value="2005">2005</option>
																					<option  value="2006">2006</option>
																				</select>
																				<div style="color:red">{{ $errors->first('yearPassed')}}</div>
																			</div>
																			<div class="col-sm-2">
																				<label class="clear-top-margin"><i class="fa fa-puzzle-piece"></i>CGPA</label>
																				<input  required type="text" name="highestCGPA" placeholder="" />
																				<div style="color:red">{{ $errors->first('highestDegree')}}</div>
																			</div>
																			<div class="col-sm-2">
																				<button id="addQualification" type="button"><i class="fa fa-paper-plane"></i> Add More</button>
																			</div>
																			<div class="clearfix"></div>

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


