@extends('back.layout.footer')
@extends('back.layout.content')
@extends('back.layout.header')
@section('body')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1 style="margin-left: 100px">UPDATE CATEGORY</h1>
            </div>
            <div class="col-12" style="margin-left: 50px">
                <form method="post" action="{{route('category.update',$category->id)}}">
                    @csrf
                    <div class="form-group col-lg-3">
                        <label>Category name</label>
                        <input type="text" class="form-control" name="name" value="{{$category->name}}">
                    </div>
                    @method('PUT')
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
                </form>
            </div>
        </div>
    </div>
@endsection
