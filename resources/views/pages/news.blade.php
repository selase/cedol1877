@extends('layouts.master')
@section('news-active', 'is-active')

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

			{{-- Left --}}
			<div class="column is-8">
				{{-- First Middle Section --}}
				<section class="section has-border-bottom">
					<div class="columns">
						<h1 class="o-typography-headline">China cuts import duty on cars in concession to US demands for fairness</h1>
					</div>
					<div class="columns">
						<div class="column is-two-thirds">
							<img src="{{ asset('img/mahama.png') }}" alt="" width="">

						</div>
						<div class="column">
							<span class="is-size-7 is-uppercase">CHINESE POLITICS</span>
							<h5 class="home-intro-text">Heavy trading as populist parties prepare to take power with little known candidate for PM.
								Totally alien the age-old political intelligentsia who seen baffled at how this could potentially turn out. </h5>
							<span class="is-size-7">UPDATED 3 HOURS AGO</span>
						</div>
					</div>
					<div class="columns">
						<div class="column">
							<div class="item post-tabs">
								<div class="item-content">
									<div class="headline">
										<a class="" href="#"><span class="thumbnail-50"> <img src="{{ asset('img/charlotte.jpg') }}" alt=""> </span>Tens of thousands from West Bank attend Ramadan prayers in Jerusalem</a>
									</div>
									<br>
									<div class="byline">By <a title="CediDollar staff" href="#">CediDollar staff</a></div>
								</div>
							</div>
						</div>
						<div class="column">
							<div class="item post-tabs">
								<div class="item-content">
									<div class="headline">
										<a class="" href="#"><span class="thumbnail-50"><img src="{{ asset('img/bicycle.jpg') }}" alt=""></span>Israel says it won’t cooperate with UN human rights council probe of Gaza deaths</a>
									</div>
									<br>
									<div class="byline">By <a title="CediDollar staff" href="#">CediDollar staff</a> and <a title="Agencies" href="#">Agencies</a></div>
								</div>
							</div>
						</div>
						<div class="column">
							<div class="item post-tabs">

								<div class="item-content">
									<div class="headline">
										<a class="" href="#"><span class="thumbnail-50"><img src="{{ asset('img/mahama.png') }}" alt=""></span>EU donating $35 million to repair key Gaza crossing torched by rioters — report</a>
									</div>
									<br>
									<div class="byline">By <a title="CediDollar staff" href="#">CediDollar staff</a> and <a title="Judah Ari Gross" href="#">Judah Ari Gross</a></div>
								</div>
							</div>
						</div>
					</div>
				</section>

				{{-- Second Middle Section --}}
				{{-- <section class="section">
					<h1 class="title">More News</h1>
					<div class="columns">
						<div class="column">
							<div class="">
							    <ul>
							        <li class="item" style="border-bottom: 1px dotted #d6d6d6; padding: 10px 0px">
							            <div class="">
							                <div class="date">
							                    <small class="subtitle is-uppercase" style="font-size: 0.7em">17 seconds ago</small>
							                </div>
							                <div class="headline">
							                    Livingstone quits UK Labour party, says anti-Semitism claims are a ‘distraction’
							                </div>
							            </div>
							        </li>
							        <li class="item" style="border-bottom: 1px dotted #d6d6d6; padding: 10px 0px">
							            <div class="">
							                <div class="date">
							                    <small class="subtitle is-uppercase" style="font-size: 0.7em">17 seconds ago</small>
							                </div>
							                <div class="headline">
							                    Livingstone quits UK Labour party, says anti-Semitism claims are a ‘distraction’
							                </div>
							            </div>
							        </li>
							        <li class="item" style="border-bottom: 1px dotted #d6d6d6; padding: 10px 0px">
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
						</div>
						<div class="column">
							<div class="">
							    <ul>
							        <li class="item" style="border-bottom: 1px dotted #d6d6d6; padding: 10px 0px">
							            <div class="">
							                <div class="date">
							                    <small class="subtitle is-uppercase" style="font-size: 0.7em">17 seconds ago</small>
							                </div>
							                <div class="headline">
							                    Livingstone quits UK Labour party, says anti-Semitism claims are a ‘distraction’
							                </div>
							            </div>
							        </li>
							        <li class="item" style="border-bottom: 1px dotted #d6d6d6; padding: 10px 0px">
							            <div class="">
							                <div class="date">
							                    <small class="subtitle is-uppercase" style="font-size: 0.7em">17 seconds ago</small>
							                </div>
							                <div class="headline">
							                    Livingstone quits UK Labour party, says anti-Semitism claims are a ‘distraction’
							                </div>
							            </div>
							        </li>
							        <li class="item" style="border-bottom: 1px dotted #d6d6d6; padding: 10px 0px">
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
						</div>
					</div>
				</section> --}}
			</div>
			{{-- Right Sidebar 1--}}
			<div class="column is-2 has-border-left-right">
				<div class="latest-articles widget">
					<div class="widget-header is-uppercase is-size-6">
						Recent Stories
					</div>
					<div class="">
						<ul>
							<li class="item" style="border-bottom: 1px dotted #d6d6d6; padding: 10px 0px">
								<div class="media">
									<a href="#">
										<img width="160" height="100" src="https://i.onthe.io/3o3bpd502jrq9ldc8.0c70e98e.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="">
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
							<li class="item" style="border-bottom: 1px dotted #d6d6d6; padding: 10px 0px">
								<div class="">
									<div class="date">
										<small class="subtitle is-uppercase" style="font-size: 0.7em">17 seconds ago</small>
									</div>
									<div class="headline">
										Livingstone quits UK Labour party, says anti-Semitism claims are a ‘distraction’
									</div>
								</div>
							</li>
							<li class="item" style="border-bottom: 1px dotted #d6d6d6; padding: 10px 0px">
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
			{{-- Right Sidebar 2 --}}
			<div class="column is-2">
				<div class="latest-articles widget">
					<div class="widget-header is-uppercase is-size-6">
						Most Read
					</div>
					<div class="">
						<ul>
							<li class="item" style="border-bottom: 1px dotted #d6d6d6; padding: 10px 0px">
								<div class="media">
									<a href="#">
										<img width="160" height="100" src="https://static.timesofisrael.com/www/uploads/2018/05/000_1582YR-160x100.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="In this file photo taken on June 15, 2017, former mayor of London Ken Livingstone visits the area, a day after the blaze at Grenfell Tower, a residential tower block in west London.(AFP PHOTO / Daniel LEAL-OLIVAS)" title="In this file photo taken on June 15, 2017, former mayor of London Ken Livingstone visits the area, a day after the blaze at Grenfell Tower, a residential tower block in west London.(AFP PHOTO / Daniel LEAL-OLIVAS)">
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
							<li class="item" style="border-bottom: 1px dotted #d6d6d6; padding: 10px 0px">
								<div class="">
									<div class="date">
										<small class="subtitle is-uppercase" style="font-size: 0.7em">17 seconds ago</small>
									</div>
									<div class="headline">
										Livingstone quits UK Labour party, says anti-Semitism claims are a ‘distraction’
									</div>
								</div>
							</li>
							<li class="item" style="border-bottom: 1px dotted #d6d6d6; padding: 10px 0px">
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
</section>

{{-- More Stories: 4 Columns--}}
<section class="section has-background-fadedwhite">
	<div class="container">
		<div class="columns">
			<div class="column">
				<div class="">
					<ul>
						<li class="item plain-headline-item">
							<div class="">
								<div class="featured-image">
									<img src="{{ asset('img/china2.jpg') }}" alt="">
								</div>
								<div class="headline">
									<h4 class="is-size-3 fcheader">Outrage in China Over Latest Vaccine Safety Scandal<h4>
								</div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="category-title">
									<small class="is-uppercase">Market Analysis</small>
								</div>
								<div class="headline">
									<h4 class="is-size-5 fcheader">Cambodia's Fractured Opposition Plans a Fight to the Finish</h4>
								</div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="category-title">
									<small class="is-uppercase">Capital Markets</small>
								</div>
								<div class="headline">
									<h4 class="is-size-5 fcheader">Public Lecture on 'Self-reliance in Africa's Security Sector' at the Bahir Dar University</h4>
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
								<div class="featured-image">
									<img src="{{ asset('img/top-story.jpg') }}" alt="">
								</div>
								<div class="headline">
									<h4 class="is-size-3 fcheader">Posting graduates to farms ‘outmoded’ – Casely-Hayford<h4>
								</div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="category-title">
									<small class="is-uppercase">Market Analysis</small>
								</div>
								<div class="headline">
									<h4 class="is-size-5 fcheader">US Treasuries market volatility gauge falls to new low as markets get ready for review</h4>
								</div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="category-title">
									<small class="is-uppercase">Capital Markets</small>
								</div>
								<div class="headline">
									<h4 class="is-size-5 fcheader">Fed’s Powell facing first test from the bond market</h4>
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
								<div class="featured-image">
									<img src="{{ asset('img/mahama.png') }}" alt="">
								</div>
								<div class="headline">
									<h4 class="is-size-3 fcheader">Public Lecture on 'Self-reliance in Africa's Security Sector'<h4>
								</div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="category-title">
									<small class="is-uppercase">Market Analysis</small>
								</div>
								<div class="headline">
									<h4 class="is-size-5 fcheader">US Treasuries market volatility gauge falls to new low as markets get ready for review</h4>
								</div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="category-title">
									<small class="is-uppercase">Capital Markets</small>
								</div>
								<div class="headline">
									<h4 class="is-size-5 fcheader">Fed’s Powell facing first test from the bond market</h4>
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
	        					LATEST ARTICLES
	        				</div>
	        				<div class="">
	        					<ul>
	        						<li class="item plain-headline-item">
	        							<div class="media">
	        								<a href="#">
	        									<img width="160" height="100" src="https://i.onthe.io/3o3bpd502jrq9ldc8.0c70e98e.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="In this file photo taken on June 15, 2017, former mayor of London Ken Livingstone visits the area, a day after the blaze at Grenfell Tower, a residential tower block in west London.(AFP PHOTO / Daniel LEAL-OLIVAS)" title="In this file photo taken on June 15, 2017, former mayor of London Ken Livingstone visits the area, a day after the blaze at Grenfell Tower, a residential tower block in west London.(AFP PHOTO / Daniel LEAL-OLIVAS)">
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
		<div class="columns has-background-aliceblue">
			<div class="column">
				<div class="">
					<ul>
						<li class="item plain-headline-item">
							<div class="">
								<div class="featured-image">
									<img src="{{ asset('img/china2.jpg') }}" alt="">
								</div>
								<div class="headline">
									<h4 class="is-size-3 fcheader">Blackstone seeks to boost assets with new fundraising 'super cycle'<h4>
								</div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="category-title">
									<small class="is-uppercase">Market Analysis</small>
								</div>
								<div class="headline">
									<h4 class="is-size-5 fcheader">US Treasuries market volatility gauge falls to new low as markets get ready for review</h4>
								</div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="category-title">
									<small class="is-uppercase">Capital Markets</small>
								</div>
								<div class="headline">
									<h4 class="is-size-5 fcheader">Fed’s Powell facing first test from the bond market</h4>
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
								<div class="featured-image">
									<img src="{{ asset('img/top-story.jpg') }}" alt="">
								</div>
								<div class="headline">
									<h4 class="is-size-3 fcheader">Blackstone seeks to boost assets with new fundraising 'super cycle'<h4>
								</div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="category-title">
									<small class="is-uppercase">Market Analysis</small>
								</div>
								<div class="headline">
									<h4 class="is-size-5 fcheader">US Treasuries market volatility gauge falls to new low as markets get ready for review</h4>
								</div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="category-title">
									<small class="is-uppercase">Capital Markets</small>
								</div>
								<div class="headline">
									<h4 class="is-size-5 fcheader">Fed’s Powell facing first test from the bond market</h4>
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
								<div class="featured-image">
									<img src="{{ asset('img/mahama.png') }}" alt="">
								</div>
								<div class="headline">
									<h4 class="is-size-3 fcheader">Blackstone seeks to boost assets with new fundraising 'super cycle'<h4>
								</div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="category-title">
									<small class="is-uppercase">Market Analysis</small>
								</div>
								<div class="headline">
									<h4 class="is-size-5 fcheader">US Treasuries market volatility gauge falls to new low as markets get ready for review</h4>
								</div>
							</div>
						</li>
						<li class="item plain-headline-item">
							<div class="">
								<div class="category-title">
									<small class="is-uppercase">Capital Markets</small>
								</div>
								<div class="headline">
									<h4 class="is-size-5 fcheader">Fed’s Powell facing first test from the bond market</h4>
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
	        					LATEST ARTICLES
	        				</div>
	        				<div class="">
	        					<ul>
	        						<li class="item plain-headline-item">
	        							<div class="media">
	        								<a href="#">
	        									<img width="160" height="100" src="https://i.onthe.io/3o3bpd502jrq9ldc8.0c70e98e.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="In this file photo taken on June 15, 2017, former mayor of London Ken Livingstone visits the area, a day after the blaze at Grenfell Tower, a residential tower block in west London.(AFP PHOTO / Daniel LEAL-OLIVAS)" title="In this file photo taken on June 15, 2017, former mayor of London Ken Livingstone visits the area, a day after the blaze at Grenfell Tower, a residential tower block in west London.(AFP PHOTO / Daniel LEAL-OLIVAS)">
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
