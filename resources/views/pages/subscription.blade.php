@extends('layouts.master')
@section('listing-active', 'is-active')

@section('mainContent')

{{-- Other Category Stories 2--}}
<section class="section has-background-antiquewhite is-fullheight">
	<div class="container">

		{{-- Subscribe --}}
		<div class="columns">
			<div class="hero-body">
				<div class="container">
					<div class="column is-4 is-offset-4">
						<h3 class="title has-text-centered">Subscribe</h3>
						<p class="subtitle has-text-centered">Please Subscribe.</p>
						<div class="box">
							<form>
								<label class="custom-label is-uppercase">Email Address</label>
								<div class="field">
									<div class="control">
										<input class="input" type="email" placeholder="Your Email" autofocus="">
									</div>
								</div>

								<label class="custom-label is-uppercase">Password</label>
								<div class="field">
									<div class="control">
										<input class="input" type="password" placeholder="Your Password">
									</div>
								</div>

								<label class="custom-label is-uppercase">First name</label>
								<div class="field">
									<div class="control">
										<input class="input" type="text" placeholder="Your first name" autofocus="">
									</div>
								</div>

								<label class="custom-label is-uppercase">Last name</label>
								<div class="field">
									<div class="control">
										<input class="input" type="text" placeholder="Your last name" autofocus="">
									</div>
								</div>

								<label class="custom-label is-uppercase">Phone Number</label>
								<div class="field">
									<div class="control">
										<input class="input" type="text" placeholder="Your phone number" autofocus="">
									</div>
								</div>

								<hr>

								<label class="custom-label is-uppercase">Your Industry of Work</label>
								<div class="field">
									<div class="control">
										<div class="select">
										    <select>
												<option value="" selected>Please select an industry</option>
													<option value="ACC">Accountancy &amp; tax advisory</option>
													<option value="DEF">Aerospace &amp; defence</option>
													<option value="CAR">Automobiles</option>
													<option value="BKG">Banking</option>
													<option value="RES">Basic resources/mining</option>
													<option value="PHC">Chemicals</option>
													<option value="MAP">Comms/Publishing/Media</option>
													<option value="BSE">Consulting/business services</option>
													<option value="EDU">Education/Academia</option>
													<option value="ENU">Energy/utilities</option>
													<option value="ENC">Engineering/construction</option>
													<option value="FSE">Financial services</option>
													<option value="FOO">Food &amp; beverages</option>
													<option value="FAM">Fund/asset management</option>
													<option value="GPV">Govt/public service/NGO</option>
													<option value="HEA">Health &amp; pharmaceuticals</option>
													<option value="IT">IT/computing</option>
													<option value="MAN">Industrial goods &amp; services</option>
													<option value="INS">Insurance</option>
													<option value="LAW">Legal services</option>
													<option value="RET">Personal &amp; household goods</option>
													<option value="REA">Property</option>
													<option value="RTL">Retail</option>
													<option value="TEL">Telecommunications</option>
													<option value="TRL">Transport/logistics</option>
													<option value="TRV">Travel &amp; leisure</option>
										    </select>
										 </div>

									</div>
								</div>

								<label class="custom-label is-uppercase">What is your Job Position</label>
								<div class="field">
									<div class="control">
										<div class="select">
										    <select>
												<option value="" selected>Please select a job position</option>
												<option value="AN">Analyst</option>
												<option value="AS">Associate</option>
												<option value="BU">Business School Academic</option>
												<option value="CP">CEO/president/Chairman</option>
												<option value="CS">Consultant</option>
												<option value="OE">Exec Mgmt (EVP/SVP/MD)</option>
												<option value="MB">MBA Student</option>
												<option value="MA">Manager/Supervisor</option>
												<option value="MD">Other C Level (CFO/COO/CIO/CMO)</option>
												<option value="OP">Owner/Partner/Proprietor</option>
												<option value="PR">Professional</option>
												<option value="PM">Programme/Project Manager</option>
												<option value="SE">Secretary/Treasurer</option>
												<option value="SM">Senior Manager/Dept Head</option>
												<option value="TS">Technical/Business Specialist</option>
												<option value="DH">VP/Director</option>
										    </select>
										 </div>

									</div>
								</div>

								<p class="subtitle has-text-centered has-padding-top-10">Payment Details.</p>
								<hr>

								<div class="field custom-label has-text-grey">
									<div class="control">
										<label class="radio">
											<input type="radio" name="question">
											<span class="is-uppercase title is-6"> Free</span>
										</label>
										<p class="">Not sure which package to choose? Try full access for 4 weeks and then decide which package best suits you</p>
										<hr>

										<label class="radio">
											<input type="radio" name="question">
											<span class="is-uppercase title is-6"> Digital</span>
										</label>
										<p class="">With this package you will be informed with the essential news and opinion</p>
										<hr>

										<label class="radio">
											<input type="radio" name="question">
											<span class="is-uppercase title is-6"> Premium Digital</span>
										</label>
										<p class="">All the essentials plus deeper insights and analysis</p>
										<hr>
									</div>
								</div>

								<div class="field">
									<label class="checkbox">
									  <p><input type="checkbox"> I confirm that i have ready and agree to the Terms & Conditions <a href="#">HERE</a> </p>
									</label>
								</div>
								<hr>

								<button class="button is-block is-info is-medium is-fullwidth">Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection
