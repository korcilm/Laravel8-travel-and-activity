@extends('layouts.home')

@section('content')


    <div class="container py-5" style="max-width: 1600px;">
        <div class="row">
            @include('home.user_menu')
            <div class="col-md-10 ">
                <div class="card ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8"><h4 class="header-title">Profilim</h4></div>
                        </div>

                        </div>
                        <div class="single-table">
                            <div class="table-responsive">
                                @include('profile.show')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection


{{--
<div class="col-md-2">
    <div class="card bg-light">
        <a href="/"
           class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <h3 class="p-2">Profil</h3>
        </a>

        <ul class="text-white list-group">
            <li class=" list-group-item active">
                <a href="{{route('myprofile')}}"  aria-current="page" class=" text-white">
                    <i class="fa fa-user-circle mr-2"></i>
                    Profilim
                </a>
            </li>
            <li class="list-group-item ">
                <a href="{{route('mycomments')}}" class=" text-dark" >
                    <i class="fa fa-comment mr-2"></i>
                    Yorumlarım
                </a>
            </li>
            <li class="list-group-item ">
                <a href="{{route('user_content')}}" class=" text-dark">
                    <i class="fa fa-comment mr-2"></i>
                    İçeriklerim
                </a>
            </li>
            <li class="list-group-item ">
                <a href="{{route('logout')}}" class="text-dark">
                    <i class="fa fa-sign-out mr-2"></i>
                    Çıkış Yap
                </a>
            </li>

        </ul>
    </div>
</div>--}}
