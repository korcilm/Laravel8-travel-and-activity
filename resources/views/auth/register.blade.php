<x-guest-layout>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area login-bg">
        <div class="container">
            <div class="login-box ptb--100">
                <x-jet-validation-errors class="mb-4" />
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="login-form-head">
                        <h4>Kayıt Paneli</h4>
                        <p>Merhaba oradaki, Kaydol ve bize katıl</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="name" value="{{ __('Name') }}" >Ad Soyad</label>
                            <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                            <i class="ti-user"></i>
                        </div>
                        <div class="form-gp">
                            <label for="email" value="{{ __('Email') }}">E-Posta</label>
                            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required>
                            <i class="ti-email"></i>
                        </div>
                        <div class="form-gp">
                            <label for="password" value="{{ __('Password') }}">Parola</label>
                            <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" >
                            <i class="ti-lock"></i>
                        </div>
                        <div class="form-gp">
                            <label for="password_confirmation" value="{{ __('Confirm Password') }}">Parola Onayı</label>
                            <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" >
                            <i class="ti-lock"></i>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Kaydol <i class="ti-arrow-right"></i></button>

                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Zaten hesabın var mı? <a href="{{ route('login') }}">Giriş Yap</a></p>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->
</x-guest-layout>
