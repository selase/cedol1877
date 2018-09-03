@extends('layouts.master')
@section('home-active', 'is-active')
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

    <section class="section">
    	<div class="container">
    		<div class="columns has-background-grey-dark is-uppercase" style="line-height: 0em; color: #00ffff;">
    			<div class="column is-size-7 special-header-links" style="font-weight: 600;">
                    <a href="#">
                        Data Hub: <small class="subtitle is-uppercase" style="font-size: 0.9em; color: white">Get access to all public documents here. <i class="fas fa-arrow-down"></i></small>
                    </a>
                </div>
    			<div class="column is-size-7 special-header-links has-left-border-1">
                    <a href="#">
                        Business Directory: <small class="subtitle is-uppercase" style="font-size: 0.9em; color: white">Find business contacts & locations here. <i class="fas fa-arrow-down"></i></small>
                    </a>
                </div>
    			{{-- <div class="column is-size-7 special-header-links has-left-border-1">
                    <a href="#">
                        Get in touch: <small class="subtitle is-uppercase" style="font-size: 0.9em; color: white">Contact us all day, everyday on info@cedidollar.com <i class="fas fa-arrow-down"></i></small>
                    </a>
                </div> --}}
    			<div class="column is-size-7 special-header-links has-left-border-1">
                    <a href="{{ url('scholarship') }}">
                        Scholarships: <small class="subtitle is-uppercase" style="font-size: 0.9em; color: white">Access a curated list of scholarships for free <i class="fas fa-arrow-down"></i></small>
                    </a>
                </div>
    		</div>
    	</div>
    </section>


    {{-- Main Story: Headline + 4 Columns + Latest with Sidebar--}}
    <section class="section">
    	<div class="container">

    		{{-- Headline Story --}}
    		<div class="columns  has-background-blanchedalmond" style="border-bottom: 1px solid #f1f1f1">


                {{-- Left: Data Hub --}}
                <div class="column is-2">
                    <div class="columns">

                        <div class="headline-region-sidebar">
                            <h5 class="fcheader-for-sidebar"> Data Hub </h5>

                            <div class="headline">
                                <a href="/story">
                                    <h6 class="is-size-6 plain-headline-item">
                                        <i class="fas fa-arrow-down is-size-7"></i> EC'S Ruling on Charlotte Osei and many others
                                        {{-- <small class="subtitle is-uppercase" style="font-size: 0.7em">DOWNLOAD <i class="fas fa-arrow-down"></i></small> --}}
                                    </h6>
                                </a>
                                <a href="/story">
                                    <h6 class="is-size-6 plain-headline-item">
                                        <i class="fas fa-arrow-down is-size-7"></i> Constitution of Ghana
                                        {{-- <small class="subtitle is-uppercase" style="font-size: 0.7em">DOWNLOAD <i class="fas fa-arrow-down"></i></small> --}}
                                    </h6>
                                </a>
                                <a href="/story">
                                    <h6 class="is-size-6 plain-headline-item">
                                        <i class="fas fa-arrow-down is-size-7"></i> Public Sector wage bill
                                        {{-- <small class="subtitle is-uppercase" style="font-size: 0.7em">DOWNLOAD <i class="fas fa-arrow-down"></i></small> --}}
                                    </h6>
                                </a>

                            </div>
                        </div>

                    </div>

                    <div class="columns">
                        <div class="headline-region-sidebar">
                            <h5 class="fcheader-for-sidebar">Business Directory </h5>
                            <div class="headline">
                                <h6 class="is-size-6 plain-headline-item"> Find all your business contacts & locations right here on cedidollar.com
                                </h6>
                            </div>
                        </div>
                    </div>

                    <div class="columns">
                        <div class="headline has-text-centered" style="margin: 0 auto; padding-top: 5px">
                            <button type="button" name="button" class="button is-primary is-small">Get in touch </button>
                            {{-- <h6 class="is-size-6 plain-headline-item">Conatact us all day Everyday </h6> --}}
                        </div>
                    </div>

                </div>

                {{-- Middle: Title Story --}}
        		<div class="column is-4 has-left-border" style="padding: 20px">
        				<span class="category-title">Ghanaian Politics</span>

        				<h1 class="is-1 o-typography-headline">
                            <a href="{{ url('story') }}" class="header-links">Ghanaian assets hit hard by political risk over new government</a>
                        </h1>

        				<h5 class="home-intro-text">
                            Heavy trading as populist parties prepare to take power with little known candidate for PM.
        					Totally alien the age-old political intelligentsia who seen baffled at how this could potentially turn out.
                            Totally alien the age-old political intelligentsia who seen baffled at how this could potentially turn out.
        				</h5>
        				<span class="is-size-7 is-uppercase">Updated 3 Hours ago</span>
        			</div>

                {{-- Middle: Title Image --}}
        		<div class="column is-4">
        			<img src="{{ asset('img/kofi-anan.jpg') }}" alt="">
        		</div>

                {{-- Right: Higlights --}}
        		<div class="column is-2 has-left-border" style="margin: 0px;">

                        <div class="">
                            <ul>
                                <li class="item plain-headline-item">
                                    <div class="">
                                        <h5 class="fcheader-for-sidebar fcheader-for-sidebar">Highlights</h5>
                                        <div class="headline" style="color: #017769">
                                            Livingstone quits UK Labour party, says Martin Keon
                                        </div>
                                        <div class="date">
                                            <small class="subtitle is-uppercase" style="font-size: 0.7em">17:50 GMT</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="item plain-headline-item">
                                    <div class="">
                                        <div class="headline">
                                            Machester United players party, says anti-Semitism claims are a ‘distraction’
                                        </div>
                                        <div class="date">
                                            <small class="subtitle is-uppercase" style="font-size: 0.7em">15:00 GMT</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="item plain-headline-item">
                                    <div class="">
                                        <div class="headline">
                                            Arsenal Club manager, says fans claims are a ‘distraction’
                                        </div>
                                        <div class="date">
                                            <small class="subtitle is-uppercase" style="font-size: 0.7em">12:30 GMT</small>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
        			</div>

            </div>

    	</div>
    </section>

    @include('partials/four-columns')


    {{-- Latest Stories with Sidebar--}}
    <section class="section has-background-antiquewhite">
    	<div class="container">
    		<div class="columns">
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
        									<img width="160" height="100" src="https://static.timesofisrael.com/www/uploads/2018/05/000_1582YR-160x100.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" title="">
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

        		<div class="column is-two-thirds">
        			<section class="section" style="border-left: 1px solid #d4d4d4;border-right: 1px solid #d4d4d4">
        				<div class="columns">
        					<div class="column">
        						<span class="is-size-7 is-uppercase">GHANAIAN POLITICS</span>
        						<h1 class="o-typography-headline is-1">Facility management in safeguarding business investment</h1>
        						<h5 class="home-intro-text">Heavy trading as populist parties prepare to take power with little known candidate for PM. Knowing that the little known populist parties prepare to take power is a matter of great concert to all who are considering
        							standing for political positions
        						</h5>
        						<h5 class="home-intro-text">Heavy trading as populist parties prepare to take power with little known candidate for PM. Knowing that the little known populist parties prepare to take power is a matter of great concert to all who are considering
        							standing for political positions
        						</h5>
        						<span class="is-size-7">UPDATED 3 HOURS AGO</span>
        					</div>
        					<div class="column">
        						<img src="{{ asset('img/akuffo-addo.jpg') }}" alt="" width="">

        					</div>
        				</div>
        				<div class="columns">
        					<div class="column">
        						<div class="item post-tabs">
        							<div class="item-content">
        								<div class="headline">
        									<a href="#">Tens of thousands from West Bank attend Ramadan prayers in Jerusalem</a>
        								</div>
        								<div class="byline">By <a title="CediDollar staff" href="#">CediDollar staff</a></div>
        							</div>
        						</div>
        					</div>
        					<div class="column">
        						<div class="item post-tabs">
        							<div class="item-content">
        								<div class="headline">
        									<a href="#">Israel says it won’t cooperate with UN human rights council probe of Gaza deaths</a>
        								</div>
        								<div class="byline">By <a title="CediDollar staff" href="#">CediDollar staff</a> and <a title="Agencies" href="#">Agencies</a></div>
        							</div>
        						</div>
        					</div>
        					<div class="column">
        						<div class="item post-tabs">

        							<div class="item-content">
        								<div class="headline">
        									<a href="#">EU donating $35 million to repair key Gaza crossing torched by rioters — report</a>
        								</div>
        								<div class="byline">By <a title="CediDollar staff" href="#">CediDollar staff</a> and <a title="Judah Ari Gross" href="#">Judah Ari Gross</a></div>
        							</div>
        						</div>
        					</div>

        				</div>
        			</section>
        		</div>

        		{{-- latest stories sidebar --}}
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
        									<img width="160" height="100" src="https://i.onthe.io/3o3bpd502jrq9ldc8.0c70e98e.jpg" class="">
        								</a>
        							</div>
        							<div class="">
        								<div class="date">
        									<small class="subtitle is-uppercase" style="font-size: 0.7em">17 seconds ago</small>
        								</div>
        								<div class="headline">
        									Samia Nkrumah Calls For Renaming Of Kotoka International Airport siting common sense.
        								</div>
        							</div>
        						</li>
        						<li class="item plain-headline-item">
        							<div class="">
        								<div class="date">
        									<small class="subtitle is-uppercase" style="font-size: 0.7em">17 seconds ago</small>
        								</div>
        								<div class="headline">
        									Teacher compensation under Dual Intake System inadequate – NAGRAT
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

        		{{-- Recent Blog Sidebar --}}
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
    	   </div>
    	</div>
    </section>

    {{-- Other Category Stories 1--}}
    <section class="section has-background-aliceblue">
    	<div class="container">
    		<div class="columns">

    			{{-- left Sidebar Blogs--}}
    			<div class="column">
    				<div class="latest-articles widget">
    					<div class="widget-header">
    						Top Authors
    					</div>
    					<div class="">
    						<ul>
    							<li class="item plain-headline-item">
    								<div class="media">
    									<a href="#">
    										<img width="160" height="100" src="https://static.timesofisrael.com/www/uploads/2018/05/000_1582YR-160x100.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="">
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

    			{{-- Center Stories --}}
    			<div class="column is-two-thirds has-background-black-white-text">
    				<section class="section">
    					<div class="columns">
    						<div class="column">
    							<img src="{{ asset('img/china.jpg') }}" alt="" width="">

    						</div>
    						<div class="column">
    							<span class="is-size-7 is-uppercase">GHANAIAN POLITICS</span>
    							<h1 class="o-typography-headline has-text-white">China cuts import duty on cars in concession to US demands for fairness</h1>
    							<h5 class="home-intro-text has-text-white">Heavy trading as populist parties prepare to take power with little known candidate for PM.
    								Totally alien the age-old political intelligentsia who seen baffled at how this could potentially turn out. </h5>
    							<span class="is-size-7 has-text-white">UPDATED 3 HOURS AGO</span>
    						</div>
    					</div>
    					<div class="columns">
    						<div class="column">
    							<div class="item post-tabs">
    								<div class="item-content">
    									<div class="headline">
    										<a class="has-text-white" href="#">Tens of thousands from West Bank attend prayers in Jerusalem unhindered & with ease</a>
    									</div>
    									<div class="byline">By <a title="CediDollar staff" href="#">CediDollar staff</a></div>
    								</div>
    							</div>
    						</div>
    						<div class="column">
    							<div class="item post-tabs">
    								<div class="item-content">
    									<div class="headline">
    										<a class="has-text-white" href="#">Israel says it won’t cooperate with UN human rights council probe of Gaza deaths</a>
    									</div>
    									<div class="byline">By <a title="CediDollar staff" href="#">CediDollar staff</a> and <a title="Agencies" href="#">Agencies</a></div>
    								</div>
    							</div>
    						</div>
    						<div class="column">
    							<div class="item post-tabs">

    								<div class="item-content">
    									<div class="headline">
    										<a class="has-text-white" href="#">EU donating $35 million to repair key Gaza crossing torched by rioters — report</a>
    									</div>
    									<div class="byline">By <a title="CediDollar staff" href="#">CediDollar staff</a> and <a title="Judah Ari Gross" href="#">Judah Ari Gross</a></div>
    								</div>
    							</div>
    						</div>

    					</div>
    				</section>
    			</div>

    			{{-- Latest stories Right Sidebar --}}
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
    										<img width="160" height="100" src="https://citinewsroom.com/wp-content/uploads/2018/05/Oba-Enoch.jpg" class="attachment-thumbnail" alt="">
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
    </section>

    {{-- Other Category Stories 2--}}
    <section class="section has-background-antiquewhite">
    	<div class="container">
    		<div class="columns">

    			{{-- Left Sidebar--}}
    			<div class="column is-2">
    				<div class="latest-articles widget">
    					<div class="widget-header is-uppercase">
    						Top Authors
    					</div>
    					<div class="">
    						<ul>
    							<li class="item plain-headline-item">
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
    			{{-- Middle --}}
    			<div class="column is-8 has-border-left-right">
    				{{-- First Middle Section: --}}
    				<section class="section has-border-bottom">
    					<div class="columns">
    						<h1 class="o-typography-headline">China cuts import duty on cars in concession to US demands for fairness</h1>
    					</div>
    					<div class="columns">
    						<div class="column is-two-thirds">
    							<img src="{{ asset('img/china.jpg') }}" alt="" width="">

    						</div>
    						<div class="column">
    							<span class="is-size-7 is-uppercase">CHINESE POLITICS</span>
    							<h6 class="home-intro-text">Heavy trading as populist parties prepare to take power with little known candidate for PM.
    								Totally alien the age-old political intelligentsia who seen baffled at how this could potentially turn out. </h6>
    							<span class="is-size-7">UPDATED 3 HOURS AGO</span>
    						</div>
    					</div>
    					<div class="columns">
    						<div class="column">
    							<div class="item post-tabs">
    								<div class="item-content">
    									<div class="headline">
    										<a class="" href="#">Tens of thousands from West Bank attend Ramadan prayers in Jerusalem</a>
    									</div>
    									<div class="byline">By <a title="CediDollar staff" href="#">CediDollar staff</a></div>
    								</div>
    							</div>
    						</div>
    						<div class="column">
    							<div class="item post-tabs">
    								<div class="item-content">
    									<div class="headline">
    										<a class="" href="#">Israel says it won’t cooperate with UN human rights council probe of Gaza deaths</a>
    									</div>
    									<div class="byline">By <a title="CediDollar staff" href="#">CediDollar staff</a> and <a title="Agencies" href="#">Agencies</a></div>
    								</div>
    							</div>
    						</div>
    						<div class="column">
    							<div class="item post-tabs">

    								<div class="item-content">
    									<div class="headline">
    										<a class="" href="#">EU donating $35 million to repair key Gaza crossing torched by rioters — report</a>
    									</div>
    									<div class="byline">By <a title="CediDollar staff" href="#">CediDollar staff</a> and <a title="Judah Ari Gross" href="#">Judah Ari Gross</a></div>
    								</div>
    							</div>
    						</div>

    					</div>
    				</section>

    				{{-- Second Middle Section: More News--}}
    				<section class="section">
    					<h1 class="title">More News</h1>
    					<div class="columns">
    						<div class="column">
    							<div class="">
    							    <ul>
    							        <li class="item plain-headline-item">
    							            <div class="">
    							                <div class="date">
    							                    <small class="subtitle is-uppercase" style="font-size: 0.7em">17 seconds ago</small>
    							                </div>
    							                <div class="headline">
    							                    1. Livingstone quits UK Labour party, says anti-Semitism claims are a ‘distraction’
    							                </div>
    							            </div>
    							        </li>
    							        <li class="item plain-headline-item">
    							            <div class="">
    							                <div class="date">
    							                    <small class="subtitle is-uppercase" style="font-size: 0.7em">17 seconds ago</small>
    							                </div>
    							                <div class="headline">
    							                    2. Livingstone quits UK Labour party, says anti-Semitism claims are a ‘distraction’
    							                </div>
    							            </div>
    							        </li>
    							        <li class="item plain-headline-item">
    							            <div class="">
    							                <div class="date">
    							                    <small class="subtitle is-uppercase" style="font-size: 0.7em">17 seconds ago</small>
    							                </div>
    							                <div class="headline">
    							                    3. Livingstone quits UK Labour party, says anti-Semitism claims are a ‘distraction’
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
    						</div>
    					</div>

    				</section>

                    {{-- Third Middle Section: Business --}}
    				<section class="section has-background-white">
    					<h1 class="title">Business & Analysis</h1>
                        <hr>
    					<div class="columns">
    						<div class="column is-two-thirds">
    							<div class="">
    							    <ul>
    							        <li class="item plain-headline-item">
    							            <div class="">
                                                <div class="featured-image">
                                                    <img src="{{ asset('img/blackstone.png') }}" alt="">
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
    						<div class="column">
    							<div class="">
    							    <ul>
                                        <li class="item plain-headline-item">
    							            <div class="">
                                                <div class="featured-image-100">
                                                    <img src="{{ asset('img/feds.jpeg') }}" alt="">
                                                </div>
    							                <div class="category-title">
    							                    <small class="is-uppercase">Capital Markets</small>
    							                </div>
    							                <div class="headline">
    							                    <h4 class="is-size-5 fcheader">FCA says abnormal share moves at highest since 2010</h4>
    							                </div>
    							            </div>
    							        </li>
                                        <li class="item plain-headline-item">
    							            <div class="">
    							                <div class="category-title">
    							                    <small class="is-uppercase">Trading</small>
    							                </div>
    							                <div class="headline">
    							                    <h4 class="is-size-5 fcheader">Two ex-traders handed jail terms in Euribor rigging case</h4>
    							                </div>
    							            </div>
    							        </li>
                                        <li class="item plain-headline-item">
    							            <div class="">
    							                <div class="category-title">
    							                    <small class="is-uppercase">Stock Market</small>
    							                </div>
    							                <div class="headline">
    							                    <h4 class="is-size-5 fcheader">Decline in UK retail sales sends pound below $1.30</h4>
    							                </div>
    							            </div>
    							        </li>
    							    </ul>
    							</div>
    						</div>
    					</div>

    				</section>

                    {{-- Fouth Middle Section: Trends & Entertainment --}}
    				<section class="section has-background-fadedwhite">
    					<h1 class="title">Trends & Entertainment</h1>
                        <hr>
    					<div class="columns">
    						<div class="column is-two-thirds">
    							<div class="">
    							    <ul>
    							        <li class="item plain-headline-item">
    							            <div class="">
                                                <div class="featured-image">
                                                    <img src="{{ asset('img/blackstone.png') }}" alt="">
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
    						<div class="column">
    							<div class="">
    							    <ul>
                                        <li class="item plain-headline-item">
    							            <div class="">
                                                <div class="featured-image-100">
                                                    <img src="{{ asset('img/feds.jpeg') }}" alt="">
                                                </div>
    							                <div class="category-title">
    							                    <small class="is-uppercase">Capital Markets</small>
    							                </div>
    							                <div class="headline">
    							                    <h4 class="is-size-5 fcheader">FCA says abnormal share moves at highest since 2010</h4>
    							                </div>
    							            </div>
    							        </li>
                                        <li class="item plain-headline-item">
    							            <div class="">
    							                <div class="category-title">
    							                    <small class="is-uppercase">Trading</small>
    							                </div>
    							                <div class="headline">
    							                    <h4 class="is-size-5 fcheader">Two ex-traders handed jail terms in Euribor rigging case</h4>
    							                </div>
    							            </div>
    							        </li>
                                        <li class="item plain-headline-item">
    							            <div class="">
    							                <div class="category-title">
    							                    <small class="is-uppercase">Stock Market</small>
    							                </div>
    							                <div class="headline">
    							                    <h4 class="is-size-5 fcheader">Decline in UK retail sales sends pound below $1.30</h4>
    							                </div>
    							            </div>
    							        </li>
    							    </ul>
    							</div>
    						</div>
    					</div>

    				</section>

                    {{-- Fifth Middle Section: Technology --}}
    				<section class="section has-background-white">
    					<h1 class="title">Technology</h1>
                        <hr>
    					<div class="columns">
    						<div class="column is-two-thirds">
    							<div class="">
    							    <ul>
    							        <li class="item plain-headline-item">
    							            <div class="">
                                                <div class="featured-image">
                                                    <img src="{{ asset('img/tech.jpeg') }}" alt="">
                                                </div>
    							                <div class="headline">
    							                    <h4 class="is-size-3 fcheader">Blackstone seeks to boost assets with new fundraising 'super cycle'<h4>
    							                </div>
    							            </div>
    							        </li>
    							        <li class="item plain-headline-item">
    							            <div class="">
    							                <div class="category-title">
    							                    <small class="is-uppercase">Technology</small>
    							                </div>
    							                <div class="headline">
    							                    <h4 class="is-size-5 fcheader">US Treasuries market volatility gauge falls to new low as markets get ready for review</h4>
    							                </div>
    							            </div>
    							        </li>
                                        <li class="item plain-headline-item">
    							            <div class="">
    							                <div class="category-title">
    							                    <small class="is-uppercase">Technology</small>
    							                </div>
    							                <div class="headline">
    							                    <h4 class="is-size-5 fcheader">Fed’s Powell facing first test from the bond market</h4>
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
                                                <div class="featured-image-100">
                                                    <img src="{{ asset('img/feds.jpeg') }}" alt="">
                                                </div>
    							                <div class="category-title">
    							                    <small class="is-uppercase">Capital Markets</small>
    							                </div>
    							                <div class="headline">
    							                    <h4 class="is-size-5 fcheader">FCA says abnormal share moves at highest since 2010</h4>
    							                </div>
    							            </div>
    							        </li>
                                        <li class="item plain-headline-item">
    							            <div class="">
    							                <div class="category-title">
    							                    <small class="is-uppercase">Trading</small>
    							                </div>
    							                <div class="headline">
    							                    <h4 class="is-size-5 fcheader">Two ex-traders handed jail terms in Euribor rigging case</h4>
    							                </div>
    							            </div>
    							        </li>
                                        <li class="item plain-headline-item">
    							            <div class="">
    							                <div class="category-title">
    							                    <small class="is-uppercase">Stock Market</small>
    							                </div>
    							                <div class="headline">
    							                    <h4 class="is-size-5 fcheader">Decline in UK retail sales sends pound below $1.30</h4>
    							                </div>
    							            </div>
    							        </li>
    							    </ul>
    							</div>
    						</div>
    					</div>

    				</section>

                    {{-- Sixth Middle Section: Opinion --}}
    				<section class="section has-background-fadedwhite">
    					<h1 class="title">Opinion</h1>
                        <hr>
    					<div class="columns">
    						<div class="column is-two-thirds">
    							<div class="">
    							    <ul>
    							        <li class="item plain-headline-item">
    							            <div class="">
                                                <div class="featured-image">
                                                    <img src="{{ asset('img/blackstone.png') }}" alt="">
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
    						<div class="column">
    							<div class="">
    							    <ul>
                                        <li class="item plain-headline-item">
    							            <div class="">
                                                <div class="featured-image-100">
                                                    <img src="{{ asset('img/feds.jpeg') }}" alt="">
                                                </div>
    							                <div class="category-title">
    							                    <small class="is-uppercase">Capital Markets</small>
    							                </div>
    							                <div class="headline">
    							                    <h4 class="is-size-5 fcheader">FCA says abnormal share moves at highest since 2010</h4>
    							                </div>
    							            </div>
    							        </li>
                                        <li class="item plain-headline-item">
    							            <div class="">
    							                <div class="category-title">
    							                    <small class="is-uppercase">Trading</small>
    							                </div>
    							                <div class="headline">
    							                    <h4 class="is-size-5 fcheader">Two ex-traders handed jail terms in Euribor rigging case</h4>
    							                </div>
    							            </div>
    							        </li>
                                        <li class="item plain-headline-item">
    							            <div class="">
    							                <div class="category-title">
    							                    <small class="is-uppercase">Stock Market</small>
    							                </div>
    							                <div class="headline">
    							                    <h4 class="is-size-5 fcheader">Decline in UK retail sales sends pound below $1.30</h4>
    							                </div>
    							            </div>
    							        </li>
    							    </ul>
    							</div>
    						</div>
    					</div>

    				</section>

                    {{-- Seventh Middle Section: Data Hub--}}
    				<section class="section has-background-white">
    					<h1 class="title">Data Hub</h1>
                        <hr>
                        {{-- Row 1 --}}
                        <div class="columns">
                            <div class="column item plain-headline-item">
                                <div class="">
                                    <div class="featured-file">
                                        <span>Mid-Year Budget Review Document</span>
                                        <p style="padding-top: 10px"><i class="fas fa-2x fa-arrow-down"></i></p>

                                    </div>
                                    <div class="headline">
                                        <h4 class="is-size-6">The Mid-Year Budget Review Document<h4>
                                    </div>
                                </div>
                            </div>
                            <div class="column item plain-headline-item">
                                <div class="">
                                    <div class="featured-file" style="background-color: #191919">
                                        <span>The Constitution of Ghana</span>
                                        <p style="padding-top: 10px"><i class="fas fa-2x fa-arrow-down"></i></p>

                                    </div>
                                    <div class="headline">
                                        <h4 class="is-size-6">The Constitution of Ghana<h4>
                                    </div>
                                </div>
                            </div>
                            <div class="column item plain-headline-item">
                                <div class="">
                                    <div class="featured-file" style="background-color: #323232">
                                        <span>Policy on Sanitation</span>
                                        <p style="padding-top: 10px"><i class="fas fa-2x fa-arrow-down"></i></p>

                                    </div>
                                    <div class="headline">
                                        <h4 class="is-size-6">Government Policy on Sanitation<h4>
                                    </div>
                                </div>
                            </div>
                            <div class="column item plain-headline-item">
                                <div class="">
                                    <div class="featured-file" style="background-color: #4c4c4c">
                                        <span>Technology & the 21st Centrury</span>
                                        <p style="padding-top: 10px"><i class="fas fa-2x fa-arrow-down"></i></p>

                                    </div>
                                    <div class="headline">
                                        <h4 class="is-size-6">Technology in the 21st Century<h4>
                                    </div>
                                </div>
                            </div>
                            <div class="column item plain-headline-item">
                                <div class="">
                                    <div class="featured-file" style="background-color: #666666">
                                        <span>Mid-Year Budget Review Document</span>
                                        <p style="padding-top: 10px"><i class="fas fa-2x fa-arrow-down"></i></p>

                                    </div>
                                    <div class="headline">
                                        <h4 class="is-size-6">The Mid-Year Budget Review Document<h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Row 2 --}}
                        <div class="columns">
                            <div class="column item plain-headline-item">
                                <div class="">
                                    <div class="featured-file" style="background-color: #ffc38f">
                                        <span>Mid-Year Budget Review Document</span>
                                        <p style="padding-top: 10px"><i class="fas fa-2x fa-arrow-down"></i></p>

                                    </div>
                                    <div class="headline">
                                        <h4 class="is-size-6">The Mid-Year Budget Review Document<h4>
                                    </div>
                                </div>
                            </div>
                            <div class="column item plain-headline-item">
                                <div class="">
                                    <div class="featured-file" style="background-color: #8ee4ff">
                                        <span>The Constitution of Ghana</span>
                                        <p style="padding-top: 10px"><i class="fas fa-2x fa-arrow-down"></i></p>

                                    </div>
                                    <div class="headline">
                                        <h4 class="is-size-6">The Constitution of Ghana<h4>
                                    </div>
                                </div>
                            </div>
                            <div class="column item plain-headline-item">
                                <div class="">
                                    <div class="featured-file" style="background-color: #ff8e8e">
                                        <span>Policy on Sanitation</span>
                                        <p style="padding-top: 10px"><i class="fas fa-2x fa-arrow-down"></i></p>

                                    </div>
                                    <div class="headline">
                                        <h4 class="is-size-6">Government Policy on Sanitation<h4>
                                    </div>
                                </div>
                            </div>
                            <div class="column item plain-headline-item">
                                <div class="">
                                    <div class="featured-file" style="background-color: #7ebcff">
                                        <span>Technology & the 21st Centrury</span>
                                        <p style="padding-top: 10px"><i class="fas fa-2x fa-arrow-down"></i></p>

                                    </div>
                                    <div class="headline">
                                        <h4 class="is-size-6">Technology in the 21st Century<h4>
                                    </div>
                                </div>
                            </div>
                            <div class="column item plain-headline-item">
                                <div class="">
                                    <div class="featured-file" style="background-color: #ffadf0">
                                        <span>Mid-Year Budget Review Document</span>
                                        <p style="padding-top: 10px"><i class="fas fa-2x fa-arrow-down"></i></p>

                                    </div>
                                    <div class="headline">
                                        <h4 class="is-size-6">The Mid-Year Budget Review Document<h4>
                                    </div>
                                </div>
                            </div>
                        </div>

    				</section>

    			</div>
    			{{-- Right Sidebar --}}
    			<div class="column is-2">
    				<div class="latest-articles widget">
    					<div class="widget-header">
    						LATEST ARTICLES
    					</div>
    					<div class="">
    						<ul>
    							<li class="item plain-headline-item">
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
    </section>

    {{-- Video Section --}}
    <section class="section has-background-video-area">
    	<div class="container">
    		<div class="columns">
                <div class="column is-6">
                    <div class="" style="text-align: right">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ovj5dzMxzmc?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        {{-- <iframe width="100%" height="300" src="https://www.youtube.com/embed/ovj5dzMxzmc?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> --}}
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
                                        <small class="is-uppercase"><i class="fas fa-video"></i> Capital Markets</small>
                                    </div>
                                    <div class="headline-white">
                                        <h4 class="is-size-5 fcheader">FCA says abnormal share moves at highest since 2010</h4>
                                    </div>
                                </div>
                            </li>
                            <li class="item plain-headline-item">
                                <div class="">
                                    <div class="video-thumbnail">
                                        <img src="{{asset('/img/feds.jpeg')}}" alt="">
                                    </div>
                                    <div class="category-title-white">
                                        <small class="is-uppercase"><i class="fas fa-video"></i> Trading</small>
                                    </div>
                                    <div class="headline-white">
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
                                        <small class="is-uppercase"><i class="fas fa-video"></i> Stock Market</small>
                                    </div>
                                    <div class="headline-white">
                                        <h4 class="is-size-5 fcheader">Decline in UK retail sales sends pound below $1.30</h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="column is-2">
                    <div class="" style="width: 100%; height: 300px; background-color: #ccc1b7;">
                        <div class="featured-file" style="background-color: inherit; font-size: 1.1em;">
                            <span><i class="fas fa-video"></i><br>Technology &amp; the 21st Centrury</span>
                            <p style="padding-top: 10px"><i class="fas fa-2x fa-arrow-right"></i></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Opinions --}}
    @include('partials/opinion_partial')

    {{-- Footer Below--}}



@endsection
