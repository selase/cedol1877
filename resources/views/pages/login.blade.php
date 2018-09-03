@extends('layouts.master')
@section('listing-active', 'is-active')

@section('mainContent')

{{-- Other Category Stories 2--}}
<section class="section has-background-antiquewhite is-fullheight">
	<div class="container">

		{{-- Search Bar --}}
		<div class="columns">

		</div>
		<div class="columns">
			<div class="hero-body">
				<div class="container">
					<div class="column is-4 is-offset-4">
						<h3 class="title has-text-centered">Login</h3>
						<p class="subtitle has-text-centered">Please login to proceed.</p>
						<div class="box">
							<form>
								<div class="field">
									<div class="control">
										<input class="input" type="email" placeholder="Your Email" autofocus="">
									</div>
									<p class="help is-danger">This email is invalid</p>
								</div>

								<div class="field">
									<div class="control">
										<input class="input" type="password" placeholder="Your Password">
									</div>
								</div>
								<div class="field has-text-centered">
									<label class="checkbox">
									  <p><input type="checkbox"> Remember me</p>
									</label>
								</div>
								<button class="button is-block is-info is-medium is-fullwidth">Login</button>
							</form>
						</div>
						<p class="has-text-centered">
							<a href="../">Subscribe</a> &nbsp;·&nbsp;
							<a href="../">Forgot Password</a> &nbsp;·&nbsp;
							<a href="../">Need Help?</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection
