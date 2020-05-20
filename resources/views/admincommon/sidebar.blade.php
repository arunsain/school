

<div class="sidebar-nav-wrapper" id="sidebar-wrapper">
				<ul class="sidebar-nav">
					<li>
						<a href="admin-dashboard.html"><i class="fa fa-home menu-icon"></i> HOME</a>
					</li>

						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-users menu-icon"></i>PAGES<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>							
								<a href="{{ route('MainPage.create') }}"><i class="fa fa-caret-right"></i>MAIN</a>
							</li>
							<li>
								<a href="{{ route('banner.index') }}"><i class="fa fa-caret-right"></i>BANNER</a>
							</li>
														<li>
								<a href="{{ route('add-admission.create') }}"><i class="fa fa-caret-right"></i>ADMISSION</a>
							</li>
							<li>
								<a href="{{ route('gallery.create') }}"><i class="fa fa-caret-right"></i>CAMPUS GALLERY</a>
							</li>
							<li>
								<a href="{{ route('gallery.content') }}"><i class="fa fa-caret-right"></i> GALLERY CONTENT</a>
							</li>
							<li>
								<a href="{{ route('eventscontent.show') }}"><i class="fa fa-caret-right"></i> EVENT CONTENT</a>
							</li>
							<li>
								<a href="{{ route('about.create') }}"><i class="fa fa-caret-right"></i> ABOUT CONTENT</a>
							</li>
							<li>
								<a href="{{ route('contact.create') }}"><i class="fa fa-caret-right"></i> CONTACT CONTENT</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</li>


						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-file-o menu-icon"></i> EVENTS <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>							
								<a href="{{ route('eventscat.create') }}"><i class="fa fa-caret-right"></i>ADD EVENTS CATEGORY</a>
							</li>
							<li>
								<a href="{{ route('eventscontent.create') }}"><i class="fa fa-caret-right"></i>ADD Events Content</a>
							</li>
							<li>
								<a href="admin-add-class.html"><i class="fa fa-caret-right"></i>VIEW SECTIONS</a>
							</li>
							<li>
								<a href="admin-add-section.html"><i class="fa fa-caret-right"></i>VIEW CLASSES</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</li>


					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-users menu-icon"></i> STUDENTS <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>							
								<a href="admin-add-student.html"><i class="fa fa-caret-right"></i>ADD</a>
							</li>
							<li>
								<a href="admin-student-list.html"><i class="fa fa-caret-right"></i>ALL STUDENT  </a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-user-secret menu-icon"></i> TEACHERS <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>							
								<a href="{{ route('teacher.create') }}"><i class="fa fa-caret-right"></i>ADD</a>
							</li>
							<li>
								<a href="{{ route('teacher.index') }}"><i class="fa fa-caret-right"></i>ALL TEACHER</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</li>
					<li>
						<a href="message.html"><i class="fa fa-envelope menu-icon"></i> MY MESSAGES</a>
					</li>
					<li>
						<a href="admin-add-announcement.html"><i class="fa fa-bullhorn menu-icon"></i> ANNOUNCEMENTS</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-file-o menu-icon"></i> CLASSES <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>							
								<a href="{{ route('class.create') }}"><i class="fa fa-caret-right"></i>ADD CLASS</a>
							</li>

							<li>							
								<a href="{{ route('assign.subject') }}"><i class="fa fa-caret-right"></i>ASSIGN SUBJECT TEACHER</a>
							</li>

							
							<li>
								<a href="admin-add-section.html"><i class="fa fa-caret-right"></i>ADD SECTION</a>
							</li>
							<li>
								<a href="admin-add-class.html"><i class="fa fa-caret-right"></i>VIEW SECTIONS</a>
							</li>
							<li>
								<a href="admin-add-section.html"><i class="fa fa-caret-right"></i>VIEW CLASSES</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-book menu-icon"></i> SUBJECTS <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>							
								<a href="{{ route('subject.create') }}"><i class="fa fa-caret-right"></i>ADD</a>
							</li>
							<li>
								<a href="admin-add-subject.html"><i class="fa fa-caret-right"></i>VIEW SUBJECTS</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-calendar menu-icon"></i> TIMETABLE <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>							
								<a href="{{ route('create.timetable') }}"><i class="fa fa-caret-right"></i>CREATE</a>
							</li>
							<li>
								<a href="{{ route('index.timetable') }}"><i class="fa fa-caret-right"></i>VIEW</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-address-card menu-icon"></i> REPORTS <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>							
								<a href="teacher-attendence-report.html"><i class="fa fa-caret-right"></i>ATTENDENCE</a>
							</li>
							<li>
								<a href="teacher-marks-report.html"><i class="fa fa-caret-right"></i>MARKS</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</li>
				</ul>
			</div>

