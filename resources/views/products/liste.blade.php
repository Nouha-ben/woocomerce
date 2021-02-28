
@extends('layout')

@section('content')
    <div>
		<br><br>
		<center>
			<h3>Data Products Woocommerce</h3>
		</center>
		<br><br>
	</div>
	<div class="text-left">
	    <a class="btn btn-primary offset-1 " href="{{url('/products/create/')}}">Create Product</a>
		<a class="btn btn-primary offset-1 text-right" href="{{url('/products/excel/')}}">Export Product</a>
	</div>

	<br>
	<div class="container">
		<div class="table-responsive ">
			<table class="table table-hover ">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Type</th>
						<th>Status</th>
						<th>price</th>
                        <th>Action</th>
					</tr>
				</thead>
				<tbody>
				      @foreach($products as $product)
					<tr>
						<td>{{ $product->id }}</td>
						<td>{{ $product->name }}</td>
                        <td>{{ $product->type }} </td>
						<td>{{ $product->status }}</td>
						<td>{{ $product->price }}</td>
                        <td>
  
                            <form action="{{url('/products/delete')}}" method="post">
                            @csrf
                            {{method_field('DELETE')}}
							    <a class="btn btn-primary offset-1" href="{{url('/products/edit/'.$product->id.'')}}">Update</a>
                                <button class="btn btn-danger" type="submit" name="id" value="{{$product->id}}">Remove</button>
                            </form>


                        </td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
    @endsection
