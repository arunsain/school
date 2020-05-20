 <!-- Footer Section -->
        <div class="row footer-row" style="background-image: url({{ asset('storage/'.$contentdata->thirdImage) }});">
        	<div class="container">
        		<div class="school-logo">
        			<i class="fa fa-graduation-cap"></i>
        			<h3>PATHSHALA</h3>
        			<h6>BETTER WAY TO LEARN & GROW</h6>
        		</div>
        		<div class="col-md-4 col-sm-6 footer-item">
        			<h5>CONTACT US</h5>
        			<p><i class="fa fa-map-marker"></i>{{ $contentdata->address }}</p>
        			<p><i class="fa fa-mobile"></i>{{ $contentdata->mobile }}</p>
        			<p><i class="fa fa-envelope"></i>{{ $contentdata->email }}</p>
        		</div>
        		<div class="col-md-2 col-sm-6 footer-item">
        			<h5>QUICK LINKS</h5>
        			<div class="quick-link-box">
        				<a href="#"><i class="fa fa-graduation-cap"></i>Academics</a>
        				<a href="{{ route('admission') }}"><i class="fa fa-users"></i>Admission</a>
        				<a href="{{ route('events', ['cat_id'=>'all']) }}"><i class="fa fa-calendar"></i>Events</a>
        				<a href="#"><i class="fa fa-thumbs-up"></i>Campus Life</a>
        			</div>
        		</div>
        		<div class="clearfix visible-sm"></div>
        		<div class="col-md-3 col-sm-6 footer-item">
        			<h5>SCHOOL TIMINGS</h5>
        			<p><i class="fa fa-clock-o"></i>{{ $contentdata->time1 }}</p>
        			<p><i class="fa fa-clock-o"></i>{{ $contentdata->time2 }}</p>
        		</div>
        		<div class="col-md-3 col-sm-6 footer-item">
        			<h5>SUBSCRIBE</h5>
        			<div class="footer-subscribe">
        				<i class="fa fa-envelope"></i></a><input type="text" placeholder="example@pathshala.com" />
        			</div>
        			<a href="#" class="subscribe-link"><i class="fa fa-paper-plane"></i>SUBMIT</a>
        		</div>
        	</div>
        	<div class="footer-social-row">
        		<a href="{{ $contentdata->fbLink }}"><i class="fa fa-facebook"></i></a>
        		<a href="{ $contentdata->twitLink }}"><i class="fa fa-twitter"></i></a>
        		<a href="{{ $contentdata->gPlusLink }}"><i class="fa fa-google-plus"></i></a>
        		<a href="{{ $contentdata->lkdLink }}"><i class="fa fa-linkedin"></i></a>
        	</div>
        </div>
        
        <!-- Login Modal -->
        <!-- Modal -->
        <div class="modal fade" id="loginModal" role="dialog">
        	<div class="modal-dialog modal-sm">
        		<div class="modal-content login-modal">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
        				<h4 class="modal-title"><i class="fa fa-sign-in"></i>LOGIN</h4>
        			</div>
        			<div class="modal-body">
        				<div>
        					<label><i class="fa fa-user"></i>USERNAME/EMAIL</label>
        					<input class="form-control" type="text" placeholder="Username/Email">
        				</div>
        				<div>
        					<label><i class="fa fa-key"></i>PASSWORD</label>
        					<input class="form-control" type="password" placeholder="Password">
        				</div>
        				<a href="#" class="forgot-link">FORGOT PASSWORD?</a>
        				<a href="#" class="login-link"><i class="fa fa-sign-in"></i>LOGIN</a>
        			</div>
        		</div>
        	</div>
        </div>
        
        <!-- Scripts -->
        <script src="{{ asset('frontcss/assets/js/jQuery_v3_2_0.min.js') }}"></script>
        <script src="{{ asset('frontcss/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontcss/assets/plugins/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontcss/assets/js/js.js') }}"></script>
            <script src="{{ asset('frontcss/assets/js/jquery-ui.min.js') }}"></script>
            <script src="{{ asset('frontcss/assets/plugins/jquery.magnific-popup.min.js') }}"></script>
            <script>
            jQuery(document).ready(function($) {
                "use strict";
                $('.image-set').magnificPopup({
                      delegate: 'a',
                      type: 'image',
                      gallery: {enabled:true}
                });
            });
        </script>
        
    </body>
    </html>