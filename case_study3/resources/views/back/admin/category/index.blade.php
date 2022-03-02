@extends('back.layout.footer')
@extends('back.layout.content')
@extends('back.layout.header')
@section('title')
    Category
@endsection
@section('page')
    Category Manage
@endsection
@section('body')

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <div class="col-md-8 col-lg-12">
                    <!-- MAP & BOX PANE -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Categories list</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        @if ($message = \Illuminate\Support\Facades\Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="card-body p-0">
                            <div class="card-body">
                                <table class="table" id="datatablesSimple">
                                    <thead style="text-align:center;">
                                    <tr>
                                        <th>ID</th>
                                        <th>Categories name</th>
                                        <th><a style="color:white" href="{{route('category.create')}}" class="btn btn-primary">Add Category</a></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td style="text-align:center;">{{$category->id}}</td>
                                            <td style="text-align:center;">{{$category->name}}</td>
                                            <td style="text-align:center;"><form action="{{route('category.destroy', $category->id)}}" method="post">
                                            <a href="{{route('category.edit',$category->id)}}" type="button" class="btn btn-primary">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <!-- end foreach -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="p-1 flex-fill" style="overflow: hidden">
                                <div id="world-map-markers" style="height: 325px; overflow: hidden">
                                    <div class="map"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <aside class="control-sidebar control-sidebar-dark">
    </aside>
@endsection
