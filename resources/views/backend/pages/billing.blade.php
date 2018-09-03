@extends('backend.layouts.master')
@section('billing', 'is-active')
@section('mainContent')

<section class="section has-background-aliceblue">
	<div class="container">
        <div class="columns">
            <h3 class="is-size-3 fcheader">Billing Information<h3>
        </div>
		<div class="columns" style="height: 300px">
			<div class="column is-3">
            </div>
			<div class="column">
                <table class="table is-narrow has-background-aliceblue">
                  <thead>
                    <tr>
                    <tr>
                      <td><p>Method</p></td>
                      <td><p>VISA Card</p></td>
                    </tr>
                    <tr>
                      <td><p>Account Name / Number:</p></td>
                      <td><p>john@gmail.com</p></td>
                    </tr>
                </table>
            </div>
			<div class="column is-3">
            </div>
        </div>

    </div>
</section>

@endsection
