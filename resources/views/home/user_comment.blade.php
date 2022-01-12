@extends('layouts.home')

@section('content')
    <div class="container py-5" style="max-width: 1600px;">
        <div class="row">
            <div class="col-3">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
                    <a href="/"
                       class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                        <span class="fs-4 lead">Profil</span>
                    </a>
                    <hr>
                    <ul class="mt-5 nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="{{route('myprofile')}}" class="nav-link link-dark" aria-current="page">
                                <i class="fa fa-user-circle mr-2"></i>
                                Profilim
                            </a>
                        </li>
                        <li>
                            <a href="{{route('mycomments')}}" class="nav-link active">
                                <i class="fa fa-comment mr-2"></i>
                                Yorumlarım
                            </a>
                        </li>
                        <li>
                            <a href="{{route('logout')}}" class="nav-link link-dark">
                                <i class="fa fa-sign-out mr-2"></i>
                                Çıkış Yap
                            </a>
                        </li>

                    </ul>
                    <hr>
                </div>
            </div>
            <div class="col-9">
                <table class="table  table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Yer</th>
                        <th>Yorum</th>
                        <th>Yıldız</th>
                        <th>Durum</th>
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
                            <td>{{$rs->status}}</td>
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

@endsection
