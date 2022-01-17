@extends('layouts.home')

@section('content')
    <div class="container py-5" style="max-width: 1600px;">
        <div class="row">
            @include('home.user_menu')
            <div class="col-md-10 ">
                <div class="card ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8"><h4 class="header-title">Yorumlarım</h4></div>


                        </div>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table table-hover progress-table text-center">
                                    <thead class="text-uppercase">
                                    <tr>
                                        <th>Id</th>
                                        <th>Yer</th>
                                        <th>Yorum</th>
                                        <th>Yıldız</th>
                                        <th>Tarih</th>
                                        <th>Sil</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @include('home.message')
                                    @foreach($datalist as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td><a href="{{route('place',['id'=>$rs->content->id])}}"
                                                   target="_blank">{{$rs->content->title}}</a></td>
                                            <td>{{$rs->comment}}</td>
                                            <td>{{$rs->rate}}</td>
                                            <td>{{$rs->created_at}}</td>
                                            <td>
                                                <a href="{{route('admin_comment_delete',['id'=>$rs->id])}}"
                                                   onclick="return confirm('delete Are you sure')">
                                                    <i class="fa fa-trash text-danger"></i>
                                                </a>
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
