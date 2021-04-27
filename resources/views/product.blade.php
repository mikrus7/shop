@extends('layouts.app')

@section('content')
<div class="container">
<main role="main">

<div class="container">
      <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">
    @if(count($sliders)>0)
    @foreach($sliders as $key=> $slider)

    <div class="carousel-item {{$key == 0 ? 'active' : ''}} ">
      <img src="{{Storage::url($slider->image)}}" >
    </div>
    @endforeach
    @endif

  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<br><br>

  <h2>Category:</h2>
  <br>
  @foreach(App\Models\Category::all() as $cat)
    <a href="{{route('product.list',[$cat->slug])}}"> 
      <button class="btn btn-secondary">{{$cat->name}}</button>
    </a>
  @endforeach

  <div class="album py-5 bg-light">
    <div class="container">
    <h2>Products</h2>
    <br>
        <div class="row">
        @foreach($products as $product)
        <div class="col-md-4" style="z-index: 1;">
          <div class="card mb-4 shadow-sm">
          <img src="{{Storage::url($product->image)}}" height="200" style="width: 100%" >
            <div class="card-body">
            <p><b>{{$product->name}}</b></p>
              <p class="card-text">
                  {{(Str::limit($product->description,100))}}
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="product/{{$product->id}}">
                 <button type="button" class="btn btn-sm btn-outline-success">View</button>
                </a>
                <a href="{{route('add.cart',[$product->id])}}">
                  <button type="button" class="btn btn-sm btn-outline-primary">Add to Cart</button>
                </a>
                </div>
                <small class="text-muted">${{$product->price}}</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <center>
      <a href="{{route('more.product')}}"><button class="btn btn-success">More Product</button>
      </a>
    </center>
  </div>

  <!-- //Carousel -->

<div class="jumbotron">
       <div id="carouselExampleFade" class="carousel slide " data-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">
     <div class="row">
     @foreach($randomActiveProducts as $product)
     <div class="col-4">
                    <div class="card mb-4 shadow-sm">
            <img src="{{Storage::url($product->image)}}" height="200" style="width: 100%">
            <div class="card-body">
                <p><b>{{$product->name}}</b></p>
              <p class="card-text">
                  {{(Str::limit($product->description,100))}}
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
                <small class="text-muted">${{$product->price}}</small>
              </div>
            </div>
          </div>
        </div>
    @endforeach
     </div>
    </div>

    <div class="carousel-item">
     <div class="row">
     @foreach($randomItemProducts as $product)

    <div class="col-4">
    <div class="card mb-4 shadow-sm">
        <img src="{{Storage::url($product->image)}}" height="200" style="width: 100%">
        <div class="card-body">
            <p><b>{{$product->name}}</b></p>
        <p class="card-text">
            {{(Str::limit($product->description,100))}}
        </p>
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
            <a href="{{route('product.view',[$product->id])}}"> 
            <button type="button" class="btn btn-sm btn-outline-success">View</button>
            </a>
            <a href="{{route('add.cart',[$product->id])}}">
            <button type="button" class="btn btn-sm btn-outline-primary">Add to cart</button></a>
            </div>
            <small class="text-muted">${{$product->price}}</small>
        </div>
        </div>
    </div>
    </div>
    @endforeach
     </div>
    </div>



  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
     </div>

</main>
<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
    
  </div>
</footer>
</div>
@endsection
