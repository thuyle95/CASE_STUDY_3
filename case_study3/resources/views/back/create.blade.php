@extends('back.layout.footer')
@extends('back.layout.content')
@extends('back.layout.header')
@section('body')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1 style="margin-left: 100px">ADD PRODUCT</h1>
            </div>
            <div class="col-12" style="margin-left: 50px">
                <form method="post" action="{{route('admin.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-lg-3">
                        <label>Product name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group col-lg-3">
                        <label>Product image</label>
                        <input type="file" name="image">
                    </div>
                    <div class="form-group col-lg-3">
                        <label>Category id</label>
                        <select name="category_id" class="form-control">
                            @foreach($categories as $category)
                            <option class="form-control" value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-lg-3">
                        <label>Quantity</label>
                        <input type="number" class="form-control" name="quantity" placeholder="Enter product quantity">
                    </div>
                    <div class="form-group col-lg-3">
                        <label>Price</label>
                        <input type="number" class="form-control" name="price" placeholder="Enter product price">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Product description</label>
                        <textarea type="text" class="form-control" name="desc" placeholder="Enter product description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
