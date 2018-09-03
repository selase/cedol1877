@extends('backend.layouts.master')
@section('profile', 'is-active')
@section('mainContent')

<section class="section has-background-aliceblue">
	<div class="container">
		<div class="columns">
			<div class="column is-3">
            </div>
			<div class="column">
                <div class="field is-horizontal">
                  <div class="field-label is-normal">
                    <label class="custom-label">Email</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <input class="input" type="text" placeholder="Email">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="field is-horizontal">
                  <div class="field-label is-normal">
                    <label class="custom-label">Password</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <input class="input" type="text" placeholder="Password">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="field is-horizontal">
                  <div class="field-label is-normal">
                    <label class="custom-label">First Name</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <input class="input" type="text" placeholder="Your first name">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="field is-horizontal">
                  <div class="field-label is-normal">
                    <label class="custom-label">Last name</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <input class="input" type="text" placeholder="Your Last name">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="field is-horizontal">
                  <div class="field-label is-normal">
                    <label class="custom-label">Phone Number</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <input class="input" type="text" placeholder="Your Phone">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="field is-horizontal">
                  <div class="field-label is-normal">
                    <label class="custom-label">Country</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <input class="input" type="text" placeholder="Your country">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="field is-horizontal">
                  <div class="field-label is-normal">
                    <label class="custom-label">Your Position</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <input class="input" type="text" placeholder="Position">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="field is-horizontal">
                  <div class="field-label is-normal">
                    <label class="custom-label">Industry of Work</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <input class="input" type="text" placeholder="Industry of Work">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="field is-horizontal">
                  <div class="field-label">
                    <!-- Left empty for spacing -->
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <button class="button is-primary">
                          Edit Details
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

            </div>
			<div class="column is-3">
            </div>
        </div>

    </div>
</section>


@endsection
