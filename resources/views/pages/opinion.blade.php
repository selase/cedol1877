@extends('layouts.master')
@section('opinion-active', 'is-active')

@section('mainContent')

{{-- News Reel Strip --}}
<section class="section" style="padding-top: 6px;padding-bottom: 6px;">
	<div class="container">
		<div class="columns has-background-black-white-text newsreel-links" style="line-height: 1em">
			<div class="column is-size-7" style="font-weight: 600;"><a href="{{ url('story') }}">FCA demands higher standards in robo advice for investors ~ 3H AGO</a> <span class="red-dot"></span></div>
			<div class="column is-size-7 has-left-border-1"><a href="#">US stock futures climb on easing China trade tensions ~ 3H AGO</a> <span class="red-dot"></span></div>
			<div class="column is-size-7 has-left-border-1"><a href="#">Facebook’s Mark Zuckerberg agrees to have EU hearing live-streamed ~ 31 DAyS AGO</a> <span class="red-dot"></span></div>
			<div class="column is-size-7 has-left-border-1"><a href="#">BP latest to ink LNG supply deal with Venture Global ~ 5H AGO</a> <span class="red-dot"></span></div>
		</div>
	</div>
</section>

{{-- Other Category Stories 2--}}
<section class="section has-background-antiquewhite">
	<div class="container">
		<div class="columns">

			{{-- Left Column: Main Story--}}
			<div class="column is-8">
				{{-- First Left Section --}}
				<section class="section">
					<div class="columns">
						<h1 class="o-typography-headline">Charlotte Osei gets honored with top award by US gov't amidst her troubles in Ghana</h1>
					</div>
					<div class="columns">
						<div class="column is-two-thirds">
							<img src="{{ asset('img/charlotte.jpg') }}" alt="" width="">

						</div>
						<div class="column">
							<span class="category-title">Ghana Politics</span>
							<h5 class="home-intro-text">The Women of Courage Award is an American award presented annually to women around the world who have shown leadership, courage, and willingness to sacrifice for others, especially in promoting women’s rights.
							</h5>
							<span class="name-small is-uppercase">13:00 GMT</span>
						</div>
					</div>
				</section>
			</div>
			{{-- Right Sidebar 1: Recent Blog Sidebar --}}
			<div class="column has-left-border">
				<div class="latest-articles">
					<div class="widget-header is-uppercase">
						Recent Blogs
					</div>
					<div class="align-center">
						<ul>
							<li class="item plain-headline-item">
								<div>
									<a href="#">
										<img src="{{ asset('img/blogger.jpg') }}" class="author-thumbnail" alt="">
									</a>
								</div>
								<div class="">
									<div class="name-small">
										<span class="is-uppercase">KWESI MARK</span>
									</div>
									<div class="headline">
										VAR is no friend to Atlanta United
									</div>
								</div>
							</li>
							<li class="item plain-headline-item">
								<div>
									<a href="#">
										<img src="{{ asset('img/blogger2.png') }}" class="author-thumbnail" alt="">
									</a>
								</div>
								<div class="">
									<div class="name-small">
										<span class="is-uppercase">AMA KOOMSON</span>
									</div>
									<div class="headline">
										VAR is no friend to Atlanta United
									</div>
								</div>
							</li>
							<li class="item plain-headline-item">
								<div>
									<a href="#">
										<img src="{{ asset('img/blogger3.png') }}" class="author-thumbnail" alt="">
									</a>
								</div>
								<div class="">
									<div class="name-small">
										<span class="is-uppercase">EDINAM AMOAH</span>
									</div>
									<div class="headline">
										If Not Now – Who and What are You?
									</div>
								</div>
							</li>
						</ul>

					</div>
					<div class="has-text-primary">
						<span class="is-size-7">Sell All</span>
					</div>
				</div>
			</div>
			{{-- Right Sidebar 2 : Most Read--}}
			<div class="column is-2">
				<div class="latest-articles widget">
					<div class="widget-header is-uppercase is-size-6">
						Most Read
					</div>
					<div class="">
						<ul>
							<li class="item plain-headline-item">
								<div class="">
									<div class="name-small">
										<span class="is-uppercase">Kwesi Mark</span>
									</div>
									<div class="headline">
										Samia Nkrumah Calls For Renaming Of Kotoka Airport
									</div>
								</div>
							</li>
							<li class="item plain-headline-item">
								<div class="">
									<div class="name-small">
										<span class="is-uppercase">Derick Adogla</span>
									</div>
									<div class="headline">
										Livingstone quits UK Labour party, says anti-Semitism claims are a ‘distraction’
									</div>
								</div>
							</li>
							<li class="item plain-headline-item">
								<div class="">
									<div class="name-small">
										<span class="is-uppercase">Mahama Ayensi</span>
									</div>
									<div class="headline">
										Teacher compensation under Dual Intake System inadequate – NAGRAT
									</div>
								</div>
							</li>
							<li class="item plain-headline-item">
								<div class="">
									<div class="name-small">
										<span class="is-uppercase">Selorm Amankwah</span>
									</div>
									<div class="headline">
										We Will Ensure The Economy Works For Every Ghanaian
									</div>
								</div>
							</li>
						</ul>

					</div>
					<div class="has-text-primary">
						<span class="is-size-7">Sell All</span>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

{{-- More Opinion Stories--}}
<section class="section has-background-fadedwhite">
	<div class="container">
		<div class="columns">
			<div class="column">
				<div class="">
					<ul>
						<li class="item plain-headline-item">
							<div class="">
								<div>
									<a href="#">
										<img src="{{ asset('img/blogger2.png') }}" class="author-thumbnail" alt="">
									</a>
								</div>
								<div class="headline">
									<h4 class="is-size-3 fcheader">Outrage in China Over Latest Vaccine Safety Scandal<h4>
								</div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="media">
									<div class="media-left">
										<figure class="image is-48x48">
											<a href="#">
												<img src="{{ asset('img/blogger3.png') }}" class="author-thumbnail" alt="">
											</a>
										</figure>
									</div>
									<div class="media-content">

										<div class="category-title">
											<small class="is-uppercase">Kwesi Markintosh</small>
										</div>
										<div class="headline">
											<h4 class="is-size-5 fcheader">Cambodia's Fractured Opposition Plans a Fight to the Finish and all those who stand up them</h4>
										</div>
									</div>
							    </div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="media">
									<div class="media-left">
										<figure class="image is-48x48">
											<a href="#">
												<img src="{{ asset('img/blogger.jpg') }}" class="author-thumbnail" alt="">
											</a>
										</figure>
									</div>
									<div class="media-content">

										<div class="category-title">
											<small class="is-uppercase">Kwesi Markintosh</small>
										</div>
										<div class="headline">
											<h4 class="is-size-5 fcheader">Blackstone seeks to boost assets with new fundraising super cycle</h4>
										</div>
									</div>
							    </div>
							</div>
						</li>
					</ul>
				</div>

			</div>
			<div class="column has-left-border">
				<div class="">
					<ul>
						<li class="item plain-headline-item">
							<div class="">
								<div>
									<a href="#">
										<img src="{{ asset('img/blogger3.png') }}" class="author-thumbnail" alt="">
									</a>
								</div>
								<div class="headline">
									<h4 class="is-size-3 fcheader">Posting graduates to farms ‘outmoded’ – Casely-Hayford<h4>
								</div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="media">
									<div class="media-left">
										<figure class="image is-48x48">
											<a href="#">
												<img src="{{ asset('img/blogger2.png') }}" class="author-thumbnail" alt="">
											</a>
										</figure>
									</div>
									<div class="media-content">

										<div class="category-title">
											<small class="is-uppercase">Kwesi Markintosh</small>
										</div>
										<div class="headline">
											<h4 class="is-size-5 fcheader">Livingstone quits UK Labour party, says anti-Semitism claims are a ‘distraction’</h4>
										</div>
									</div>
							    </div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="media">
									<div class="media-left">
										<figure class="image is-48x48">
											<a href="#">
												<img src="{{ asset('img/blogger.jpg') }}" class="author-thumbnail" alt="">
											</a>
										</figure>
									</div>
									<div class="media-content">

										<div class="category-title">
											<small class="is-uppercase">Kwesi Markintosh</small>
										</div>
										<div class="headline">
											<h4 class="is-size-5 fcheader">Fed’s Powell facing first test from the bond market and we must be seriously concerned</h4>
										</div>
									</div>
							    </div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="column has-left-border">
				<div class="">
					<ul>
						<li class="item plain-headline-item">
							<div class="">
								<div>
									<a href="#">
										<img src="{{ asset('img/blogger.jpg') }}" class="author-thumbnail" alt="">
									</a>
								</div>
								<div class="headline">
									<h4 class="is-size-3 fcheader">Public Lecture on 'Self-reliance in Africa's Security Sector'<h4>
								</div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="media">
									<div class="media-left">
										<figure class="image is-48x48">
											<a href="#">
												<img src="{{ asset('img/blogger2.png') }}" class="author-thumbnail" alt="">
											</a>
										</figure>
									</div>
									<div class="media-content">

										<div class="category-title">
											<small class="is-uppercase">Ama Koomson</small>
										</div>
										<div class="headline">
											<h4 class="is-size-5 fcheader">US Treasuries market volatility gauge falls to new low as markets get ready for review</h4>
										</div>
									</div>
							    </div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="media">
									<div class="media-left">
										<figure class="image is-48x48">
											<a href="#">
												<img src="{{ asset('img/blogger3.png') }}" class="author-thumbnail" alt="">
											</a>
										</figure>
									</div>
									<div class="media-content">

										<div class="category-title">
											<small class="is-uppercase">Edinam Amoah</small>
										</div>
										<div class="headline">
											<h4 class="is-size-5 fcheader">Fed’s Powell facing first test from the bond market</h4>
										</div>
									</div>
							    </div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="column has-left-border">
				<div class="column">
	        			<div class="latest-articles widget">
	        				<div class="widget-header">
	        					LATEST OPINION
	        				</div>
	        				<div class="">
	        					<ul>
	        						<li class="item plain-headline-item">
	        							<div class="media">
	        								<a href="#">
	        									<img width="160" height="100" src="{{ asset('/img/akuffo-addo.jpg') }}" class="">
	        								</a>
	        							</div>
	        							<div class="">
	        								<div class="date">
	        									<small class="subtitle is-uppercase" style="font-size: 0.7em">17 seconds ago</small>
	        								</div>
	        								<div class="headline">
	        									Livingstone quits UK Labour party, says anti-Semitism claims are a ‘distraction’
	        								</div>
	        							</div>
	        						</li>
	        						<li class="item plain-headline-item">
	        							<div class="">
	        								<div class="date">
	        									<small class="subtitle is-uppercase" style="font-size: 0.7em">17 seconds ago</small>
	        								</div>
	        								<div class="headline">
	        									Livingstone quits UK Labour party, says anti-Semitism claims are a ‘distraction’
	        								</div>
	        							</div>
	        						</li>
	        						<li class="item plain-headline-item">
	        							<div class="">
	        								<div class="date">
	        									<small class="subtitle is-uppercase" style="font-size: 0.7em">17 seconds ago</small>
	        								</div>
	        								<div class="headline">
	        									Livingstone quits UK Labour party, says anti-Semitism claims are a ‘distraction’
	        								</div>
	        							</div>
	        						</li>
	        					</ul>

	        				</div>
	        				<div class="has-text-primary">
	        					<span class="is-size-7">Sell All</span>
	        				</div>
	        			</div>
	        		</div>
			</div>
		</div>
	</div>
</section>


@endsection
