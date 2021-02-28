
@extends('layout')

@section('content')
<div>
		<br><br>
		<center>
			<h3>Create Product</h3>
		</center>
		<br><br>
	</div>
	<div class="container">
		<div class=" ">
           <form action="{{url('/products/add')}}" method="post">
           @csrf
          <fieldset>
        <div class="form-group">
         <label>Name</label>
         <input type="text" class="form-control" placeholder="Name" name="name">
         </div>
        <div class="form-group">
         <label >Type</label>
         <input type="text" class="form-control"  placeholder="type" name="type">
        </div>
        <div class="form-group">
         <label>Price</label>
        <input type="text" class="form-control"  placeholder="price" name="price">
        </div>
        <div class="form-group">
        <label>Description</label>
        <input type="text" class="form-control"  placeholder="description" name="description">
        </div>
        <div class="form-group">
        <label>Image</label>
        <input type="text" class="form-control" placeholder="picture URl" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
    </form>

		</div>
	</div>
    @endsection
