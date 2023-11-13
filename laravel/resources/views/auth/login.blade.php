<x-guest-layout>
    <!-- Session Status -->
    

    <div class="content-wrapper full-page-wrapper d-flex align-items-center auth lock-full-bg">
        <div class="card col-10 col-sm-8 col-xl-4 mx-auto">
            <div class="card-header">
                <h2 class="card-title text-center">Animashit Studio</h2>
            </div>
            <div class="card-body">
                <h3 class="card-title text-center mb-3">Login</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <x-input-label for="email" :value="__('Username or email *')" />
                        <x-text-input id="email" class="form-control p_input" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="form-control p_input" type="password" name="password"
                            required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between">
                        {{-- <div class="form-check">
                            <label class="form-check-label">
                                <input id="remember_me" type="checkbox"
                                    class="form-check-input"
                                    name="remember">
                                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                            </label>
                        </div> --}}

                        @if (Route::has('password.requestx'))
                            <a class="forgot-pass" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                    <div class="text-center">
                        <x-primary-button class="ml-3 btn btn-primary btn-block">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
</x-guest-layout>
