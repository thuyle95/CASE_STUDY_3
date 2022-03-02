@extends('front.layout.footer')
@extends('front.layout.content')
@extends('front.layout.header')
@section('body')
    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>new arrivals</h4>
                        <h2>sixteen products</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filters">
                        <ul>
                            <li class="item active" data-tag="*" data-category="men">All</li>
                            @foreach($categories as $category)
                            <li class="item" data-tag=".{{$category->name}}" data-category="{{$category->name}}">
                                {{$category->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                            <form method="post" action="">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-md-4">
                                    <div class="product-item">
                                        <a href="#"><img src="{{asset('image/'.$product->image)}}" alt=""></a>
                                        <div class="down-content">
                                            <h6 style="float:right;">${{$product->price}}</h6>
                                            <a href="#"><h4>{{$product->name}}</h4></a>
                                            <h6>${{$product->price}}</h6>
                                            <p>{{$product->desc}}</p>
                                            @csrf
                                            <button type="submit" class="active btn btn-primary" href="#">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                            </form>
                </div>
            </div>
        </div>
    </div>
@endsection



