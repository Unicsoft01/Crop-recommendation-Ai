<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row">
            <!-- Name -->

            <div class="form-group col-md-12 mb-4">
                <input type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                    class="form-control" id="name" placeholder="Valid name only">
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger text-center" />
            </div>

            <!-- Email Address -->
            <div class="form-group col-md-12 mb-4">
                <input type="email" name="email" :value="old('email')" required autofocus autocomplete="email"
                    class="form-control" id="email" placeholder="Valid Email only">
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger text-center" />
            </div>

            <!-- Password -->
            <div class="form-group col-md-12 ">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password"
                    required autocomplete="current-password">
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger text-center" />
            </div>
            {{-- password comfirmation --}}
            <div class="form-group col-md-12 ">
                <input type="password" class="form-control" id="password_confirmation"
                    placeholder="password Confirmation" name="password_confirmation" required
                    autocomplete="new-password">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger text-center" />
            </div>
            <button class="btn btn-success btn-md my-2">
                {{ __('Register Now!') }}
            </button>

            <p class="sign-upp">Already have an account?
                <a class="text-blue" href="{{ route('login') }}">Sign In</a>
            </p>
        </div>
    </form>
</x-guest-layout>
