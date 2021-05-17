@extends('layouts.app')

@section('content')


    <div class="container">
        <h2>Products</h2>
        <br>

        <div class="row">
        <div class="col-md-2">
             <form action="{{route('product.list',[$slug])}}" method="GET">
            <!--foreach subcategories-->
            @foreach($subcategories as $subcategory)
           
              <p><input type="checkbox" name="subcategory[]"
               value="{{$subcategory->id}}" 
               @if(isset($filterSubCategories))
                {{in_array($subcategory->id,$filterSubCategories)?'checked ="checked" ':''}}
               @endif

               > {{$subcategory->name}}</p>
           <!--end foreach-->
           @endforeach
           <br>
          <input type="submit" value="Filter" class="btn btn-secondary">
         </form>
         <br>
         <hr>
         <h3>Filter by price</h3>
         <br>

         <form  action="{{route('product.list',[$slug])}}" method="GET">
             <input type="text" name="min" class="form-control" placeholder="minimum price" required="">
            <br>
             <input type="text" name="max" class="form-control" placeholder="maximum price" required=""  >
             <input type="hidden" name="categoryId" value="{{$categoryId}}">
             
             <br>
             <br>
            <input type="submit" value="Filter" class="btn btn-secondary">

        </form>
        <br>
       
       <a href="{{route('product.list',[$slug])}}">
       <input type="submit" value="Unfilter" class="btn btn-secondary">
       </a>

      



        </div>
      <div class="col-md-10">
        <div class="row">
      <!--foreach products-->
      @foreach($products as $product)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="{{Storage::url($product->image)}}" style="width: auto; max-height:300px; object-fit:contain">
            <div class="card2-body" style="  position: absolute; bottom: 0;">
                <p><b>{{$product->name}} </b></p>
              <p class="card-text">
                {{(Str::limit($product->description,15))}}
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <a href="{{route('product.view',[$product->id])}}"> 
                 <button type="button" class="btn btn-sm btn-outline-success">View</button>
                 </a>
                 <a href="{{route('add.cart',[$product->id])}}">
               <button type="button" class="btn btn-sm btn-outline-primary">Add to cart</button>
               </a>
                </div>
                <small class="text-muted" style="position: relative; left: 70%; right: 0">${{$product->price}}</small>
              </div>
            </div>
          </div>
        </div>
    <!--endforeach-->
    @endforeach
      </div>
    </div>
</div>
</div>

      
  

@endsection
