@extends('backend.layouts.master')
@section('history', 'is-active')
@section('mainContent')


<section class="section has-background-aliceblue">
	<div class="container">
        <div class="columns">
            <h3 class="is-size-3 fcheader">Past Purchases & Subscriptions<h3>
        </div>
		<div class="columns" style="height: 300px">
			<div class="column is-3">

            </div>
			<div class="column">
                <table class="table is-fullwidth">
                  <thead>
                    <tr>
                      <th><p>Date</p></th>
                      <th><p>Invoice #</p></th>
                      <th><p>Amount</p></th>
                      <th><p>Receipt</p></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><p>2018-08-15</p></td>
                      <td><p>INV03623605</p></td>
                      <td><p>US$-58.47</p></td>
                      <td><p><a href="#">Download</a> </p></td>
                    </tr>
                    <tr>
                        <td><p>2018-08-13</p></td>
                        <td><p>INV13623604</p></td>
                        <td><p>US$-58.47</p></td>
                        <td><p><a href="#">Download</a> </p></td>
                    </tr>
                    <tr>
                        <td><p>2018-08-10</p></td>
                        <td><p>INV73623601</p></td>
                        <td><p>US$-58.47</p></td>
                        <td><p><a href="#">Download</a> </p></td>
                    </tr>
                    <tr>
                        <td><p>2018-07-11</p></td>
                        <td><p>INV93623604</p></td>
                        <td><p>US$-58.47</p></td>
                        <td><p><a href="#">Download</a> </p></td>
                    </tr>
                    <tr>
                        <td><p>2018-06-10</p></td>
                        <td><p>INV63623603</p></td>
                        <td><p>US$-58.47</p></td>
                        <td><p><a href="#">Download</a> </P</td>
                    </tr>
                  </tbody>
                </table>
            </div>
			<div class="column is-3">
            </div>
        </div>

    </div>
</section>


@endsection
