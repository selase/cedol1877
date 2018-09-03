@extends('layouts.master')
@section('video', 'is-active')

@section('mainContent')


on the video page
{{-- Video Section --}}
<section class="section has-background-video-area">
	<div class="container">
		<div class="columns">
            <div class="column is-8">
                <div class="" style="text-align: right">
                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/ovj5dzMxzmc?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            <div class="column is-4">
                <div class="">
                    <ul>
                        <li class="item plain-headline-item">
                            <div class="">
                                <div class="video-thumbnail">
                                    <img src="{{asset('/img/feds.jpeg')}}" alt="">
                                </div>
                                <div class="category-title-white">
                                    <small class="is-uppercase"><i class="fas fa-video"></i> Video</small>
                                </div>

								<div class="modal">


								<div class="modal-background"></div>
								<div class="modal-content" style="text-align: right">
				                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/ovj5dzMxzmc?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				                </div>
								<button class="modal-close is-large" aria-label="close">Button</button>

								</div>

                                <div class="headline-white video-recent-item-links">
                                    <h4 class="is-size-5 fcheader"><a href="#" id="showModal">FCA says abnormal share moves at highest since 2010</a></h4>
                                </div>
                            </div>
                        </li>
                        <li class="item plain-headline-item">
                            <div class="">
                                <div class="video-thumbnail">
                                    <img src="{{asset('/img/feds.jpeg')}}" alt="">
                                </div>
                                <div class="category-title-white">
                                    <small class="is-uppercase"><i class="fas fa-video"></i> Video</small>
                                </div>
                                <div class="headline-white video-recent-item-links">
                                    <h4 class="is-size-5 fcheader"><a href="#">Two ex-traders handed jail terms in Euribor rigging case</a></h4>
                                </div>
                            </div>
                        </li>
                        <li class="item plain-headline-item">
                            <div class="">
                                <div class="video-thumbnail">
                                    <img src="{{asset('/img/feds.jpeg')}}" alt="">
                                </div>
                                <div class="category-title-white">
                                    <small class="is-uppercase"><i class="fas fa-video"></i> Video</small>
                                </div>
                                <div class="headline-white video-recent-item-links">
                                    <h4 class="is-size-5 fcheader"><a href="#">Decline in UK retail sales sends pound below $1.30</a></h4>
                                </div>
                            </div>
                        </li>
                        <li class="item plain-headline-item">
                            <div class="">
                                <div class="video-thumbnail">
                                    <img src="{{asset('/img/feds.jpeg')}}" alt="">
                                </div>
                                <div class="category-title-white">
                                    <small class="is-uppercase"><i class="fas fa-video"></i> Video</small>
                                </div>
                                <div class="headline-white video-recent-item-links">
                                    <h4 class="is-size-5 fcheader"><a href="#">Two ex-traders handed jail terms in Euribor rigging case</a></h4>
                                </div>
                            </div>
                        </li>
                        <li class="item plain-headline-item">
                            <div class="">
                                <div class="video-thumbnail">
                                    <img src="{{asset('/img/feds.jpeg')}}" alt="">
                                </div>
                                <div class="category-title-white">
                                    <small class="is-uppercase"><i class="fas fa-video"></i> Video</small>
                                </div>
                                <div class="headline-white video-recent-item-links">
                                    <h4 class="is-size-5 fcheader"><a href="#">Decline in UK retail sales sends pound below $1.30</a></h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="section has-background-white">
	<div class="container">
		<div class="columns">
			<div class="column">
				<div class="">
					<ul>
						<li class="item plain-headline-item">
							<div class="">
								<div class="video-thumbnail">
									<img src="{{asset('/img/feds.jpeg')}}" alt="">
								</div>
								<div class="category-title-white">
									<small class="is-uppercase"><i class="fas fa-video"></i> Video</small>
								</div>
								<div class="headline-white video-item-links">
									<h4 class="is-size-5 fcheader"><a href="#">FCA says abnormal share moves at highest since 2010</a></h4>
								</div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="video-thumbnail">
									<img src="{{asset('/img/feds.jpeg')}}" alt="">
								</div>
								<div class="category-title-white">
									<small class="is-uppercase"><i class="fas fa-video"></i> Video</small>
								</div>
								<div class="headline-white video-item-links">
									<h4 class="is-size-5 fcheader">Two ex-traders handed jail terms in Euribor rigging case</h4>
								</div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="video-thumbnail">
									<img src="{{asset('/img/feds.jpeg')}}" alt="">
								</div>
								<div class="category-title-white">
									<small class="is-uppercase"><i class="fas fa-video"></i> Video</small>
								</div>
								<div class="headline-white video-item-links">
									<h4 class="is-size-5 fcheader">Decline in UK retail sales sends pound below $1.30</h4>
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
								<div class="video-thumbnail">
									<img src="{{asset('/img/feds.jpeg')}}" alt="">
								</div>
								<div class="category-title-white">
									<small class="is-uppercase"><i class="fas fa-video"></i> Video</small>
								</div>
								<div class="headline-white video-item-links">
									<h4 class="is-size-5 fcheader"><a href="#">FCA says abnormal share moves at highest since 2010</a></h4>
								</div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="video-thumbnail">
									<img src="{{asset('/img/feds.jpeg')}}" alt="">
								</div>
								<div class="category-title-white">
									<small class="is-uppercase"><i class="fas fa-video"></i> Video</small>
								</div>
								<div class="headline-white video-item-links">
									<h4 class="is-size-5 fcheader">Two ex-traders handed jail terms in Euribor rigging case</h4>
								</div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="video-thumbnail">
									<img src="{{asset('/img/feds.jpeg')}}" alt="">
								</div>
								<div class="category-title-white">
									<small class="is-uppercase"><i class="fas fa-video"></i> Video</small>
								</div>
								<div class="headline-white video-item-links">
									<h4 class="is-size-5 fcheader">Decline in UK retail sales sends pound below $1.30</h4>
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
								<div class="video-thumbnail">
									<img src="{{asset('/img/feds.jpeg')}}" alt="">
								</div>
								<div class="category-title-white">
									<small class="is-uppercase"><i class="fas fa-video"></i> Video</small>
								</div>
								<div class="headline-white video-item-links">
									<h4 class="is-size-5 fcheader"><a href="#">FCA says abnormal share moves at highest since 2010</a></h4>
								</div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="video-thumbnail">
									<img src="{{asset('/img/feds.jpeg')}}" alt="">
								</div>
								<div class="category-title-white">
									<small class="is-uppercase"><i class="fas fa-video"></i> Video</small>
								</div>
								<div class="headline-white video-item-links">
									<h4 class="is-size-5 fcheader">Two ex-traders handed jail terms in Euribor rigging case</h4>
								</div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="video-thumbnail">
									<img src="{{asset('/img/feds.jpeg')}}" alt="">
								</div>
								<div class="category-title-white">
									<small class="is-uppercase"><i class="fas fa-video"></i> Video</small>
								</div>
								<div class="headline-white video-item-links">
									<h4 class="is-size-5 fcheader">Decline in UK retail sales sends pound below $1.30</h4>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>

		</div>
	</div>
</section>


@push('scripts')
<script src="js/modal.js"></script>
@endpush

@endsection
