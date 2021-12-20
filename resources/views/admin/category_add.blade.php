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
                                <h4 class="header-title text-center">Add Category</h4>
                                <form method="post" action="{{route('admin_category_create')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label >Parent</label>
                                        <select class="form-control" name="parent_id">
                                            <option selected="selected" disabled value="0">Main Category</option>
                                            @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}">{{$rs->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label >Title</label>
                                        <input type="text" class="form-control" name="title" >
                                    </div>
                                    <div class="form-group">
                                        <label >Keywords</label>
                                        <input type="text" class="form-control" name="keywords" >
                                    </div>
                                    <div class="form-group">
                                        <label >Description</label>
                                        <input type="text" class="form-control" name="description" >
                                    </div>
                                    <div class="form-group">
                                        <label >Status</label>
                                        <select class="form-control" name="status">
                                            <option selected="selected">False</option>
                                            <option>True</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block mt-4 pr-4 pl-4">Add Category</button>
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
