@extends('layouts.master')
@section('scholarship-all-active', 'is-active')

@section('mainContent')

{{-- Other Category Stories 2--}}
<section class="section has-background-antiquewhite">
	<div class="container">

		{{-- Search Bar --}}
		<div class="columns">
			<div class="column">
				<div class="field has-addons" style="display: flex; justify-content:  center; margin: 60px 0">
					<div class="control" style="width: 30%">
						<input class="input" type="text" placeholder="Find a company or service">
					</div>
					<div class="control" style="width: 10%">
						<input class="input" type="text" placeholder="location">
					</div>
					<div class="control">
						<a class="button is-info">
							Search
						</a>
					</div>
				</div>

			</div>
		</div>

		{{-- Data Categories --}}
		<div class="columns has-text-weight-bold has-text-info" style="width: 80%; margin: 0 auto;">
			<div class="column">
				<div class="special-header-links">
					<p><a href="{{ url('listing') }}"><i class="fas fa-building"></i> UNDERGRADUATE</a></p>
				</div>
			</div>
			<div class="column">
				<div class="special-header-links">
					<p><a href="#"><i class="fas fa-building"></i> POST GRADUAATE</a></p>
				</div>
			</div>
			<div class="column">
				<div class="special-header-links">
					<p><a href="#"><i class="fas fa-building"></i> OTHERS</a></p>
				</div>
			</div>
		</div>

	</div>
</section>

{{-- Datahub Listings--}}
<section class="section has-background-fadedwhite">
	<div class="container">
		<div class="columns">
			<div class="item plain-headline-item">
				<div class="headline">
					<h4 class="is-size-3 fcheader">Undergraduate<h4>
				</div>
			</div>
		</div>
		<div class="columns">
			<div class="column">
				<div class="">
					<ul>
						<li class="database-item-links">
							<br>
							<p><span class="business-sub-category"></span> <a href="{{ url('scholarship-listing') }}">University of Ghana Master’s Grants for Foreign Students(Ghana) | 2018</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Geneva Academy of International Humanitarian Law and Human Rights Scholarships(Switzerland) | 2018</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">EPFL Excellence Fellowships(Ghana) | 2018</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Graduate Institute Geneva Scholarships(Geneva) | 2018 </a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Eiffel Excellence Scholarship Programme(France) | 2018</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">DAAD Scholarships with Relevance to Developing Countries (Germany) | 2018</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">British Chevening Scholarships (UK) | 2018</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Swiss Government Excellence Scholarships for Foreign Students (Switzerland) | 2018</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Danish Government Scholarships for Non-EU/EEA Students  (Denmark) | 2018</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Developing Solutions Scholarships at University of Nottingham (UK) | 2018</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Geneva Academy of International Humanitarian Law and Human Rights Scholarships(Switzerland) | 2018</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">EPFL Excellence Fellowships(Ghana) | 2018</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Graduate Institute Geneva Scholarships(Geneva) | 2018 </a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Eiffel Excellence Scholarship Programme(France) | 2018</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">DAAD Scholarships with Relevance to Developing Countries (Germany) | 2018</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">British Chevening Scholarships (UK) | 2018</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Swiss Government Excellence Scholarships for Foreign Students (Switzerland) | 2018</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Danish Government Scholarships for Non-EU/EEA Students  (Denmark) | 2018</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Developing Solutions Scholarships at University of Nottingham (UK) | 2018</a> </p>
						</li>

					</ul>
					<h6 class="is-size-6 is-uppercase"><a href="#">Go Back</a></h4>
					<hr>
				</div>

			</div>

		</div>
</section>


@endsection
