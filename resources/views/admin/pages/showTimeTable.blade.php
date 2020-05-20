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
											<select id="class_id">
												<option>5th STD</option>
												<option>6th STD</option>
												<option>7th STD</option>
											</select>
										</div>
										<!-- <div class="col-sm-4">
											<label>SECTION</label>
											<select>
												<option>PTH05A</option>
												<option>PTH05B</option>
												<option>PTH06A</option>
												<option>PTH06B</option>
											</select>
										</div> -->
										<div class="col-sm-4">
											<!-- <button type="button"  
											id="newTimeTable" class="submit-btn"><i class="fa fa-search"></i>SELECT</button> -->
											<button type="button" id="newTimeTable" class="submit-btn"><i class="fa fa-search"></i>SELECT</button>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div id="dynamicTimeTable">
							<div class="col-lg-12">
								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-edit"></i>EDIT TIMETABLE</h6>
									<div class="inner-item">
										<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th><i class="fa fa-clock-o"></i>TIMINGS</th>
													<th><i class="fa fa-calendar"></i>MONDAY</th>
													<th><i class="fa fa-calendar"></i>TUESDAY</th>
													<th><i class="fa fa-calendar"></i>WEDNESDAY</th>
													<th><i class="fa fa-calendar"></i>THURSDAY</th>
													<th><i class="fa fa-calendar"></i>FRIDAY</th>
													<th><i class="fa fa-calendar"></i>SATURDAY</th>
													<th><i class="fa fa-tasks"></i>ACTION</th>
												</tr>
											</thead>
											<tbody>
												<tr>
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
												</tr>
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
				</div>
				<div class="menu-togggle-btn">
					<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
				</div>
				<div class="dash-footer col-lg-12">
					<p>Copyright Pathshala</p>
				</div>
			</div>


@endsection