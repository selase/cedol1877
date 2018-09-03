<!DOCTYPE html>
<html>
<head>
	<title>@yield('page-title')</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">

	<meta name="keywords" content="@yield('page-keywords')">
	<meta name="description" content="@yield('page-description')">

	<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/gidole-regular" type="text/css"/>
	<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<link rel="stylesheet" href="https://build.origami.ft.com/v2/bundles/css?modules=o-typography@^5.6.5,o-header@^7.5.6,o-buttons" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<script src="https://build.origami.ft.com/v2/bundles/js?modules=o-typography@^5.6.5,o-header@^7.5.6"></script>


	<style rel="stylesheet">
		.section {
			/* padding: 1rem 1.5rem; */
			padding-top: 1em;
			padding-bottom: 1em;
		}
		.button,
		.input,
		.textarea,
		.radio,
		.select select {
		    -webkit-box-shadow: none;
		    box-shadow: none;
		    border-radius: 0px;
			font-size: 0.8em;
		}

	</style>


	{{-- Dynamic Styles will go here --}}
	@stack('styles')

</head>
<body>
	{{-- <button class="o-buttons o-buttons--secondary">Here's a button</button>
	<h1 class="o-typography-headline">A &#x2018;Rosetta stone&#x2019; that may unlock the mystery of life on Earth</h1>
	<h1 class="o-typography-headline">Headline &#x2014; Don&#x2019;t settle for black and white</h1>

	<p class="o-typography-standfirst">Belgian-Brazilian brewer ups the stakes in beer takeover battle</p> --}}


{{-- Top Bar --}}
<section class="section top-bar-style">
	<div class="columns">
		<div class="column">FTSE 100 +0.64%</div>
		<div class="column">FTSE 100 +0.64%	Euro/Dollar -0.05%</div>
		<div class="column">Pound/Dollar -0.32%</div>
		<div class="column">Brent Crude Oil +0.06%</div>
		<div class="column">Visit Library</div>

	</div>

</section>

<!-- Centered Logo + Navigation -->
<section class="section" style="border-bottom: 1px solid #f1f1f1;">
    <div class="container">
        <div class="columns">
        	<div class="column"></div>
        	<div class="column has-text-centered">
				<h1 class="title is-size-2">Cedi Dollar</h1>
			</div>
        	<div class="column"></div>
        </div>
    </div>
</section>

<!-- Menu + Navigation -->
<section class="section" style="padding-bottom: 6px; padding-top: 1px;">
	<div class="container">
		<nav class="navbar is-transparent" style="">
			<div class="navbar-brand">
				<a class="navbar-item" href="{{ url('/') }}">
					<img src="{{ asset('img/logo.png')}}" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
				</a>
				<div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
					{{-- <span>Home</span>
					<span>About</span>
					<span>Categories</span> --}}
				</div>
			</div>

			<div id="navbarExampleTransparentExample" class="navbar-menu">
				<div class="navbar-start">
					<a class="navbar-item @yield('home-active')" href="{{ url('/') }}">
						HOME
					</a>
					<div class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link is-uppercase @yield('news-active')" href="{{ url('news') }}">
							News Central
						</a>
						<div class="navbar-dropdown is-boxed">
							<a class="navbar-item @yield('finance-active')" href="#">
								Politics
							</a>
							<a class="navbar-item @yield('education-active')" href="#">
								Education
							</a>
							<a class="navbar-item @yield('health-active')" href="#">
								Health
							</a>
							<a class="navbar-item @yield('sports-active')" href="#">
								Sports
							</a>
							<a class="navbar-item  @yield('entertainment-active')" href="#">
								Entertainment & Trends
							</a>
							<hr class="navbar-divider">
							<a class="navbar-item @yield('housing-active')" href="#">
								Housing
							</a>
							<a class="navbar-item  @yield('media-active')" href="#">
								Media
							</a>
						</div>
					</div>
					<div class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link is-uppercase @yield('ghana-active')" href="{{ url('news') }}">
							Business & Finance
						</a>
						<div class="navbar-dropdown is-boxed">
							<a class="navbar-item @yield('finance-active')" href="#">
								Companies
							</a>
							<a class="navbar-item @yield('education-active')" href="#">
								Markets Data
							</a>
							<a class="navbar-item @yield('health-active')" href="#">
								Capital Markets
							</a>
							<a class="navbar-item @yield('sports-active')" href="#">
								Trading
							</a>
							<a class="navbar-item  @yield('entertainment-active')" href="#">
								Fund Management
							</a>
							<hr class="navbar-divider">
							<a class="navbar-item @yield('housing-active')" href="#">
								Equities
							</a>
							<a class="navbar-item  @yield('media-active')" href="#">
								Invest
							</a>
						</div>
					</div>
					<a class="navbar-item is-uppercase @yield('opinion-active')" href="{{ url('opinion') }}">
						Opinion
					</a>
					<a class="navbar-item is-uppercase @yield('ghana-active')" href="{{ url('news') }}">
						Trends
					</a>
					<a class="navbar-item is-uppercase @yield('datahub-active')" href="{{ url('datahub') }}">
						Data Hub
					</a>
					<a class="navbar-item is-uppercase @yield('directory-active')" href="{{ url('directory') }}">
						Directory
					</a>
				</div>

				<div class="navbar-end">
					<div class="navbar-item">
						<div class="field is-grouped">
							<p class="control">
								<i class="fas fa-search"></i>
							</p>
							<p class="control">
								<a class="bd-tw-button button is-small" href="{{ url('backend/home') }}">
									<span class="icon">
										<i class="fab fa-twitter"></i>
									</span>
									<span>
										SignIn
									</span>
								</a>
							</p>
							<p class="control">
								<a class="button is-primary is-small" href="https://github.com/jgthms/bulma/releases/download/0.7.1/bulma-0.7.1.zip">
									<span class="icon">
										<i class="fas fa-download"></i>
									</span>
									<span>Download</span>
								</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</div>
</section>


<!-- MAIN CONTENT -->
@section('mainContent')
@show
<!-- END MAIN CONTENT -->

@include('partials/footer')



<script src="js/app.js"></script>


{{-- Dynamic Scripts go here --}}
@stack('scripts')

</body>
</html>
