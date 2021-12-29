@extends('layouts.home')
@section('title','Referanslar - '.$setting->title)
@section('description')
    {{$setting->description}}
@endsection
@section('keywords',$setting->keywords)
@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>References</h3>
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
                    <div class="row">
                        <div class="col-lg-11 offset-lg-1">
                            <div class="story_info">
                                <div class="row">
                                    <div class="col-lg-9 ml-5">
                                        {!! $setting->references !!}
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
