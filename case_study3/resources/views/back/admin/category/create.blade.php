@extends('back.layout.footer')
@extends('back.layout.content')
@extends('back.layout.header')
@section('body')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1 style="margin-left: 100px">ADD CATEGORY</h1>
            </div>
            <div class="col-12" style="margin-left: 50px">
                <form method="post" action="{{route('category.store')}}">
                    @csrf
                    <div class="form-group col-lg-3">
                        <label>Category name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
