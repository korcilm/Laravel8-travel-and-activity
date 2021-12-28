@extends('layouts.home')

@section('content')


    <div class="container" style="margin-top:5%">
        <div class="card">
            <div class=" row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
                        <a href="/"
                           class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">

                            <span class="fs-4 lead">Profil</span>
                        </a>
                        <hr>
                        <ul class="mt-5 nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link active" aria-current="page">
                                    <i class="fa fa-user-circle mr-2"></i>
                                    Profilim
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link link-dark">
                                    <i class="fa fa-comment mr-2"></i>
                                    Mesajlarım
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link link-dark">
                                    <i class="fa fa-sign-out mr-2"></i>
                                    Çıkış Yap
                                </a>
                            </li>

                        </ul>
                        <hr>
                    </div>
                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">
                    @include('profile.show')
                </div>

            </div><!-- /.row -->
        </div>

    </div><!-- /.container -->



@endsection

