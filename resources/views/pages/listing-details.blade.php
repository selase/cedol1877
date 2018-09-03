@extends('layouts.master')
@section('listing-details-active', 'is-active')

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
                                    <h4 class="is-size-3 fcheader">Ministry of Finance<h4>
                                </div>
                            </div>
                        </li>
                        <li class="item plain-headline-item">
                            <div class="">
                                <div class="category-title">
                                    <small class="is-uppercase">CONTACT INFORMATION</small>
                                </div>
                                <div class="has-padding-top-10">
                                    <p><i class="fa fa-phone"></i>  <strong>Phone Numbers:</strong> +233208345654 | +233208345654</p>
									<p><i class="fas fa-globe"></i>  <strong>Website:</strong> <a href="#"> http://www.gov.gh </a> </p>
									<p><i class="fas fa-envelope"></i> <strong>Email:</strong> info@gov.gh</p>
                                </div>
                            </div>
                        </li>
						<li class="item plain-headline-item">
                            <div class="">
                                <div class="category-title">
                                    <small class="is-uppercase">Working Hours</small>
                                </div>
                                <div class="has-padding-top-10">
									<p>Monday: 8 hours</p>
									<p>Tuesday: 8hours</p>
									<p>Wednesday: 8 hours</p>
									<p>Thursday: 8Hours</p>
									<p>Friday: 8 Hours</p>
									<p>Saturday: 8 Huours</p>
									<p>Sunday: 8 hours</p>
                                </div>
                            </div>
                        </li>
						<li class="item plain-headline-item">
                            <div class="">
                                <div class="category-title">
                                    <small class="is-uppercase">Company Details</small>
                                </div>
                                <div class="has-padding-top-10">
                                    <p>
										3M&C Health Systems is a division of 3M&C Ghana Limited, a registered and privately-owned Ghanaian healthcare organization, established in 2009. It is a fully integrated healthcare system operating from three locations; two in East Legon, Accra and one in Tema. All our facilities and services are opened and operated a minimum 12 hours a day, 7days of the week. One facility is opened 24/7, 365 days of the year. All the facilities are operated by full-time doctors, nurses, ancillary service technicians, and other healthcare professionals.
									</p>
                                </div>
                            </div>
                        </li>
						<li class="item plain-headline-item">
                            <div class="">
                                <div class="category-title">
                                    <small class="is-uppercase">Location</small>
                                </div>
                                <div class="has-padding-top-10">
                                    <p>23 Amartey Street, Accra Ghana</p>
									<p class="has-padding-top-10">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.1255598583407!2d-0.19838618523410867!3d5.548396595977094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9091a570bce7%3A0xa2f2ef452ccc49c7!2sMinistry+Of+Finance+and+Economic+Planning!5e0!3m2!1sen!2sgh!4v1534292509617" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
									</p>
                                </div>
                            </div>
                        </li>
						<li class="item plain-headline-item">
                            <div class="">
                                <div class="category-title">
                                    <small class="is-uppercase">Product Images</small>
                                </div>
                                <div class="has-padding-top-10">
									<p>
										Images here
									</p>
                                </div>
                            </div>
                        </li>
						<li class="item plain-headline-item">
                            <div class="">
                                <div class="category-title">
                                    <small class="is-uppercase">Tags</small>
                                </div>
                                <div class="has-padding-top-10">
									<p class="has-padding-top-10">
										Tags: here
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
