<x-guest-layout>
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <x-jet-validation-errors class="mb-4" />
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="login-form-head">
                        <h4>Reset Password</h4>
                        <p>Parolanızı mı unuttunuz? Sorun yok. Sadece e-posta adresinizi bize bildirin.</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="email" value="{{ __('Email') }}">E-Posta</label>
                            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus>
                            <i class="ti-lock"></i>
                        </div>

                        <div class="submit-btn-area mt-5">
                            <button id="form_submit" type="submit">Sıfırla <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
