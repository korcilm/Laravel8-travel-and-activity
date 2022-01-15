<!-- slider_area_start -->
<div class="slider_area">
    <div class="slider_active owl-carousel">
        @foreach($slider as $rs)
        <div class="single_slider  d-flex align-items-center overlay"  >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-md-12">
                        <div class="slider_text text-center">
                            <span class="text-white font-italic px-5 py-3 " style=" font-size: 30pt; font-weight: bold; line-height: 85%;  opacity: 0.5; background-color: black; border-radius: 10px">{{$rs->title}}</span>
                            <p>{{$rs->city}}</p>
                            <a href="{{route('home_placeDetail',['id'=>$rs->id])}}" class="boxed-btn3 "><span style="opacity: 1">Şimdi Keşfet</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
<!-- slider_area_end -->
