@php
    $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-md-6 col-lg-2">
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Menü
                        </h3>
                        <ul class="links">
                            <li><a href="{{route('home')}}">Anasayfa</a>
                            <li><a href="{{route('home_aboutus')}}">Hakkımızda</a></li>
                            <li><a href="{{route('home_reference')}}">Referanslar</a></li>
                            <li><a href="{{route('home_contact')}}">İletişim</a></li>
                            <li><a href="{{route('home_faq')}}">SSS</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Popüler Ülkeler
                        </h3>
                        <ul class="links double_links">
                            <li><a href="#">Turkey</a></li>
                            <li><a href="#">America</a></li>
                            <li><a href="#">India</a></li>
                            <li><a href="#">Switzerland</a></li>
                            <li><a href="#">Italy</a></li>
                            <li><a href="#">Canada</a></li>
                            <li><a href="#">Franch</a></li>
                            <li><a href="#">England</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Contact
                        </h3>
                        <p>{{$setting->address}}<br>
                            <a href="#"><i class="fa mr-2 fa-phone"></i>{{$setting->phone}}</a> <br>
                            <a href="#"><i class="fa mr-2 fa-mail-forward"></i>{{$setting->email}}</a>
                        </p>
                        <div class="socail_links">
                            <ul>
                                @if($setting->facebook!=null)
                                    <li>
                                        <a href="{{$setting->facebook}}">
                                            <i class="fa fa-2x fa-facebook-square"></i>
                                        </a>
                                    </li>
                                @endif
                                @if($setting->twitter!=null)
                                    <li>
                                        <a href="{{$setting->twitter}}">
                                            <i class="fa fa-2x fa-twitter-square"></i>
                                        </a>
                                    </li>
                                @endif
                                @if($setting->instagram!=null)
                                    <li>
                                        <a href="{{$setting->instagram}}">
                                            <i class="fa fa-2x fa-instagram"></i>
                                        </a>
                                    </li>
                                @endif

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        {{$setting->company}} &copy;<script>document.write(new Date().getFullYear());</script>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="serch_form">
                <input type="text" placeholder="Search">
                <button type="submit">search</button>
            </div>
        </div>
    </div>
</div>
<!-- link that opens popup -->
<!--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> -->
<!-- JS here -->
<script src="{{asset('assets')}}/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="{{asset('assets')}}/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{asset('assets')}}/js/popper.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/isotope.pkgd.min.js"></script>
<script src="{{asset('assets')}}/js/ajax-form.js"></script>
<script src="{{asset('assets')}}/js/waypoints.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.counterup.min.js"></script>
<script src="{{asset('assets')}}/js/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('assets')}}/js/scrollIt.js"></script>
<script src="{{asset('assets')}}/js/jquery.scrollUp.min.js"></script>
<script src="{{asset('assets')}}/js/wow.min.js"></script>
<script src="{{asset('assets')}}/js/nice-select.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.slicknav.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets')}}/js/plugins.js"></script>
<script src="{{asset('assets')}}/js/gijgo.min.js"></script>
<script src="{{asset('assets')}}/js/slick.min.js"></script>


<!--contact js-->
<script src="{{asset('assets')}}/js/contact.js"></script>
<script src="{{asset('assets')}}/js/jquery.ajaxchimp.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.form.js"></script>
<script src="{{asset('assets')}}/js/jquery.validate.min.js"></script>
<script src="{{asset('assets')}}/js/mail-script.js"></script>


<script src="{{asset('assets')}}/js/main.js"></script>
<script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }
    });
</script>
