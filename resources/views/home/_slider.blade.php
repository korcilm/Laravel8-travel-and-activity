<!-- slider_area_start -->
<div class="slider_area">
    <div class="slider_active owl-carousel">
        @foreach($slider as $rs)
        <div class="single_slider  d-flex align-items-center overlay" style="background-image: url('{{Storage::url($rs->image)}}');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-md-12">
                        <div class="slider_text text-center">
                            <h3 style="line-height: 85%">{{$rs->title}}</h3>
                            <p>{{$rs->city}}</p>
                            <a href="{{route('home_placeDetail',['id'=>$rs->id])}}" class="boxed-btn3">Şimdi Keşfet</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
<!-- slider_area_end -->
