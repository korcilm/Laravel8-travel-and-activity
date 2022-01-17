@extends('layouts.admin')

@section('title', 'Edit Content')


@section('content')

    <div class="main-content-inner">
        <div class="row">

            <div class="col-lg-12 col-ml-12">
                <div class="row">
                    <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body mx-auto col-8">
                                <h4 class="header-title text-center">Edit User</h4>
                                <form action="{{route('admin_user_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf {{--dışardan birinin bu formu post etmesini engeller--}}
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Name</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="name" class="form-control" value="{{$data->name}}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="email" id="text-input" name="email"  class="form-control" value="{{$data->email}}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Phone</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="phone"  class="form-control" value="{{$data->phone}}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Address</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="address" class="form-control" value="{{$data->address}}">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Image</label></div>
                                        <div class="col-12 col-md-9"><input type="file" name="image"
                                                                            class="form-control"></div>
                                        @if($data->profile_photo_path)
                                            <img src="{{\Illuminate\Support\Facades\Storage::url($data->profile_photo_path)}}" height="200"
                                                 style="border-radius: 10px" alt="">
                                        @endif
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block mt-4 pr-4 pl-4">Update User
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .content -->


@endsection
