
@extends('layout')

@section('content')
<div>
		<br><br>
		<center>
			<h3>Update Order</h3>
		</center>
		<br><br>
	</div>
	<div class="container">
		<div class=" ">
           <form method="post" action="{{url('/orders/update')}}">
           @csrf
          <fieldset>
        <div class="form-group">
         <label>ID</label>
         <input type="text" class="form-control" value="{{ $order->id }}" value="id" readonly name="id">
         </div>
        <div class="form-group">
         <label >Status</label>
         <select name="status"  class="form-control">
                            <option value="pending">Pending payment</option>
                            <option value="processing">Processing</option>
                            <option value="on-hold">On hold</option>
                            <option value="completed">Completed</option>
                            <option value="cancelled">Cancelled</option>
                            <option value="refunded">Refunded</option>
                            <option value="failed">Failed</option>
         </select>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
    </form>

		</div>
	</div>
    @endsection
