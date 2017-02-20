<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	@include('front.company.layout.head')
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								@include('front.company.layout.header')

							@yield('content')
				

						</div>
					</div>

					@include('front.company.layout.sidebar')

			</div>

		@include('front.company.layout.script')

	</body>
</html>