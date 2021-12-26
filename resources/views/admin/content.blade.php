<?php
use Illuminate\Support\Facades\Storage;
?>
@extends('layouts.admin')
@section('title','Content List')
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
                        <div class="card ">
                            <div class="card-body popup_box">
                                <!-- Progress Table start -->
                                <div class="col-12 mt-5">
                                    <div class="card " style="box-shadow: 0.5rem 0.5rem black, -0.5rem -0.5rem #ccc;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8"><h4 class="header-title">Content List</h4></div>
                                                <div class="col-md-4 text-right"><a href="{{route('admin_content_add')}}" class="btn btn-outline-primary mb-2 ">Add Content</a></div>

                                            </div>
                                            <div class="single-table">
                                                <div class="table-responsive">
                                                    <table class="table table-hover progress-table text-center">
                                                        <thead class="text-uppercase">
                                                        <tr>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">Category</th>
                                                            <th scope="col">Type</th>
                                                            <th scope="col">Title</th>
                                                            <th scope="col">Keywords</th>
                                                            <th scope="col">Description</th>
                                                            <th scope="col">Detail</th>
                                                            <th scope="col">City/Country</th>
                                                            <th scope="col">Location</th>
                                                            <th scope="col">Image</th>
                                                            <th scope="col">Image Gallery</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($datalist as $rs)
                                                            <tr>
                                                                <th scope="row">{{$rs->id}}</th>
                                                                <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                                                <td>{{$rs->type}}</td>
                                                                <td>{{$rs->title}}</td>
                                                                <td>{{$rs->keywords}}</td>
                                                                <td>{{$rs->description}}</td>
                                                                <td>{{$rs->detail}}</td>
                                                                <td>{{$rs->city}} / {{$rs->country}}</td>
                                                                <td>{{$rs->location}}</td>
                                                                <td>
                                                                    @if($rs->image)
                                                                        <img src="{{Storage::url($rs->image) }}" height="70" width="70" alt="">
                                                                    @endif
                                                                </td>
                                                                <td><a href="{{route('admin_image_add',['content_id'=>$rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100, width=900, height=700')" class="text-secondary"><i class="fa fa-image"></i></a></td>
                                                                <td>{{$rs->status}}</td>
                                                                <td>
                                                                    <ul class="d-flex justify-content-center">
                                                                        <li class="mr-3"><a href="{{route('admin_content_edit',['id'=>$rs->id])}}"  class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                                        <li><a href="{{route('admin_content_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')" class="text-danger"><i class="ti-trash "></i></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Progress Table end -->

                            </div>
                        </div>
                    </div>
                    <!-- basic form end -->

                </div>
            </div>
        </div>
    </div>

@endsection
