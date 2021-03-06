@php
    $parentCategories=\App\Http\Controllers\HomeController::categoryList();
    $setting=\App\Http\Controllers\HomeController::getSetting();
@endphp

<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="{{route('home')}}">
                                    <img src="{{asset('assets')}}/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation" class="w-100">
                                        <li><a href="{{route('home')}}">Anasayfa</a>
                                        <li><a>Gezi ve Aktivite</a>
                                            <ul class="submenu">
                                                @foreach($parentCategories as $rs)
                                                    <li>
                                                        <a>{{$rs->title}} <i class="fa fa-angle-double-right float-right" style="font-size: 10pt;"></i></a>
                                                        @if(count($rs->children))
                                                            @include('home.categorytree',['children'=>$rs->children])
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="{{route('home_aboutus')}}">Hakk??m??zda</a></li>
                                        <li><a href="{{route('home_reference')}}">Referanslar</a></li>
                                        <li><a href="{{route('home_contact')}}">??leti??im</a></li>
                                        <li><a href="{{route('home_faq')}}">SSS</a></li>
                                        @auth
                                            <li class="float-right"> {{\Illuminate\Support\Facades\Auth::user()->name}}
                                                <ul class="submenu">
                                                        <li><a href="{{route('myprofile')}}" >Profilim<i class="fa fa-user-circle float-right" style="font-size: 10pt;"></i></a></li>                                                       </li>
                                                        <li><a href="{{route('mycomments')}}" >Yorumlar??m<i class="fa fa-comment float-right" style="font-size: 10pt;"></i></a></li>                                                       </li>
                                                        <li><a href="{{route('user_content')}}" >????eriklerim<i class="fa fa-map-marker float-right" style="font-size: 10pt;"></i></a></li>                                                       </li>
                                                        <li><a href="{{route('user_attend')}}" >Kat??ld??????m Etkinlikler<i class="fa fa-check-square float-right" style="font-size: 10pt;"></i></a></li>                                                       </li>
                                                        <li><a href="{{route('logout')}}" >????k???? Yap<i class="fa fa-sign-out float-right" style="font-size: 10pt;"></i></a></li>                                                       </li>
                                                </ul>
                                            </li>
                                        @endauth
                                        @guest
                                            <li class="float-right">
                                                <a href="{{route('admin_login')}}">Giri?? Yap </a> /
                                                <a href="{{route('register')}}">Kaydol</a>
                                            </li>
                                        @endguest


                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                            <div class="social_wrap d-flex align-items-center justify-content-end">
                                <div class="number">
                                    <p> <i class="fa fa-phone"></i> {{$setting->phone}}</p>
                                </div>
                                <div class="social_links d-none d-xl-block">
                                    <ul>
                                        <li><a href="{{$setting->instagram}}"> <i class="fa fa-instagram"></i> </a></li>
                                        <li><a href="{{$setting->twitter}}"> <i class="fa fa-twitter"></i> </a></li>
                                        <li><a href="{{$setting->facebook}}"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="{{$setting->email}}"> <i class="fa fa-google-plus"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->
