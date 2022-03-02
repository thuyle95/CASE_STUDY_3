@extends('back.layout.footer')
@extends('back.layout.content')
@extends('back.layout.header')
@section('body')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1 style="margin-left: 100px">UPDATE USER</h1>
            </div>
            <div class="col-12" style="margin-left: 50px">
                <form method="post" action="{{route('user.update',$user->id)}}">
                    @csrf
                    <div class="form-group col-lg-3">
                        <label>Username</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{$user->name}}">
                    </div>
                    <div class="form-group col-lg-3">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter email" value="{{$user->email}}">
                    </div>
                    <div class="form-group col-lg-3">
                        <label>Role</label>
                        <input type="text" class="form-control" name="role" placeholder="Enter user role" value="{{$user->role}}">
                    </div>
                    <div class="form-group col-lg-3">
                        <label>Phone</label>
                        <input type="number" class="form-control" name="phone" placeholder="Enter phone number" value="{{$user->phone}}">
                    </div>
                    <div class="form-group col-lg-3">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{$user->password}}">
                    </div>
                    @method('PUT')
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
                </form>
            </div>
        </div>
    </div>
@endsection
