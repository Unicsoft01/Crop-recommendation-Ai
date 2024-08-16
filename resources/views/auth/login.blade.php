<x-guest-layout>
    <h4 class="text-dark mb-5">Login to Continue!</h4>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row">
            <div class="form-group col-md-12 mb-4">
                <input type="email" name="email" :value="old('email')" required autofocus autocomplete="email"
                    class="form-control" id="email" placeholder="Valid Email only">
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger text-center" />
            </div>

            <div class="form-group col-md-12 ">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password"
                    required autocomplete="current-password">
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger text-center" />
            </div>

            <div class="col-md-12">
                <div class="d-flex my-2 justify-content-between">
                    <div class="d-inline-block mr-3">
                        <div class="control control-checkbox">Remember me
                            <input type="checkbox" id="remember_me" name="remember" />
                            <div class="control-indicator"></div>
                        </div>
                    </div>

                    <p>
                        @if (Route::has('password.request'))
                            <a class="text-blue" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </p>
                </div>

                <x-comp.sec-button>
                    {{ __('Log in') }}
                </x-comp.sec-button>

                <p class="sign-upp">Don't have an account yet ?
                    <a class="text-blue" href="register">Sign Up</a>
                </p>
            </div>
        </div>
    </form>
</x-guest-layout>
