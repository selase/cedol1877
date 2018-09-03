@extends('layouts.master')
@section('directory-active', 'is-active')

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

		{{-- Data Categories --}}
		<div class="columns has-text-weight-bold has-text-info" style="width: 80%; margin: 0 auto;">
			<div class="column">
				<div class="special-header-links">
					<p><a href="{{ url('listing') }}"><i class="fas fa-building"></i> MDA's</a></p>
				</div>
			</div>
			<div class="column">
				<div class="special-header-links">

					<p><a href="#"><i class="fas fa-hotel"></i> HOTELS</a></p>
				</div>
			</div>
			<div class="column">
				<div class="special-header-links">
					<p><a href="#"><i class="fas fa-utensils"></i> RESTAURANTS</a></p>
				</div>
			</div>
			<div class="column">
				<div class="special-header-links">
					<p><a href="#"><i class="fas fa-hospital-alt"></i> HOSPITALS</a></p>
				</div>
			</div>
			<div class="column">
				<div class="special-header-links">
					<p><a href="#"><i class="fas fa-balance-scale"></i> LEGAL</a></p>
				</div>
			</div>
			<div class="column">
				<div class="special-header-links">
					<p><a href="#"><i class="fas fa-shopping-basket"></i> SHOPPING</a></p>
				</div>
			</div>
			<div class="column">
				<div class="special-header-links">
					<p><a href="#"><i class="fas fa-car"></i> MECHANIC</a></p>
				</div>
			</div>
			<div class="column">
				<div class="special-header-links">
					<p><a href="#"><i class="fas fa-chevron-circle-down"></i> See More ...</a></p>
				</div>
			</div>

		</div>

	</div>
</section>

{{-- Datahub Listings--}}
<section class="section has-background-fadedwhite">
	<div class="container">
		<div class="columns">
			<div class="item plain-headline-item">
				<div class="headline">
					<h4 class="is-size-3 fcheader">Ministries, Departments & Agencies<h4>
				</div>
			</div>
		</div>
		<div class="columns">
			<div class="column">
				<div class="">
					<ul>
						<li class="database-item-links">
							<br>
							<p><span class="business-sub-category"></span> <a href="{{ url('listing') }}">Ministries | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">General Business. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Market Research | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Security Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Health & Safety | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Human Resources. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Storage Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Laundry & Dry Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Marketting. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Nanny Agency. | 100</a> </p>
						</li>

					</ul>
					<hr>
				</div>
			</div>
			<div class="column">
				<div class="">
					<ul>
						<li class="database-item-links">
							<br>
							<p><span class="business-sub-category"></span> <a href="#">Advertising | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">General Business. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Market Research | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Security Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Health & Safety | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Human Resources. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Storage Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Laundry & Dry Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Marketting. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Nanny Agency. | 100</a> </p>
						</li>

					</ul>
				</div>
			</div>
			<div class="column">
				<div class="">
					<ul>
						<li class="database-item-links">
							<br>
							<p><span class="business-sub-category"></span> <a href="#">Advertising | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">General Business. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Market Research | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Security Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Health & Safety | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Human Resources. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Storage Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Laundry & Dry Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Marketting. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Nanny Agency. | 100</a> </p>
						</li>

					</ul>
				</div>
			</div>
			<div class="column">
				<div class="">
					<ul>
						<li class="database-item-links">
							<br>
							<p><span class="business-sub-category"></span> <a href="#">Advertising | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">General Business. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Market Research | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Security Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Health & Safety | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Human Resources. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Storage Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Laundry & Dry Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Marketting. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Nanny Agency. | 100</a> </p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="columns">
			<div class="item plain-headline-item">
				<div class="headline">
					<h4 class="is-size-3 fcheader">Banking & Finance<h4>
				</div>
			</div>
		</div>
		<div class="columns">
			<div class="column">
				<div class="">
					<ul>
						<li class="database-item-links">
							<br>
							<p><span class="business-sub-category"></span> <a href="#">Advertising | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">General Business. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Market Research | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Security Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Health & Safety | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Human Resources. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Storage Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Laundry & Dry Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Marketting. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Nanny Agency. | 100</a> </p>
						</li>

					</ul>
					<hr>
				</div>
			</div>
			<div class="column">
				<div class="">
					<ul>
						<li class="database-item-links">
							<br>
							<p><span class="business-sub-category"></span> <a href="#">Advertising | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">General Business. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Market Research | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Security Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Health & Safety | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Human Resources. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Storage Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Laundry & Dry Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Marketting. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Nanny Agency. | 100</a> </p>
						</li>

					</ul>
				</div>
			</div>
			<div class="column">
				<div class="">
					<ul>
						<li class="database-item-links">
							<br>
							<p><span class="business-sub-category"></span> <a href="#">Advertising | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">General Business. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Market Research | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Security Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Health & Safety | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Human Resources. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Storage Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Laundry & Dry Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Marketting. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Nanny Agency. | 100</a> </p>
						</li>

					</ul>
				</div>
			</div>
			<div class="column">
				<div class="">
					<ul>
						<li class="database-item-links">
							<br>
							<p><span class="business-sub-category"></span> <a href="#">Advertising | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">General Business. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Market Research | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Security Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Health & Safety | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Human Resources. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Storage Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Laundry & Dry Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Marketting. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Nanny Agency. | 100</a> </p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="columns">
			<div class="item plain-headline-item">
				<div class="headline">
					<h4 class="is-size-3 fcheader">Manufacturing & Industry<h4>
				</div>
			</div>
		</div>
		<div class="columns">
			<div class="column">
				<div class="">
					<ul>
						<li class="database-item-links">
							<br>
							<p><span class="business-sub-category"></span> <a href="#">Advertising | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">General Business. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Market Research | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Security Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Health & Safety | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Human Resources. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Storage Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Laundry & Dry Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Marketting. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Nanny Agency. | 100</a> </p>
						</li>

					</ul>
					<hr>
				</div>
			</div>
			<div class="column">
				<div class="">
					<ul>
						<li class="database-item-links">
							<br>
							<p><span class="business-sub-category"></span> <a href="#">Advertising | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">General Business. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Market Research | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Security Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Health & Safety | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Human Resources. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Storage Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Laundry & Dry Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Marketting. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Nanny Agency. | 100</a> </p>
						</li>

					</ul>
				</div>
			</div>
			<div class="column">
				<div class="">
					<ul>
						<li class="database-item-links">
							<br>
							<p><span class="business-sub-category"></span> <a href="#">Advertising | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">General Business. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Market Research | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Security Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Health & Safety | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Human Resources. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Storage Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Laundry & Dry Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Marketting. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Nanny Agency. | 100</a> </p>
						</li>

					</ul>
				</div>
			</div>
			<div class="column">
				<div class="">
					<ul>
						<li class="database-item-links">
							<br>
							<p><span class="business-sub-category"></span> <a href="#">Advertising | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">General Business. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Market Research | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Security Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Health & Safety | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Human Resources. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Storage Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Laundry & Dry Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Marketting. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Nanny Agency. | 100</a> </p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="columns">
			<div class="item plain-headline-item">
				<div class="headline">
					<h4 class="is-size-3 fcheader">Health & Beauty<h4>
				</div>
			</div>
		</div>
		<div class="columns">
			<div class="column">
				<div class="">
					<ul>
						<li class="database-item-links">
							<br>
							<p><span class="business-sub-category"></span> <a href="#">Advertising | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">General Business. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Market Research | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Security Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Health & Safety | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Human Resources. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Storage Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Laundry & Dry Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Marketting. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Nanny Agency. | 100</a> </p>
						</li>

					</ul>
					<hr>
				</div>
			</div>
			<div class="column">
				<div class="">
					<ul>
						<li class="database-item-links">
							<br>
							<p><span class="business-sub-category"></span> <a href="#">Advertising | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">General Business. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Market Research | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Security Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Health & Safety | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Human Resources. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Storage Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Laundry & Dry Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Marketting. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Nanny Agency. | 100</a> </p>
						</li>

					</ul>
				</div>
			</div>
			<div class="column">
				<div class="">
					<ul>
						<li class="database-item-links">
							<br>
							<p><span class="business-sub-category"></span> <a href="#">Advertising | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">General Business. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Market Research | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Security Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Health & Safety | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Human Resources. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Storage Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Laundry & Dry Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Marketting. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Nanny Agency. | 100</a> </p>
						</li>

					</ul>
				</div>
			</div>
			<div class="column">
				<div class="">
					<ul>
						<li class="database-item-links">
							<br>
							<p><span class="business-sub-category"></span> <a href="#">Advertising | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">General Business. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Market Research | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Security Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Health & Safety | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Human Resources. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Storage Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Laundry & Dry Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Marketting. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Nanny Agency. | 100</a> </p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="columns">
			<div class="item plain-headline-item">
				<div class="headline">
					<h4 class="is-size-3 fcheader">Tourism & Acommodation<h4>
				</div>
			</div>
		</div>
		<div class="columns">
			<div class="column">
				<div class="">
					<ul>
						<li class="database-item-links">
							<br>
							<p><span class="business-sub-category"></span> <a href="#">Advertising | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">General Business. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Market Research | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Security Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Health & Safety | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Human Resources. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Storage Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Laundry & Dry Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Marketting. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Nanny Agency. | 100</a> </p>
						</li>

					</ul>
					<hr>
				</div>
			</div>
			<div class="column">
				<div class="">
					<ul>
						<li class="database-item-links">
							<br>
							<p><span class="business-sub-category"></span> <a href="#">Advertising | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">General Business. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Market Research | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Security Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Health & Safety | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Human Resources. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Storage Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Laundry & Dry Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Marketting. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Nanny Agency. | 100</a> </p>
						</li>

					</ul>
				</div>
			</div>
			<div class="column">
				<div class="">
					<ul>
						<li class="database-item-links">
							<br>
							<p><span class="business-sub-category"></span> <a href="#">Advertising | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">General Business. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Market Research | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Security Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Health & Safety | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Human Resources. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Storage Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Laundry & Dry Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Marketting. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Nanny Agency. | 100</a> </p>
						</li>

					</ul>
				</div>
			</div>
			<div class="column">
				<div class="">
					<ul>
						<li class="database-item-links">
							<br>
							<p><span class="business-sub-category"></span> <a href="#">Advertising | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">General Business. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Market Research | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Security Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Health & Safety | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Human Resources. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Storage Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Laundry & Dry Services | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Marketting. | 100</a> </p>
						</li>
						<li class="database-item-links">
							<p><span class="business-sub-category"></span> <a href="#">Nanny Agency. | 100</a> </p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection
