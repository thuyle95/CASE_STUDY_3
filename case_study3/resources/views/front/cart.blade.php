@extends('front.layout.footer')
@extends('front.layout.content')
@extends('front.layout.header')
@section('body')

    <div class="container" >
        <div class="card shopping-cart" >
            <div class="card-header bg-dark text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Shopping cart
                <a href="" class="btn btn-outline-info btn-sm pull-right">Continue shopping</a>
                <div class="clearfix"></div>
            </div>
            <div class="card-body" style="margin-top:50px">
                <!-- PRODUCT -->
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-12 col-sm-12 col-md-2 text-center">
                        <img style="margin-bottom: 50px" class="img-responsive" src="{{'image/'.$product->image}}" alt="prewiew" width="150" height="150">
                    </div>
                    <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                        <h4 class="product-name"><strong>{{$product->name}}</strong></h4>
                        <h4>
                            <small>{{$product->desc}}</small>
                        </h4>
                    </div>
                    <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                        <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                            <h6><strong>{{$product->price}}<span class="text-muted">$</span></strong></h6>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4">
                            <div class="quantity">
                                <input  type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty text-center" size="4" >
                            </div>
                        </div>
                        <div class="col-2 col-sm-2 col-md-2 text-right">
                            <button type="button" class="btn btn-outline-danger btn-xs">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    @endforeach
                </div>
                <hr>
                <!-- END PRODUCT -->
                <div class="pull-right">
                    <button type="submit" class="btn btn-outline-secondary pull-right">
                        Update shopping cart
                    </button>
                </div>
            </div>
            <div class="card-footer">
                <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="coupon code">
                        </div>
                        <div class="col-6">
                            <input type="submit" class="btn btn-default" value="Use coupon">
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin: 10px">
                    <a href="" class="btn btn-success pull-right">Checkout</a>
                    <div class="pull-right" style="margin: 5px">
                        Total price: <b></b>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
