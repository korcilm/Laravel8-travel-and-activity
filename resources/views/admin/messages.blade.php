<?php
use Illuminate\Support\Facades\Storage;
?>
@extends('layouts.admin')
@section('title','Contact Message List')
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
                                @include('home.message')
                                <!-- Progress Table start -->
                                <div class="col-12 mt-5">
                                    <div class="card " style="box-shadow: 0.5rem 0.5rem black, -0.5rem -0.5rem #ccc;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8"><h4 class="header-title">Message List</h4></div>
                                            </div>
                                            <div class="single-table">
                                                <div class="table-responsive">
                                                    <table class="table table-hover progress-table text-center">
                                                        <thead class="text-uppercase">
                                                        <tr>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Phone</th>
                                                            <th scope="col">Subject</th>
                                                            <th scope="col">Message</th>
                                                            <th scope="col">Admin Message</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Show</th>
                                                            <th scope="col">action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($datalist as $rs)
                                                            <tr>
                                                                <th scope="row">{{$rs->id}}</th>
                                                                <td>{{$rs->name}}</td>
                                                                <td>{{$rs->email}}</td>
                                                                <td>{{$rs->phone}}</td>
                                                                <td>{{$rs->subject}}</td>
                                                                <td>{{$rs->message}}</td>
                                                                <td>{{$rs->note}}</td>
                                                                <td>{{$rs->status}}</td>
                                                                <td><a href="{{route('admin_message_edit',['id'=>$rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100, width=900, height=700')" class="text-secondary"><i class="fa fa-file-text"></i></a></td>
                                                                <td>
                                                                    <ul class="d-flex justify-content-center">
                                                                        <li><a href="{{route('admin_message_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')" class="text-danger"><i class="ti-trash "></i></a></li>
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
