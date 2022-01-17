@extends('layouts.home')

@section('content')
    <div class="container py-5" style="max-width: 1600px;">
        <div class="row">
            @include('home.user_menu')
            <div class="col-md-10 ">
                <div class="card ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8"><h4 class="header-title">İçeriklerim</h4></div>
                            <div class="col-md-4 text-right"><a href="{{route('user_content_add')}}"  class="btn btn-outline-primary mb-2 ">İçerik Ekle</a>
                            </div>

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
                                            <td>{{$rs->location}}</td>
                                            <td>
                                                @if($rs->image)
                                                    <img src="{{Storage::url($rs->image) }}" height="70" width="70"
                                                         alt="">
                                                @endif
                                            </td>
                                            <td><a href="{{route('user_image_add',['content_id'=>$rs->id])}}"
                                                   onclick="return !window.open(this.href, '','top=50 left=100, width=900, height=700')"
                                                   class="text-secondary"><i class="fa fa-image"></i></a></td>
                                            <td>{{$rs->status}}</td>
                                            <td>
                                                <ul class="d-flex justify-content-center">
                                                    <li class="mr-3"><a
                                                            href="{{route('user_content_edit',['id'=>$rs->id])}}"
                                                            class="text-secondary"><i class="fa fa-edit"></i></a>
                                                    </li>
                                                    <li><a href="{{route('user_content_delete',['id'=>$rs->id])}}"
                                                           onclick="return confirm('Delete ! Are you sure?')"
                                                           class="text-danger"><i class="ti-trash "></i></a></li>
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
        </div>
    </div>

@endsection
