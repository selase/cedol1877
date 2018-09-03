@extends('backend.layouts.master')
@section('library', 'is-active')
@section('mainContent')

    <section class="section has-background-aliceblue">
    	<div class="container">
            <div class="columns">
                <h3 class="is-size-3 fcheader">Saved Items<h3>
            </div>
    		<div class="columns plain-headline-item">
    			<div class="column is-2">
                    <figure class="image is-96x96 is-pulled-right">
                      <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                    </figure>
    			</div>
    			<div class="column is-8 has-left-border">
                    <div class="">
                        <div class="category-title">
                            <small class="is-uppercase">Trends</small>
                        </div>
                        <div class="headline">
                            <h4 class="is-size-5 fcheader">US Treasuries market volatility gauge falls to new low as markets get ready for review</h4>
                        </div>
                        <p><h5 class="home-intro-text">The fines keep getting bigger, and so do the companies. Last week’s whopping €4.3bn antitrust
                            penalty by the EU against Google for abusing its power in the mobile phone market was nearly double what it was charged
                            last year for favouring search results from its shopping service over competitors</5>
                        </p>
                    </div>
    			</div>
    			<div class="column is-2 has-left-border">
                    <a class="button is-rounded is-small is-pulled-left has-background-danger has-text-white">Remove</a>
    			</div>
    		</div>

    		<div class="columns plain-headline-item">
    			<div class="column is-2">
                    <figure class="image is-96x96 is-pulled-right">
                      <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                    </figure>
    			</div>
    			<div class="column is-8 has-left-border">
                    <div class="">
                        <div class="category-title">
                            <small class="is-uppercase">Trends</small>
                        </div>
                        <div class="headline">
                            <h4 class="is-size-5 fcheader">Strikes by Amazon workers in Europe threaten Prime Day sales</h4>
                        </div>
                        <p><h5 class="home-intro-text">Some people say the fines keep getting bigger, and so do the companies. Last week’s whopping €4.3bn antitrust
                            penalty by the EU against Google for abusing its power in the mobile phone market was nearly double what it was charged
                            last year for favouring search results from its shopping service over competitors</5>
                        </p>
                    </div>
    			</div>
    			<div class="column is-2 has-left-border">
                    <a class="button is-rounded is-small is-pulled-left has-background-danger has-text-white">Remove</a>
    			</div>
    		</div>

    	</div>
    </section>

@endsection
