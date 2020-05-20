@extends('layouts.schoolapp')
@section('content')
<style type="text/css">
	
	.dash-form button {
    color: #fff;
    background: #27AE60;
    display: inline-block;
    font-size: 13px;
    font-weight: 700;
    margin-top: 25px;
    padding: 10px 30px;
    text-decoration: none;
    border: 1px solid transparent;
}
</style>
	<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-user-secret"></i>ADD Banner</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">

						
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-md-12">
								@if(session()->has('success'))

						<div class="alert alert-success">
  							<strong>Success!</strong> {{ session()->get('success') }}.
						</div>

						@endif
								<!-- <div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-user"></i>Banner </h6>
									<div class="inner-item">
										<div class="dash-form">
											<div class="col-sm-12">
												<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>TITLE</label>
												<input type="text" placeholder="JOHN" />
											</div>
											<div class="clearfix"></div>
											<br>
											<div class="col-sm-12">
												<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>SHORT DESCRIPTION</label>
												<input type="text" placeholder="FIDLER" />
											</div>
											<div class="clearfix"></div>
											<br>
											<div class="col-sm-12">
												<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>DESCRIPTION</label>
												<textarea name="editor1" rows="5"></textarea>
											</div>
											<div class="clearfix"></div>
											<div class="col-sm-3">
												<label><i class="fa fa-file-picture-o"></i>UPLOAD PHOTO</label>
												<input type="file" placeholder="90890" />
											</div>
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
												<input type="text" placeholder="H/N 42 Street# 10" />
											</div>
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-home"></i>ADDRESS 2</label>
												<input type="text" placeholder="H/N 42 Street# 10" />
											</div>
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-flag"></i>COUNTRY</label>
												<select>
													<option>-- Select --</option>
													<option>Canada</option>
													<option>India</option>
													<option>Japan</option>
												</select>
											</div>
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-id-card"></i>STATE</label>
												<select>
													<option>-- Select --</option>
													<option>British Columbia</option>
													<option>Ontario</option>
												</select>
											</div>
											<div class="clearfix"></div>
											<div class="col-sm-3">
												<label><i class="fa fa-code"></i>ZIP</label>
												<input type="text" placeholder="90890" />
											</div>
											<div class="col-sm-3">
												<label><i class="fa fa-phone"></i>PHONE #</label>
												<input type="text" placeholder="1234567890" />
											</div>
											<div class="col-sm-3">
												<label><i class="fa fa-phone"></i>ALTERNATE PHONE #</label>
												<input type="text" placeholder="1234567890" />
											</div>
											<div class="col-sm-3">
												<label><i class="fa fa-envelope-o"></i>EMAIL</label>
												<input type="text" placeholder="john@pathshala.com" />
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div> -->
								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-book"></i>Banner</h6>
									<div class="inner-item">
										<div class="dash-form">
											<form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">

												@csrf
								
											<div class="col-sm-12">
												<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>TITLE</label>
												<input type="text" name="title" placeholder="TITLE" value="{{ old('title')}}" />
											</div>
											<div style="color:red;">{{ $errors->first('title') }}</div>
											<div class="clearfix"></div>
											<br>
											<div class="col-sm-12">
												<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>SHORT DESCRIPTION</label>
												<input type="text" value="{{ old('shortDescription')}}" name="shortDescription" placeholder="SHORT DESCRIPTION" />
											</div>
											<div style="color:red;">{{ $errors->first('shortDescription')}}</div>
											<div class="clearfix"></div>
											<br>
											<div class="col-sm-12">
												<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>DESCRIPTION</label>
												<textarea name="editor1" rows="5">{{ old('editor1')}}</textarea>
											</div>
											<div style="color:red;">{{ $errors->first('editor1')}}</div>
											<div class="clearfix"></div>
											<div class="col-sm-3">
												<label><i class="fa fa-file-picture-o"></i>UPLOAD PHOTO</label>
												<input type="file" name="bannerImage"  />
												<span style="color:red;">
													<!-- Image width (between 1800-1950px )<br>
												 Image height (between 900-990px )<br> -->
												Image size (max 200kb )</span>
												<div style="color:red;">{{ $errors->first('bannerImage')}}</div>
											</div>
											

										
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


