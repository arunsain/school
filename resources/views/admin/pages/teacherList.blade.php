@extends('layouts.schoolapp')
@section('content')


			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-user-secret"></i>ALL TEACHER</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-lg-12">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-user"></i>TEACHERS</h6>
									<div class="inner-item">
										<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th><i class="fa fa-user"></i>NAME</th>
													<th><i class="fa fa-graduation-cap"></i>HIGHEST DEGREE</th>
													<th><i class="fa fa-building"></i>UNIVERSITY</th>
													<th><i class="fa fa-calendar"></i>YEAR PASSED</th>
													<th><i class="fa fa-puzzle-piece"></i>CGPA</th>
													<th><i class="fa fa-phone"></i>CONTACT #</th>
													<th><i class="fa fa-envelope-o"></i>EMAIL</th>
													<th><i class="fa fa-tasks"></i>ACTION</th>
												</tr>
											</thead>
											<tbody>
												@foreach($allTeacher as $allTeachers)
												@php $dataTeacher = json_decode($allTeachers->getuser->content)   @endphp
												<tr>
													<td>{{ $allTeachers->name }}</td>
													<td>{{ $dataTeacher->highestDegree }}</td>
													<td>{{ $dataTeacher->highestUniversity }}</td>
													<td>{{ $dataTeacher->highestYearPassed }}</td>
													<td>{{ $dataTeacher->highestCGPA }}</td>
													<td>1234567890</td>
													<td>{{ $allTeachers->email }}</td>
													<td class="action-link">
														<a class="edit" href="#" title="Edit" data-toggle="modal" data-target="#editDetailModal"><i class="fa fa-edit"></i></a>
														<a class="delete" href="#" title="Delete" data-toggle="modal" data-target="#deleteDetailModal"><i class="fa fa-remove"></i></a>
													</td>
												</tr>
												@endforeach
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
								<h4 class="modal-title"><i class="fa fa-trash"></i>DELETE TEACHER</h4>
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
								<h4 class="modal-title"><i class="fa fa-edit"></i>EDIT TEACHER DETAILS</h4>
							</div>
							<div class="modal-body dash-form">
								<div class="col-sm-3">
									<label class="clear-top-margin"><i class="fa fa-user"></i>FIRST NAME</label>
									<input type="text" placeholder="First Name" value="John" />
								</div>
								<div class="col-sm-3">
									<label class="clear-top-margin"><i class="fa fa-user"></i>MIDDLE NAME</label>
									<input type="text" placeholder="Middle Name" value="Fidler" />
								</div>
								<div class="col-sm-3">
									<label class="clear-top-margin"><i class="fa fa-user"></i>LAST NAME</label>
									<input type="text" placeholder="Last Name" value="Doe" />
								</div>
								<div class="col-sm-3">
									<label class="clear-top-margin"><i class="fa fa-book"></i>CLASS</label>
									<input type="text" placeholder="Standard" value="5 STD" />
								</div>
								<div class="clearfix"></div>
								<div class="col-sm-3">
									<label><i class="fa fa-cogs"></i>SECTION</label>
									<input type="text" placeholder="Section" value="PTH05A" />
								</div>
								<div class="col-sm-3">
									<label><i class="fa fa-puzzle-piece"></i>ROLL #</label>
									<input type="text" placeholder="Roll Number" value="Fidler" />
								</div>
								<div class="col-sm-3">
									<label><i class="fa fa-phone"></i>CONTACT #</label>
									<input type="text" placeholder="Contact Number" value="1234567890" />
								</div>
								<div class="col-sm-3">
									<label><i class="fa fa-envelope-o"></i>EMAIL</label>
									<input type="text" placeholder="Email" value="john@gmail.com" />
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


