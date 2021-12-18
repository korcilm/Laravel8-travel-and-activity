
<x-guest-layout>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->


    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <!-- login area start -->
    <div class="login-area login-bg" >
        <div class="container">
            <div class="login-box ptb--100">
                <x-jet-validation-errors class="mb-4" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="login-form-head">
                        <h4>Admin Paneli</h4>
                        <p>Merhaba, Oturum açın ve sitenizi yönetmeye başlayın</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="email" value="{{ __('Email') }}">E-Posta</label>
                            <input id="email"  type="email" name="email" :value="old('email')" required autofocus >
                            <i class="ti-email"></i>
                        </div>
                        <div class="form-gp">
                            <label for="password" value="{{ __('Password') }}">Parola</label>
                            <input id="password"  type="password" name="password" required autocomplete="current-password">
                            <i class="ti-lock"></i>
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <x-jet-checkbox id="remember_me"  class="custom-control-input" name="remember" />
                                    <input type="checkbox" class="custom-control-input" id="remember_me" name="remember">
                                    <label class="custom-control-label" for="remember_me">Beni Hatırla</label>
                                </div>
                            </div>
                            @if (Route::has('password.request'))
                                <div class="col-6 text-right">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        Şifremi unuttum
                                    </a>
                                </div>
                            @endif
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Giriş Yap <i class="ti-arrow-right"></i></button>
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Hesabınız yok mu? <a href="{{ route('register') }}">Kaydol</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->
</x-guest-layout>


