@extends('layouts.master')
@section('aboutus', 'is-active')
@section('mainContent')

<section class="section has-background-aliceblue">
		<div class="container">
			<div class="columns centered-heading">
				<h3 class="is-size-3 fcheader">About us<h3>
			</div>
			<div class="columns">
				<div class="column">
					<div class="">
						<ul>
							<li class="item plain-headline-item">
	                            <div class="headline centered-heading general-heading-links static-outline">
	                                <a href="{{ url('team') }}"> <h4 class="is-size-3 fcheader">Working Group<h4></a>
	                            </div>
							</li>
							<li class="item plain-headline-item-last">
								<div class="">
									<div class="">
										<p><h5 class="home-intro-text">Meet our leadership and the team behind our premium services</h5></p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="column">
					<div class="">
						<ul>
							<li class="item plain-headline-item">
								<div class="">
									<div class="headline centered-heading general-heading-links static-outline">
		                                <a href="{{ url('career') }}"> <h4 class="is-size-3 fcheader">Work with us<h4></a>
		                            </div>
								</div>
							</li>
							<li class="item plain-headline-item-last">
								<div class="">
									<div class="">
										<h5 class="home-intro-text">Do you want to challenge yourself and help build Cedidollar? Gent in touch</h5>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="column">
					<div class="">
						<ul>
							<li class="item plain-headline-item">
								<div class="">
									<div class="headline centered-heading general-heading-links static-outline">
		                                <a href="{{ url('contactus') }}"> <h4 class="is-size-3 fcheader">Contact us<h4></a>
		                            </div>
								</div>
							</li>
							<li class="item plain-headline-item-last">
								<div class="">
									<div class="">
	                                    <p><h5 class="home-intro-text">Get in touch with us and one of our dedicated staff will reach out to you</h5></p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="column">
	                <div class="">
	                    <ul>
	                        <li class="item plain-headline-item">
	                            <div class="">
									<div class="headline centered-heading general-heading-links static-outline">
		                                <a href="{{ url('press') }}"> <h4 class="is-size-3 fcheader">Press<h4></a>
		                            </div>
	                            </div>
	                        </li>
	                        <li class="item plain-headline-item-last">
	                            <div class="" style="margin-top: auto;">
	                                <div class="">
	                                    <p><h5 class="home-intro-text">Keep up with carefully selected and well researched news items and opinions regularly</h5></p>
	                                </div>
	                            </div>
	                        </li>
	                    </ul>
	                </div>
				</div>
			</div>
			<div class="columns centered-heading">


			</div>
		</div>
	</section>


@endsection
