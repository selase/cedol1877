@extends('layouts.master')
@section('main_story-active', 'is-active')

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


			<div class="column is-2" style="background-color: #0000ff08;">

			</div>
			{{-- Left --}}
			<div class="column is-8">
				{{-- First Middle Section --}}
				<section class="section has-border-bottom">
					<div class="columns" style="margin: 30px 0px 10px 0px;">
						<span class="category-title">Silicon Valley</span>
					</div>

					<div class="columns">
						<div class="column is-8">

							<h1 class="o-typography-headline">A light shines on the concentration of power in Silicon Valley</h1>

							<div class="">
								<h5 class="home-intro-text">Heavy trading as populist parties prepare to take power with little known candidate for PM.
			    					Totally alien the age-old political intelligentsia who seen baffled at how this could potentially turn out.
			    				</h5>

								<div class="name-small has-padding-top-10"><span>By : </span> <a href="#"> Mark Cuban</a><span> on 24 July 2018, 1:40 pm</span> </div>
							</div>

							<div class="" style="margin-top: 30px">
								<p class="social-links is-pulled-right">
									SHARE ON:
									<a href="#"><i class="fab fa-facebook-f"></i></a> |
									<a href="#"><i class="fab fa-twitter"></i></a> |
									<a href="#"><i class="far fa-envelope"></i></a> |
									<a href="#"><i class="fas fa-print"></i></a> |
									<a href="#"><i class="fas fa-bookmark"></i></a> 
								</p>
							</div>

						</div>
						<div class="column is-4">
							<a class="button is-rounded is-small is-pulled-left">Save to Library</a>

							{{-- <h5 class="home-intro-text">Heavy trading as populist parties prepare to take power with little known candidate for PM.
		    					Totally alien the age-old political intelligentsia who seen baffled at how this could potentially turn out.
		    				</h5> --}}

						</div>
					</div>

					<div class="columns">
						<div class="column">
							<img src="{{ asset('img/mahama.png') }}" alt="" width="100%">

							<span class="">_________________</span>
							<h5 class="home-intro-text"><small>Heavy trading as populist parties prepare to take power with little known candidate for PM.
								Totally alien the age-old political intelligentsia who seen baffled at how this could potentially turn out. </small>
							</h5>

							<span class="">_________________</span>

							<div class="content content-body-text">
								<p>The fines keep getting bigger, and so do the companies. Last week’s whopping €4.3bn antitrust penalty by the EU against Google for abusing its power in the mobile phone market was nearly double what it was charged last year for favouring search results from its shopping service over competitors.

								In both cases, the core issue was the way in which Google uses the power of its enormous ecosystem — it has about 90 per cent of key EU search markets and its Android software is used in more than 80 per cent of the world’s smartphones — to winnow out competitors.


								</p><p>It is appealing the latest decision, and will make technical arguments, with varying degrees of merit, about why it is not a monopoly. But the case also shines an uncomfortable light on the concentration of power in a handful of companies. The oligopoly that has resulted is the economic and political challenge of our time.

								Research published in the past few years shows that concentration and profit rates have increased across most US industries since the 1990s. Jason Furman, the former head of the Council of Economic Advisors, suggested that this phenomenon hints at barriers to entry in some markets.

								Academic David Autor has linked the same consolidation to a decrease in labour’s share of the US economy. There is also evidence that a small group of “superstar” companies are pulling way ahead of others, not only in terms of profits but also productivity.

								</p><p>In a paper released last month, OECD economists linked the insufficient diffusion of new technologies to weak overall productivity growth. The biggest companies, particularly in the most digitally connected parts of the economy (tech, finance and media), are incredibly productive. Everyone else, not so much. The upshot is that economic growth as a whole has suffered.

								Researchers are busy digging into the reasons for this centralisation of power. They suggest that the shift from a “tangible” economy, based on physical goods, to one based more on intangibles — namely intellectual property, ideas, and data — has sped up the trend towards concentration.

								</p><p>Facebook, Apple, Amazon, Netflix and Google — known collectively as the Faangs — are case studies in how the network effect supports dominant players and allows them to ringfence users and their data. Google’s claim that “competition is only a click away” rings hollow — if for some reason the site went down, we would all be more likely to take a coffee break and wait for it to come back online than seek out a competitor.

								Another reason for the concentration of corporate power is political capture. Americans invented modern antitrust policy, and love to rail against “statist” old Europe. But a fascinating study by academics Germán Gutiérrez and Thomas Philippon shows that EU markets are, in fact, more competitive. They have lower levels of concentration, lower excess profits, and lower regulatory barriers to entry.

								The study points to a huge rise in US political lobbying as the key reason that levels of concentration between the two regions have diverged since the 1990s. “European institutions are more independent than their American counterparts, and they enforce pro-competition policies more strongly than any individual country ever did,” it says.

								</p>
							</div>

						</div>
					</div>

					<div class="columns">
						<div class="column has-border-top">
							<span class="name-small"> <i class="fas fa-arrow-left"></i> PREVIOUS</span>
							<h5 class="home-intro-text is-uppercase"><a href="#"> A light shines on the concentration of power in Silicon Valley</a>
							</h5>
						</div>
						<div class="column has-border-top">
							<span class="name-small"> <i class="fas fa-arrow-right"></i> NEXT</span>
							<h5 class="home-intro-text is-uppercase"><a href="#"> A light shines on the concentration of power in Silicon Valley </a>
							</h5>
						</div>
					</div>
				</section>
			</div>

			{{-- Right Sidebar 1--}}
			<div class="column is-2 has-border-left-right">
				<div class="latest-articles">
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


		</div>
	</div>
</section>

{{-- More Stories--}}
{{-- <section class="section has-background-fadedwhite">
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
</section> --}}


@endsection
