@extends('layouts.schoolapp')
@section('content')


<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-users"></i>CLASS TIMETABLE</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-lg-12">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-search"></i>MAKE SELECTION</h6>
									
									<div class="inner-item dash-search-form">
										<div class="col-sm-4">
											<label>CLASS</label>
											<select id="classId" >
													<option value="">-- Select --</option>
													@foreach($allClass as $allClassies)
													<option value="{{ $allClassies->id }}">Class {{ $allClassies->class }} - {{ $allClassies->class_section }} </option>
													@endforeach
													
												</select>
										</div>
										<div class="col-sm-4">
											<label>Days</label>
											<select id="day" >
													<option value="">-- Select --</option>
													<option value="monday">Monday</option>
													<option value="tuesday" >Tuesday</option>
													<option value="wednesday" >Wednesday</option>
													<option value="thursday" >Thursday</option>
													<option value="friday" >Friday</option>
													<option value="saturday" >Saturday</option>
												</select>
										</div>
										<div class="col-sm-4">
											<button type="button" id="filter" class="submit-btn"><i class="fa fa-search"></i>SELECT</button>
										</div>

										<div class="clearfix"></div>
									</div>
								
								</div>
							</div>
							<div class="col-lg-12">
								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-edit"></i>EDIT TIMETABLE</h6>
									<div class="inner-item">
										<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th><i class="fa fa-clock-o"></i>day</th>
													<th><i class="fa fa-calendar"></i>time_slot</th>
													<th><i class="fa fa-calendar"></i>class_id</th>
													<th><i class="fa fa-calendar"></i>subject_id</th>
													<th><i class="fa fa-calendar"></i>teacher_id</th>
													<!-- <th><i class="fa fa-calendar"></i>FRIDAY</th>
													<th><i class="fa fa-calendar"></i>SATURDAY</th>
													<th><i class="fa fa-tasks"></i>ACTION</th> -->
												</tr>
											</thead>
											<tbody>
												<!-- <tr>
													<td>09-10 AM</td>
													<td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td>
													<td>
														<span>Lecture: PHY101</span>
														<span>Room: 303</span>
														<span>Teacher: Lennore</span>
													</td>
													<td>
														<span>Lecture: BIO101</span>
														<span>Room: 302</span>
														<span>Teacher: John</span>
													</td>
													<td>
														<span>Lecture: PHY101</span>
														<span>Room: 303</span>
														<span>Teacher: Lennore</span>
													</td>
													<td>
														<span>Lecture: BIO101</span>
														<span>Room: 202</span>
														<span>Teacher: John</span>
													</td>
													<td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td>
													<td class="action-link">
														<a class="edit" href="#" title="Edit" data-toggle="modal" data-target="#editDetailModal"><i class="fa fa-edit"></i></a>
														<a class="delete" href="#" title="Delete" data-toggle="modal" data-target="#deleteDetailModal"><i class="fa fa-remove"></i></a>
													</td>
												</tr> -->
											</tbody>
										</table>
										<div class="table-action-box">
											<a href="#" class="save"><i class="fa fa-check"></i>SAVE</a>
											<a href="#" class="cancel"><i class="fa fa-ban"></i>CANCEL</a>
										</div>
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
			</div>



@endsection