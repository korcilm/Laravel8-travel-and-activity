@extends('layouts.admin')
@section('title','Edit Content')
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
                                <h4 class="header-title text-center">Edit Content</h4>
                                <form method="post" action="{{route('admin_content_update',['id'=>$data->id])}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label >Parent</label>
                                        <select class="form-control" name="category_id">
                                            @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}"  @if($rs->id==$data->category_id) selected="selected" @endif  >{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label >Type</label>
                                        <input type="text" class="form-control" value="{{$data->type}}" name="type" >
                                    </div>
                                    <div class="form-group">
                                        <label >Title</label>
                                        <input type="text" class="form-control" value="{{$data->title}}"  name="title" >
                                    </div>
                                    <div class="form-group">
                                        <label >Keywords</label>
                                        <input type="text" class="form-control" value="{{$data->keywords}}"  name="keywords" >
                                    </div>
                                    <div class="form-group">
                                        <label >Description</label>
                                        <input type="text" class="form-control" value="{{$data->description}}"  name="description" >
                                    </div>
                                    <div class="form-group">
                                        <label >Image</label>
                                        <input type="file" class="form-control mb-2" value="{{$data->image}}"  name="image" >

                                        @if($data->image)
                                            <img src="{{Storage::url($data->image) }}" height="200" width="200" alt="">
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label >City</label>
                                        <input type="text" class="form-control" value="{{$data->city}}"  name="city" >
                                    </div>
                                    <div class="form-group">
                                        <label >Country</label>
                                        <input type="text" class="form-control" value="{{$data->country}}"  name="country" >
                                    </div>
                                    <div class="form-group">
                                        <label >Location</label>
                                        <input type="text" class="form-control" value="{{$data->location}}" name="location" >
                                    </div>
                                    <div class="form-group">
                                        <label >Detail</label>
                                        <textarea name="detail" id="editor" class="form-control" cols="30" rows="10">{{$data->detail}}</textarea>
                                        <script>
                                            CKEDITOR.replace( 'editor' );
                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label >Status</label>
                                        <select class="form-control" name="status" value="{{$data->status}}" >
                                            <option selected="selected">{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block mt-4 pr-4 pl-4">Update Content</button>
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
