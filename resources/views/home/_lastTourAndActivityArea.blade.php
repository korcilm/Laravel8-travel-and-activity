
<div class="popular_places_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb_70">
                    <h3>Son Gezi ve Aktiviteler</h3>
                    <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($lastTourAndActivity as $rs)
            <div class="col-lg-4 col-md-6">
                <div class="single_place">
                    <div class="thumb">
                        <img src="{{Storage::url($rs->image)}}" width="362" height="204" alt="">
                        <a href="#" class="prise">$500</a>
                    </div>
                    <div class="place_info">
                        <a href="destination_details.html"><h3>{{$rs->title}}</h3></a>
                        <p>{{$rs->city}} / {{$rs->country}}</p>
                        <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <a href="#">(20 Review)</a>
                                </span>
                            <div class="days">
                                <i class="fa fa-clock-o"></i>
                                <a href="#">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="more_place_btn text-center">
                    <a class="boxed-btn4" href="#">More Places</a>
                </div>
            </div>
        </div>
    </div>
</div>
