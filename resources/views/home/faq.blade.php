@extends('layouts.home')
@section('title','Hakkımızda - '. $setting->title)
@section('description')
    {{$setting->description}}
@endsection
@section('keywords',$setting->keywords)

@section('content')

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Frequently Asked Questions </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <div class="about_story">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center ">Sıkça Sorulan Sorular</h1>
                    <div class="row">
                        <div class="col-lg-11 offset-lg-1">
                            <div class="story_info">
                                <div class="row">

                                    <div class="col-lg-12 mt-2">
                                        @php
                                            $counter=1;
                                        @endphp
                                        @foreach($datalist as $rs)
                                            <h3> {{$counter++ ." . ". $rs->question}}</h3>
                                           <p> {!! $rs->answer !!}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="story_thumb">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="thumb padd_1">
                                            <img src="{{asset('assets')}}img/about/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="thumb">
                                            <img src="{{asset('assets')}}img/about/2.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="counter_wrap">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single_counter text-center">
                                            <h3  class="counter">378</h3>
                                            <p>Tour has done successfully</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single_counter text-center">
                                            <h3 class="counter">30</h3>
                                            <p>Yearly tour arrange</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single_counter text-center">
                                            <h3 class="counter">2263</h3>
                                            <p>Happy Clients</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
