@extends('back.layout.footer')
@extends('back.layout.content')
@extends('back.layout.header')
@section('body')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1 style="margin-left: 100px">UPDATE PRODUCT</h1>
            </div>
            <div class="col-12" style="margin-left: 50px">
                <form method="post" action="{{route('admin.update',$product->id)}}">
                    @csrf
                    <div class="form-group col-lg-3">
                        <label>Product name</label>
                        <input type="text" class="form-control" name="name" value="{{$product->name}}">
                    </div>
                    <div class="form-group col-lg-3">
                        <label>Product image link</label>
                        <input type="text" class="form-control" name="image" value="{{$product->image}}" >
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Category id</label>
                        <select name="category_id" >
                            @foreach($categories as $category)
                            <option class="form-control" value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-lg-3">
                        <label>Quantity</label>
                        <input type="number" class="form-control" name="quantity" value="{{$product->quantity}}">
                    </div>
                    <div class="form-group col-lg-3">
                        <label>Price</label>
                        <input type="number" class="form-control" name="price" value="{{$product->price}}">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Product description</label>
                        <input type="text" class="form-control" name="desc" value="{{$product->desc}}">
                    </div>
                    @method('PUT')
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
                </form>
            </div>
        </div>
    </div>
@endsection
