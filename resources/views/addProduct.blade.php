@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Add New Product</h3>
        <form action="{{route('addProduct')}}" method="POST" enctype="multipart/form-data"> 
            @CSRF
            <!-- enctype must be include when upload something -->
            <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" class="form-control" id="productName" name="productName">
            </div>
            <div class="form-group">
                <label for="productDescription">Product Description</label>
                <input type="text" class="form-control" id="productDescription" name="productDescription">
            </div>
            <div class="form-group">
                <label for="productPrice">Product Price</label>
                <input type="number" class="form-control" id="productPrice" name="productPrice">
            </div>
            <div class="form-group">
                <label for="productQuantity">Product Quantity</label>
                <input type="number" class="form-control" id="productQuantity" name="productQuantity">
            </div>
            <div class="form-group">
                <label for="productImage">Product Image</label>
                <input type="file" class="form-control" id="productImage" name="productImage">
            </div>
            <div class="form-group">
                <label for="categoryID">Product Category</label>
                <!--<input type="text" class="form-control" id="categoryID" name="categoryID"> -->
                <select name="CategoryID" id="CategoryID" class="form-control">
                    @foreach($categoryID as $category)
                        <!--show name, pass id-->
                        <option value="{{$category->id}}">{{$category->name}}</option>                    
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection