@extends('back.layout.footer')
@extends('back.layout.content')
@extends('back.layout.header')
@section('body')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1 style="margin-left: 100px">ADD USER</h1>
            </div>
            <div class="col-12" style="margin-left: 50px">
                <form method="post" action="{{route('user.store')}}">
                    @csrf
                    <div class="form-group col-lg-3">
                        <label>Username</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group col-lg-3">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group col-lg-3">
                        <label>Role</label>
                        <input type="text" class="form-control" name="role" placeholder="Enter user role">
                    </div>
                    <div class="form-group col-lg-3">
                        <label>Phone</label>
                        <input type="number" class="form-control" name="phone" placeholder="Enter phone number">
                    </div>
                    <div class="form-group col-lg-3">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
