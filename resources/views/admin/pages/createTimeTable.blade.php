@extends('layouts.schoolapp')
@section('content')


	<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-clock-o"></i>TIME SLOTS</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-sm-12">
								@if(session()->has('success'))

						<div class="alert alert-success">
  							<strong>Success!</strong> {{ session()->get('success') }}.
						</div>

						@endif

						@if(session()->has('failed'))

						<div class="alert alert-danger">
  							<strong>Failed!</strong> {{ session()->get('failed') }}.
						</div>

						@endif
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-plus-circle"></i>ADD SLOT</h6>
									<div class="inner-item">
										<form method="post" action="{{ route('store.timetable') }}">
										<div class="dash-form">
											@csrf
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-calendar"></i>DAY</label>
												<select name="day" required>
													<option value="">-- Select --</option>
													<option value="monday">Monday</option>
													<option value="tuesday" >Tuesday</option>
													<option value="wednesday" >Wednesday</option>
													<option value="thursday" >Thursday</option>
													<option value="friday" >Friday</option>
													<option value="saturday" >Saturday</option>
												</select>
											</div>
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-clock-o"></i>SLOT</label>
												<select name="timeSlot">
													<option value="">-- Select --</option>

													
													@foreach($time_slot as $time_slots)
													<option value="{{ $time_slots->preference }}" >{{ $time_slots->time }}</option>
													@endforeach
													<!-- <option value="08:00 -8:40 AM" >08:00 - 08:40 AM</option>
													<option value="08:40 - 09:20 AM" >08:40 - 09:20 AM</option>
													<option value="09:20 - 10:00 AM" >09:20 - 10:00 AM</option>
													<option value="10:00 -10:40 AM" >10:00 - 10:40 AM</option>
													<option value="11:10 -11:50 AM" >11:10 - 01:50 AM</option>
													<option value="11:50 - 12:30 PM" >11:50 -  12:30 PM</option>
													<option value="12:30 - 1:10 PM" >12:30 - 01:10 PM</option>
													<option value="1:10 -1:50 PM" >01:10 - 01:50 PM</option> -->
												</select>
											</div>
											<!-- <div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-book"></i>CLASS</label>
												<select>
													<option>-- Select --</option>
													<option>STD 5</option>
													<option>STD 6</option>
												</select>
											</div> -->
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-users"></i>SECTION</label>
												<select name="class"  required>
													<option required>-- Select --</option>
													@foreach($allClass as $allClassies)
													<option value="{{ $allClassies->id }}">Class {{ $allClassies->class }} - {{ $allClassies->class_section }} </option>
													@endforeach
													
												</select>
											</div>
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-code"></i>SUBJECT</label>
												<select name="subject" required class="selectSubject">
													<option value="">-- Select --</option>
													@foreach($subject as $subjects)
													<option value="{{ $subjects->subject_id }} ">{{ ucfirst($subjects->getSubject->subject) }}</option>
													@endforeach
													
												</select>
											</div>
											<div class="col-sm-3">
												<label><i class="fa fa-user"></i>TEACHER</label>
												<select name="teacher" required class="dynamicTeacher">


													<option value="">-- Select --</option>
													
												
													
													
												</select>
											</div>
											<!-- <div class="col-sm-3">
												<label><i class="fa fa-home"></i>CLASS ROOM</label>
												<select>
													<option>-- Select --</option>
													<option>101</option>
													<option>103</option>
												</select>
											</div> -->
											<div class="col-sm-12">
												<button type="submit"><i class="fa fa-paper-plane"></i> SAVE</button>
											</div>
										</div>
									</form>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-sliders"></i>ALL SLOTS</h6>
									<div class="inner-item">
										<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th><i class="fa fa-calendar"></i>DAY</th>
													<th><i class="fa fa-clock-o"></i>SLOT</th>
													<th><i class="fa fa-book"></i>CLASS</th>
													<th><i class="fa fa-cogs"></i>SECTION</th>
													<th><i class="fa fa-code"></i>SUBJECT</th>
													<th><i class="fa fa-user"></i>TEACHER</th>
													<th><i class="fa fa-home"></i>ROOM</th>
													<th><i class="fa fa-sliders"></i>ACTION</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Monday</td>
													<td>09-10 AM</td>
													<td>5 STD</td>
													<td>A</td>
													<td>MTH101</td>
													<td>John Doe</td>
													<td>101</td>
													<td class="action-link">
														<a class="edit" href="#" title="Edit" data-toggle="modal" data-target="#editDetailModal"><i class="fa fa-edit"></i></a>
														<a class="delete" href="#" title="Delete" data-toggle="modal" data-target="#deleteDetailModal"><i class="fa fa-remove"></i></a>
													</td>
												</tr>
												
											</tbody>
										</table>
									</div>
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
				
				<!-- Delete Modal -->
				<div id="deleteDetailModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"><i class="fa fa-trash"></i>DELETE SECTION</h4>
							</div>
							<div class="modal-body">
								<div class="table-action-box">
									<a href="#" class="save"><i class="fa fa-check"></i>YES</a>
									<a href="#" class="cancel" data-dismiss="modal"><i class="fa fa-ban"></i>CLOSE</a>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				
				<!--Edit details modal-->
				<div id="editDetailModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"><i class="fa fa-edit"></i>EDIT SECTION DETAILS</h4>
							</div>
							<div class="modal-body dash-form">
								<div class="col-sm-4">
									<label class="clear-top-margin"><i class="fa fa-book"></i>SECTION</label>
									<input type="text" placeholder="SECTION" value="A" />
								</div>
								<div class="col-sm-4">
									<label class="clear-top-margin"><i class="fa fa-code"></i>SECTION CODE</label>
									<input type="text" placeholder="SECTION CODE" value="PTH05A" />
								</div>
								<div class="col-sm-4">
									<label class="clear-top-margin"><i class="fa fa-user-secret"></i>SECTION CLASS</label>
									<select>
										<option>-- Select --</option>
										<option>5 STD</option>
										<option>6 STD</option>
									</select>
								</div>
								<div class="clearfix"></div>
								<div class="col-sm-12">
									<label><i class="fa fa-info-circle"></i>DESCRIPTION</label>
									<textarea placeholder="Enter Description Here"></textarea>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="modal-footer">
								<div class="table-action-box">
									<a href="#" class="save"><i class="fa fa-check"></i>SAVE</a>
									<a href="#" class="cancel" data-dismiss="modal"><i class="fa fa-ban"></i>CLOSE</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>



@endsection