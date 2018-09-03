@extends('layouts.master')
@section('listing-active', 'is-active')

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
	</div>
</section>

{{-- Datahub Listings--}}
<section class="section has-background-fadedwhite">
	<div class="container">
        <div class="columns">
            <div class="column is-2">
                <h5 class="is-size-5">Related Categories</h5>
            </div>

            <div class="column is-6">
                <div class="">
                    <ul>
                        <li class="item plain-headline-item">
                            <div class="">
                                <div class="headline">
                                    <h4 class="is-size-3 fcheader">Ministrys in Ghana<h4>
                                </div>
                            </div>
                        </li>
                        <li class="item plain-headline-item">
                            <div class="">
                                <div class="category-title">
                                    <small class="is-uppercase">MDA'S</small>
                                </div>
                                <div class="headline">
                                    <h4 class="is-size-5 fcheader">Ministry of Finance</h4>
                                </div>
                                <div class="">
                                    <p><i class="fa fa-phone"></i>  <strong>Phone Number:</strong> +233208345654. |
                                        <i class="fas fa-globe"></i>  <strong>Website:</strong> <a href="#"> http://www.gov.gh </a> |
                                        <i class="fas fa-location-arrow"></i> <strong>Location:</strong> 21 Magnum Street, Accra Central
                                        <span><a href="{{ url('listing-details') }}">More ...</a> </span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="item plain-headline-item">
                            <div class="">
                                <div class="category-title">
                                    <small class="is-uppercase">MDA'S</small>
                                </div>
                                <div class="headline">
                                    <h4 class="is-size-5 fcheader">Ministry of Health</h4>
                                </div>
                                <div class="">
                                    <p><i class="fa fa-phone"></i>  <strong>Phone Number:</strong> +233208345654. |
                                        <i class="fas fa-globe"></i>  <strong>Website:</strong> <a href="#"> http://www.gov.gh </a> |
                                        <i class="fas fa-location-arrow"></i> <strong>Location:</strong> 21 Magnum Street, Accra Central
                                        <span><a href="#">More ...</a> </span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="item plain-headline-item">
                            <div class="">
                                <div class="category-title">
                                    <small class="is-uppercase">MDA'S</small>
                                </div>
                                <div class="headline">
                                    <h4 class="is-size-5 fcheader">Ministry of Education</h4>
                                </div>
                                <div class="">
                                    <p><i class="fa fa-phone"></i>  <strong>Phone Number:</strong> +233208345654. |
                                        <i class="fas fa-globe"></i>  <strong>Website:</strong> <a href="#"> http://www.gov.gh </a> |
                                        <i class="fas fa-location-arrow"></i> <strong>Location:</strong> 21 Magnum Street, Accra Central
                                        <span><a href="#">More ...</a> </span>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="column is-2">

            </div>

        </div>
	</div>
</section>


@endsection
