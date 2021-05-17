@extends('layouts.app')

@section('content')


<div class="container">

<div class="card2">
	<div class="row">
		<aside class="col-sm-5 border-right">
			<section class="gallery-wrap"> 
			<div class="img-big-wrap">
			  <div> 
			  	<img src="{{Storage::url($product->image)}}"  style="width: auto; max-height:300px; object-fit:contain; display:block; margin-left:auto; margin-right:auto">
			  </div>
			</div> 
			
			</section> 
		</aside>



		<aside class="col-sm-7">
			<section class="card2-body p-5">
				<h3 class="title mb-3">{{$product->name}}</h3>

<p class="price-detail-wrap"> 
	<span class="price h3 text-danger"> 
		<span class="currency">$</span>{{$product->price}}
	</span> 
    </p> 
   

  <h3>Description</h3>
  <p>{!!$product->description!!} </p>
  <h3>Additional information</h3>
  <p>{!!$product->additional_info!!} </p>

<hr>
	
 <!--    Qty update filed
     
     <div class="row">
    <div class="form-inline">
    <h3>Quantity:</h3>
    <input type="text" name="qty" class="form-control">
    <input type="submit" class="btn btn-primary ml-2">
    </div>
    </div>

    <hr> -->
	
    <a href="{{route('add.cart',[$product->id])}}" class="btn btn-lg btn-outline-primary text-uppercase">  Add to cart </a>
</section> 
		</aside> 

	</div> 
</div> 

@if(count($productFromSameCategories)>0)
<div class="jumbotron">
    <h3>You may like this Product also:</h3>

      <div class="row">
      
      @foreach($productFromSameCategories as $product)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="{{Storage::url($product->image)}}" style="width: auto; max-height:300px; object-fit:contain">

        

            <div class="card2-body" style="  position: absolute; bottom: 0;">
                <p><b>{{$product->name}}</b></p>
              <p class="card-text">
                  {{(Str::limit($product->description,15))}}
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="{{route('product.view',[$product->id])}}"> 
                 <button type="button" class="btn btn-sm btn-outline-success">View</button>
                 </a>
                 <a href="{{route('add.cart',[$product->id])}}">
                 <button type="button" class="btn btn-sm btn-outline-primary">Add to cart</button></a>
                </div>
                <small class="text-muted" style="position: relative; left: 100%; right: 0">${{$product->price}}</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

</div>

@endif


</div>

@endsection