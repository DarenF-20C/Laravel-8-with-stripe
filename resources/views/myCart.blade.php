@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr style="text-align: center; font-weight: bold;">
                    <td>Image</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                    <td>Action</td>
                </tr>
            </thead>

            <tbody>
                @foreach($carts as $cart)
                <tr style="text-align: center;">
                    <td><input type="hidden" name="cid" value="{{$cart->cid}}">
                    <img src="{{ asset('images/'.$cart->image) }}" alt="product image" title="product image" width="100" class="img-fluid"></td>
                    <td>{{$cart->name}}</td>
                    <td>{{$cart->price}}</td>
                    <td>{{$cart->cartQTY}}</td>
                    <td>RM {{$cart->price*$cart->cartQTY}}</td>
                    <td><a href="{{ route('delete.cart.item',['id'=>$cart->cid]) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you confirm to delete {{$cart->name}}?')">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br><br>
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection