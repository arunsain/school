        	<!-- Header -->
        	 @include('admincommon.header')
		<div class="parent-wrapper" id="outer-wrapper">
			<!-- SIDE MENU -->
			 @include('admincommon.sidebar')
			
			<!-- MAIN CONTENT -->
			  @yield('content')
		</div>
	
		<!-- Scripts -->
         @include('admincommon.footer')
		
    </body>
</html>