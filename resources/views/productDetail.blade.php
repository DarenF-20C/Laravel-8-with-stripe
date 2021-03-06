@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
        <div class="card-body">
            <div class="row">
                <form action="{{route('add.to.cart')}}" method="POST">
                @CSRF    
                    @foreach($products as $product)
                    <div class="col-md-3"> <!--Image-->
                        <h5 class="card-title">{{$product->name}}<h5>
                        <input type="hidden" name="productID" value="{{$product->id}}"> <!--for passing-->    
                        <img src="{{asset('images/')}}/{{$product->image}}" alt="" width="100%" class="img-fluid">    
                    </div>
                    <div class="col-md-9"> <!--Content-->
                        <br><br>
                        <p class="card-text">{{$product->description}}</p>
                        <div class="card-heading">Quantity: <input type="number" min="1" max="{{$product->quantity}}" name="quantity"><br>Available: {{$product->quantity}}</div> <br><br>
                        <div class="card-heading">RM {{$product->price}}</div>
                        <button class="btn btn-danger btn-xs" type="submit">Add to Cart</button>
                    </div> 
                    @endforeach
                </form>    
            </div>
        </div>
    </div>    
</div>
@endsection