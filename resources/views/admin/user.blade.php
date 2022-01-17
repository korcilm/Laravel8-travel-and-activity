<?php
use Illuminate\Support\Facades\Storage;
?>
@extends('layouts.admin')
@section('title','User List')

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
                                                <div class="col-md-8"><h4 class="header-title">User List</h4></div>

                                            </div>
                                            <div class="single-table">
                                                <div class="table-responsive">
                                                    <table class="table table-hover progress-table text-center">
                                                        <thead class="text-uppercase">
                                                        <tr>
                                                            <th scope="col">ID</th>
                                                            <th scope="col"></th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Phone</th>
                                                            <th scope="col">Address</th>
                                                            <th scope="col">Roles</th>
                                                            <th scope="col">action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($datalist as $rs)
                                                            <tr>
                                                                <th scope="row">{{$rs->id}}</th>
                                                                <td>
                                                                    @if($rs->profile_photo_path)
                                                                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->profile_photo_path)}}"  alt="" style="height: 70px!important; width: 60px!important;">
                                                                    @endif
                                                                </td>
                                                                <td>{{$rs->name}}</td>
                                                                <td>{{$rs->email}}</td>
                                                                <td>{{$rs->phone}}</td>
                                                                <td>{{$rs->phone}}</td>
                                                                <td>{{$rs->address}}</td>
                                                                <td>
                                                                    @foreach($rs->roles as $row)
                                                                        {{$row->name}} ,
                                                                    @endforeach
                                                                        <a href="{{route('admin_user_roles',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=100 left=300 width=800 height=600 ')">
                                                                            <i class="fa fa-plus-circle"></i>
                                                                        </a>
                                                                </td>

                                                                <td>
                                                                    <ul class="d-flex justify-content-center">
                                                                        <li class="mr-3"><a href="{{route('admin_user_edit',['id'=>$rs->id])}}"  class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                                        <li><a href="{{route('admin_user_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')" class="text-danger"><i class="ti-trash "></i></a></li>
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
