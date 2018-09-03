@extends('layouts.master')
@section('scholarship-listing-active', 'is-active')

@section('mainContent')

{{-- Other Category Stories 2--}}
<section class="section has-background-antiquewhite">
	<div class="container">

		{{-- Search Bar --}}
		<div class="columns">
			<div class="column">
				<div class="field has-addons" style="display: flex; justify-content:  center; margin: 60px 0">
					<div class="control" style="width: 30%">
						<input class="input" type="text" placeholder="Find a scholarship">
					</div>
					<div class="control" style="width: 10%">
						<input class="input" type="text" placeholder="Country">
					</div>
					<div class="control">
						<a class="button is-info">
							Search
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

{{-- Datahub Listings--}}
<section class="section has-background-fadedwhite">
	<div class="container">
        <div class="columns">
            <div class="column is-2">
                <h5 class="is-size-5">{{-- Widget Area --}}</h5>

            </div>

            <div class="column is-6">
                <div class="">
                    <ul>
                        <li class="item plain-headline-item">
                            <div class="">
                                <div class="headline">
                                    <h4 class="is-size-3 fcheader">University of Ghana Master’s Grants for Foreign Students(Ghana) | 2018<h4>
                                </div>
                            </div>
                        </li>
                        <li class="item plain-headline-item">
                            <div class="">
                                <div class="headline">
                                    <h4 class="is-size-5 fcheader">Details</h4>
                                </div>
                                <div class="">
                                    <p>
										-</i>  <strong>Country:</strong> Ghana <br />
										-</i>  <strong>Category:</strong> Undergraduate <br />
										-</i>  <strong>Area of study:</strong> Science <br />
										-</i>  <strong>Awarding Institution:</strong> University of Ghana <br />
										-</i>  <strong>Phone Number:</strong> +233208345654.  <br />
                                        -</i>  <strong>Website:</strong> <a href="#"> http://www.gov.gh </a> <br />
                                        -</i> <strong>Email:</strong> <a href="#">scholarship@gov.gh</a> <br />
										<hr>
                                        -</i> <strong>Conditions</strong>
										<p>
											Established in the will of Cecil Rhodes in 1902, the Rhodes is the oldest and perhaps the most prestigious international scholarship program in the world.   The Rhodes Scholarships are postgraduate awards that supports exceptional international students from selected countries at the University of Oxford.   A Rhodes Scholarship covers all university fees, personal stipend, health insurance, and airfare to and from the student’s home country.
										</p>

                                    </p>
                                </div>
                            </div>
                        </li>

                </div>
            </div>

            <div class="column is-2">

            </div>

        </div>
	</div>
</section>


@endsection
