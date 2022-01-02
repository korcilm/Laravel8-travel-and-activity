<!-- where_togo_area_start  -->
<div class="where_togo_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="form_area">
                    <h3>Nereye gitmek istersiniz?</h3>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="search_wrap">
                    <form action="{{route('getplace')}}" class="search_form" method="post">
                        @csrf
                        @livewire('search')

                        <div class="search_btn">
                            <button class="boxed-btn4 " type="submit" >Ara</button>
                        </div>
                    </form>
                    @livewireScripts
                </div>
            </div>
        </div>
    </div>
</div>
<!-- where_togo_area_end  -->
