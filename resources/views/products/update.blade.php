
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
           <form action="{{url('/products/update')}}" method="post">
            @csrf
          <fieldset>
          <div class="form-group">
         <label>ID</label>
         <input type="text" class="form-control" value="{{$product->id}}" readonly name="id" >
         </div>
        <div class="form-group">
         <label>Name</label>
         <input type="text" class="form-control" value="{{$product->name}}" name="name">
         </div>
        <div class="form-group">
         <label >Type</label>
         <input type="text" class="form-control" value="{{$product->type}}" name="type">
        </div>
        <div class="form-group">
         <label>Price</label>
        <input type="text" class="form-control"  value="{{$product->price}}" name="price">
        </div>
        <div class="form-group">
        <label>Description</label>
        <input type="text" class="form-control"  value="{{$product->description}}" name="description">
        </div>
        <div class="form-group">
        <label>Image</label>
        <input type="text" class="form-control" value="{{$product->images[0]->src}}" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </fieldset>
    </form>

		</div>
	</div>
    @endsection
