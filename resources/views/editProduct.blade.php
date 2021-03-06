@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Update Product</h3>
        <form action="{{route('updateProduct')}}" method="POST" enctype="multipart/form-data"> 
            @CSRF
            <!-- enctype must be include when upload something -->
            
            @foreach($products as $product)
            <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" class="form-control" id="productName" name="productName" value="{{ ($product->name) }}">
                <input type="hidden" name="productID" id="productID" value="{{ ($product->id) }}">
            </div>
            <div class="form-group">
                <label for="productDescription">Product Description</label>
                <input type="text" class="form-control" id="productDescription" name="productDescription" value="{{ ($product->description) }}">
            </div>
            <div class="form-group">
                <label for="productPrice">Product Price</label>
                <input type="number" class="form-control" id="productPrice" name="productPrice" value="{{ ($product->price) }}">
            </div>
            <div class="form-group">
                <label for="productQuantity">Product Quantity</label>
                <input type="number" class="form-control" id="productQuantity" name="productQuantity" value="{{ ($product->quantity) }}">
            </div>
            <div class="form-group">
                <label for="productImage">Product Image</label><br>
                <img src="{{ asset('images')}}/{{$product->image}}" alt="productImage" class="img-fluid" width="100">
                <input type="file" class="form-control" id="productImage" name="productImage">
            </div>
            <div class="form-group">
                <label for="categoryID">Product Category</label>
                <!--<input type="text" class="form-control" id="categoryID" name="categoryID"> -->
                <select name="CategoryID" id="CategoryID" class="form-control">
                    @foreach($categoryID as $category)
                        <!--show name, pass id when select-->
                        <option value="{{$category->id}}">{{$category->name}}</option>                    
                    @endforeach
                </select>
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection