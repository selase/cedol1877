@extends('backend.layouts.master')
@section('history', 'is-active')
@section('mainContent')


<section class="section has-background-aliceblue">
	<div class="container">
        <div class="columns">
            <h3 class="is-size-3 fcheader">Application Backend<h3>
        </div>
		<div class="columns">
			<div class="column is-3">
				<aside class="menu">
				  <p class="menu-label">
				    General
				  </p>
				  <ul class="menu-list">
				    <li><a>Dashboard</a></li>
				    <li><a>Posts</a></li>
				    <li><a>Pages</a></li>
				  </ul>
				  <p class="menu-label">
				    Administration
				  </p>
				  <ul class="menu-list">
				    <li><a>Team Settings</a></li>
				    <li>
				      <a class="is-active">Manage Your Team</a>
				      <ul>
				        <li><a>Members</a></li>
				        <li><a>Plugins</a></li>
				        <li><a>Add a member</a></li>
				      </ul>
				    </li>
				    <li><a>Invitations</a></li>
				    <li><a>Cloud Storage Environment Settings</a></li>
				    <li><a>Authentication</a></li>
				  </ul>
				  <p class="menu-label">
				    Transactions
				  </p>
				  <ul class="menu-list">
				    <li><a>Payments</a></li>
				    <li><a>Transfers</a></li>
				    <li><a>Balance</a></li>
				  </ul>
				</aside>
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
