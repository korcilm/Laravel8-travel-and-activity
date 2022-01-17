@extends('layouts.home')
@section('title',$data->title)
@section('description')
    {{$data->description}}
@endsection
@section('keywords',$data->keywords)
@section('content')

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            @foreach($dataList as $rs)
                <div class="single_slider  d-flex align-items-center overlay" style="background-image: url('{{Storage::url($rs->image)}}');">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-md-12">
                                <div class="slider_text text-center">
                                    <h3 style="line-height: 85%">{{$data->title}}</h3>
                                    <p>{{$data->city}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

    <section class="blog_area single-post-area section-padding">
        <!-- slider_area_end -->
        <div class="container">@include('home.message')</div>
        <div class=" p-3" style="background-color: #7a83cf!important">
           <div class="container">
               <form action="{{route('user_attend_create',['id'=>$data->id])}}" method="post">
                   @csrf
                   <p class=" text-white">
                       {{$data->title}} etkinliğine katılmak için
                       <button type="submit" class="btn btn-dark px-5  float-right" style="color: white !important; ">Katıl</button>
                   </p>
               </form>
           </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 posts-list">
                    <div class="single-post">
                        <div class="blog_details">
                            <h1 class="text-center pb-3 mb-3">{{$data->title}}</h1>
                            {!! $data->detail !!}

                        </div>
                    </div>
                    <div class="navigation-top">
                        <div class="d-sm-flex justify-content-between text-center">
                            <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                                people like this</p>
                            <div class="col-sm-4 text-center my-2 my-sm-0">
                                <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                            </div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="comments-area">
                        @php
                            $countcomment = \App\Http\Controllers\HomeController::countcomment($data->id);
                        @endphp
                        <h4>{{$countcomment}} Yorum</h4>
                        @foreach($comments as $rs)
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="{{asset('assets')}}/img/comment/comment_1.png" alt="">
                                    </div>
                                    <div class="desc">
                                        <p class="comment">
                                            {{$rs->comment}}
                                        </p>
                                        <div>
                                            @for ($i = $rs->rate; $i >= 1; $i--)
                                                <i class="fa fa-star text-warning"></i>
                                            @endfor
                                            @for ($i = 5-$rs->rate; $i >= 1; $i--)
                                                <i class="fa fa-star "></i>
                                            @endfor

                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#">{{$rs->user->name}}</a>
                                                </h5>
                                                <p class="date">{{$rs->created_at}}</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="comment-form">
                        <h4>Yorum yap</h4>
                        @livewireScripts
                        @livewire('comment',['id'=>$data->id])

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
