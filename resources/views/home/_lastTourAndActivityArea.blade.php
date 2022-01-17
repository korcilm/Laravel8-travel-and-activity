
<div class="popular_places_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb_70">
                    <h3>Yeni Gezi ve Aktiviteler</h3>
                    <p>En yeni düzenlenecek gezi ve aktivitelere göz atın</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($lastTourAndActivity as $rs)
            <div class="col-lg-4 col-md-6">
                <div class="single_place">
                    <div class="thumb">
                        <img src="{{Storage::url($rs->image)}}" width="362" height="204" alt="">
                    </div>
                    <div class="place_info">
                        <a href="{{route('home_placeDetail',['id'=>$rs->id])}}"><h3>{{$rs->title}}</h3></a>

                        <div class="rating_days d-flex justify-content-between">
                            <p>{{$rs->city}} / {{$rs->country}}</p>
                            <div class="days">
                                <i class="fa fa-clock-o"></i>
                                <span>5 Days</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
