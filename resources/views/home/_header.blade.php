@php
    $parentCategories=\App\Http\Controllers\HomeController::categoryList()
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
                                <a href="index.html">
                                    <img src="{{asset('assets')}}/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation" class="w-100">
                                        <li><a href="blog.html">Anasayfa</a>
                                        <li><a class="active" >Kategoriler</a>
                                            <ul class="submenu">
                                                @foreach($parentCategories as $rs)
                                                    <li>
                                                        <a class="active" >{{$rs->title}} <i class="fa fa-angle-double-down float-right" style="font-size: 10pt;"></i></a>
                                                        @if(count($rs->children))
                                                            @include('home.categorytree',['children'=>$rs->children])
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">İletişim</a>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                            <div class="social_wrap d-flex align-items-center justify-content-end">
                                <div class="number">
                                    <p> <i class="fa fa-phone"></i> 10(256)-928 256</p>
                                </div>
                                <div class="social_links d-none d-xl-block">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="seach_icon">
                            <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                <i class="fa fa-search"></i>
                            </a>
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
