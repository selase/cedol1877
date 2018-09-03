@extends('layouts.master')
@section('datahub-active', 'is-active')

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
					<p><a href="#">Laws</a></p>
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
			<div class="column">
				<div class="">
					<ul>
						<li class="item plain-headline-item">
							<div class="">
								<div class="headline">
									<h4 class="is-size-3 fcheader">Laws<h4>
									<h4 class="is-size-5 fcheader">Laws of the Republic of Ghana</h4>
								</div>
							</div>
						</li>
						<li class="database-item-links">
							<br>
							<p><span class="red-dash"></span> <a href="{{ url('datahub-laws-content') }}">National Biodiversity Strategy and Action Plan.Date of text: 01 November 2016</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="red-dash"></span> <a href="#">National Climate-Smart Agriculture and Food Security Action Plan of Ghana (2016-2020).Date of text: 2016</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="red-dash"></span> <a href="#">Ghana Livestock Development Policy and Strategy,Date of text: 2016</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="red-dash"></span> <a href="#">Medium Term Agricultural Sector Investment Plan II, 2014 – 2017.Date of text: 01 December 2015</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="red-dash"></span> <a href="#">National Youth Policy Implementation Plan 2014 – 2017.Date of text: 15 January 2015</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="red-dash"></span> <a href="#">National Gender Policy.Date of text: 01 May 2015</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="red-dash"></span> <a href="#">National Seed PlanDate of text: 01 April 2015</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="red-dash"></span> <a href="#">Fisheries Management Plan of Ghana. A National Policy for the Management of the Marine Fisheries Sector 2015-2019.Date of text: 2015</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="red-dash"></span> <a href="#">Ministry of Water Resources, Works and Housing Sector Strategic Medium Term Development Plan 2014-2017.Date of text: 01 September 2014</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="red-dash"></span> <a href="#">National Plan of Action to Prevent, Deter and Eliminate Illegal, Unreported and Unregulated Fishing.Date of text: 01 May 2014</a> </p>
						</li>

					</ul>
					<span class="is-size-7 is-uppercase has-color-pinegreen"><a href="{{ URL::previous() }}"><i class="fas fa-arrow-left"></i> Go Back</a></span>
					<hr>
				</div>

			</div>

		</div>
	</div>
</section>


@endsection
