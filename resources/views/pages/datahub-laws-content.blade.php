@extends('layouts.master')
@section('datahub-laws-content-active', 'is-active')

@section('mainContent')

{{-- News Reel Strip --}}
{{-- <section class="section" style="padding-top: 6px;padding-bottom: 11px;">
	<div class="container">
		<div class="columns has-background-black-white-text" style="line-height: 1em">
			<div class="column is-size-7" style="font-weight: 600;">FCA demands higher standards in robo advice for investors ~ 3H AGO <span class="red-dot"></span></div>
			<div class="column is-size-7 has-left-border-1">US stock futures climb on easing China trade tensions ~ 3H AGO <span class="red-dot"></span></div>
			<div class="column is-size-7 has-left-border-1">Facebook’s Mark Zuckerberg agrees to have EU hearing live-streamed ~ 4H AGO <span class="red-dot"></span></div>
			<div class="column is-size-7 has-left-border-1">BP latest to ink LNG supply deal with Venture Global ~ 5H AGO <span class="red-dot"></span></div>
		</div>
	</div>
</section> --}}

{{-- Other Category Stories 2--}}
<section class="section has-background-antiquewhite">
	<div class="container">

		{{-- Search Bar --}}
		<div class="columns">
			<div class="column">
				<div class="field has-addons" style="display: flex; justify-content:  center; margin: 60px 0">
					<div class="control" style="width: 40%">
						<input class="input" type="text" placeholder="Find a repository">
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
		<div class="columns has-text-weight-bold" style="width: 80%; margin: 0 auto">
			<div class="column">
				<div class="special-header-links">
					<p><a href="{{ url('datahub-laws') }}">Laws</a></p>
					<p><a href="#">ACTS</a></p>
					<p><a href="#">Legal Instruments (LI)</a></p>
					<p><a href="#">Constitutional Instruments (CI)</a></p>
				</div>
			</div>
			<div class="column">
				<div class="special-header-links">
					<p><a href="#">Policy Documents</a></p>
					<p><a href="#">Reports</a></p>
					<p><a href="#">Action Plans</a></p>
					<p><a href="#">Programmes</a></p>
				</div>
			</div>
			<div class="column">
				<div class="special-header-links">
					<p><a href="#">Projects</a></p>
					<p><a href="#">Books</a></p>
					<p><a href="#">Research</a></p>
					<p><a href="#">Published Works</a></p>
				</div>
			</div>
			<div class="column">
				<div class="special-header-links">
					<p><a href="#">Dissertations</a></p>
					<p><a href="#">Thesis</a></p>
					<p><a href="#">Agreements</a></p>
					<p><a href="#">Court Rulings</a></p>
				</div>
			</div>

		</div>

	</div>
</section>

{{-- Datahub Listings--}}
<section class="section has-background-fadedwhite">
	<div class="container">
		<div class="columns">
			<div class="column is-three-quarters">
				<div class="item plain-headline-item">
					<div class="">
						<div class="headline content-body-text">
							<h4 class="is-size-3 fcheader">National Biodiversity Strategy and Action Plan.<h4>
							<h4 class="is-size-5 fcheader"><a href="#"> <i class="fas fa-file-pdf"></i> <i class="fas fa-arrow-down"></i> Download File </a></h4>
							<hr>
							<h4 class="is-size-5 fcheader">Abstract</h4>
							<p>
								This Act establishes the Council for Scientific and Industrial Research as a body corporate, defines functions and powers of the Council and provides for its administration.The Council shall, among other things, pursue the implementation of government policies on scientific research and development; advise the Minister; promote research for the management, utilization and conservation of the natural resources; and encourage, in the national interest, scientific and industrial research of importance for development of agriculture, health, medicine, environment, etc.The Council shall be governed by a Board. There shall be an Agriculture, Forestry and Fisheries Research Coordinating Committee.
							</p>
							<p>
								<br>This Act establishes the Council for Scientific and Industrial Research as a body corporate, defines functions and powers of the Council and provides for its administration.The Council shall, among other things, pursue the implementation of government policies on scientific research and development; advise the Minister; promote research for the management, utilization and conservation of the natural resources; and encourage, in the national interest, scientific and industrial research of importance for development of agriculture, health, medicine, environment, etc.The Council shall be governed by a Board. There shall be an Agriculture, Forestry and Fisheries Research Coordinating Committee.
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="column">
				<div class="column has-left-border">

					<div class="">
						<ul>
							<li class="item plain-headline-item">
								<div class="">
									<h5 class="fcheader-for-sidebar">CDL Number</h5>
									<div class="headline" style="color: #017769">
										CDL000000001
									</div>
									{{-- <div class="date">
										<small class="subtitle is-uppercase" style="font-size: 0.7em">LAW</small>
									</div> --}}
								</div>
							</li>
							<li class="item plain-headline-item">
								<div class="">
									<h5 class="fcheader-for-sidebar">Associated Website</h5>
									<div class="headline" style="color: #017769">
										<a href="http://www.wearepurpledot.com">www.wearepurpledot.com</a>
									</div>
									{{-- <div class="date">
										<small class="subtitle is-uppercase" style="font-size: 0.7em">LAW</small>
									</div> --}}
								</div>
							</li>
							<li class="item plain-headline-item">
								<div class="">
									<h5 class="fcheader-for-sidebar">Published Date</h5>
									<div class="headline" style="color: #017769">
										20-08-2018
									</div>
									{{-- <div class="date">
										<small class="subtitle is-uppercase" style="font-size: 0.7em">LAW</small>
									</div> --}}
								</div>
							</li>
							<li class="item plain-headline-item">
								<div class="">
									<h5 class="fcheader-for-sidebar">Keywords</h5>
									<div class="headline" style="color: #017769">
										Agricultural development, Institution; research
									</div>
									{{-- <div class="date">
										<small class="subtitle is-uppercase" style="font-size: 0.7em">LAW</small>
									</div> --}}
								</div>
							</li>
							<li class="item plain-headline-item">
								<div class="">
									<h5 class="fcheader-for-sidebar">Comments</h5>
									<div class="headline" style="color: #017769">
										Reprinted version of Act No. 521. Date of reprint unknown.
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
		</div>
		</div>
	</div>
</section>


@endsection
