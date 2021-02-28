@extends('layout')

@section('content')
<div>
		<br><br>
		<center>
			<h3>Data Orders Woocommerce</h3>
		</center>
		<br><br>
	<div>
		<a class="btn btn-primary offset-1 " href="{{url('/orders/excel/')}}">Export Orders</a>
	</div>
	</div>
	<br>
	<div class="container">
		<div class="table-responsive ">
			<table class="table table-hover ">
				<thead>
					<tr>
						<th>Number</th>
						<th>Order</th>
						<th>Date</th>
						<th>Status</th>
						<th>Total</th>
                        <th>Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($orders as $order)
					<tr>
						<td>{{ $order->number }}</td>
						<td>
						{{ $order->billing->first_name }}
						 {{ $order->billing->last_name }}
						</td>
						<td>{{ $order->date_created }}</td>
						<td>{{ $order->status }}</td>
						<td>{{ $order->total }}</td>
                        <td>
                        <a class="btn btn-primary offset-1" href="{{ url('orders/edit/'.$order->id.'') }}">Update</a>
                        </td>
					</tr>
					@endforeach 
			</table>
		</div>
	</div>
    @endsection
