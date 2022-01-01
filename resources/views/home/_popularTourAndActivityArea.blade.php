<!-- popular_destination_area_start  -->
<div class="popular_destination_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb_70">
                    <h3>Popüler Gezi ve Aktiviteler</h3>
                    <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($popularTourAndActivity as $rs)
            <div class="col-lg-4 col-md-6">
                <div class="single_destination">
                    <div class="thumb">
                        <img src="{{Storage::url($rs->image)}}" width="362" height="270" alt="">
                    </div>
                    <div class="content">
                        <p class="d-flex align-items-center">{{$rs->title}}  <a href="travel_destination.html">  07 Places</a> </p>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- popular_destination_area_end  -->
