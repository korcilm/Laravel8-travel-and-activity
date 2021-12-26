@extends('layouts.admin')
@section('title','Category List')
@section('description')
    Türkiye'nin en iyi aktivite sitesi
@endsection
@section('content')
    <div class="main-content-inner">
        <div class="row">

            <div class="col-lg-12 col-ml-12">
                <div class="row">
                    <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body mx-auto col-8">
                                <h4 class="header-title text-center">Edit Category</h4>
                                <form method="post" action="{{route('admin_category_update',['id'=>$data->id])}}">
                                    @csrf
                                    <div class="form-group">
                                        <label >Parent</label>
                                        <select class="form-control" name="parent_id">
                                            <option  value="0" >Main Category</option>
                                            @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}"  @if($rs->id==$data->parent_id) selected="selected" @endif>
                                                    {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label >Title</label>
                                        <input type="text" class="form-control" value="{{$data->title}}" name="title" >
                                    </div>
                                    <div class="form-group">
                                        <label >Keywords</label>
                                        <input type="text" class="form-control" value="{{$data->keywords}}" name="keywords" >
                                    </div>
                                    <div class="form-group">
                                        <label >Description</label>
                                        <input type="text" class="form-control" value="{{$data->description}}" name="description" >
                                    </div>
                                    <div class="form-group">
                                        <label >Status</label>
                                        <select class="form-control" name="status">
                                            <option selected="selected">{{$data->status}}</option>
                                            <option>False</option>
                                            <option>True</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block mt-4 pr-4 pl-4">Update Category</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- basic form end -->

                </div>
            </div>
        </div>
    </div>

@endsection
