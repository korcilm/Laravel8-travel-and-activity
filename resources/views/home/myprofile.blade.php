@extends('layouts.home')

@section('content')


    <div class="container-fluid" style="margin-top:5%">
        <div class="container" style="max-width: 1600px;">
            <div class=" row col-md-12">
                <div class="col-lg-3 col-md-3">
                    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
                        <a href="/"
                           class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">

                            <span class="fs-4 lead">Profil</span>
                        </a>
                        <hr>
                        <ul class="mt-5 nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                                <a href="{{route('myprofile')}}" class="nav-link active" aria-current="page">
                                    <i class="fa fa-user-circle mr-2"></i>
                                    Profilim
                                </a>
                            </li>
                            <li>
                                <a href="{{route('mycomments')}}" class="nav-link link-dark">
                                    <i class="fa fa-comment mr-2"></i>
                                    Mesajlarım
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

                <div class="col-lg-9 col-md-9 ">
                    @include('profile.show')
                </div>

            </div><!-- /.row -->
        </div>
    </div>



@endsection

