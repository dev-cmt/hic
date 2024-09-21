<x-guest-layout>
    <div class="row">
        <div class="col-lg-8 mx-auto">
        <div class="p-lg-5 p-4">
            <div>
                <h5 class="text-primary">Welcome Back !</h5>
                <p class="text-muted">Sign in to continue to H & I Council.</p>
            </div>

            <div class="mt-4">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="email" name="email" value="{{old('email')}}" required autofocus autocomplete="username" class="form-control" id="username" placeholder="Enter username">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mb-3">
                        <div class="float-end">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-muted">Forgot password?</a>
                            @endif
                        </div>
                        <label class="form-label" for="password-input">Password</label>
                        <div class="position-relative auth-pass-inputgroup mb-3">
                            <input type="password" name="password" required autocomplete="current-password" class="form-control pe-5 password-input" id="password-input" placeholder="Enter password">
                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="auth-remember-check">
                        <label class="form-check-label" for="auth-remember-check">Remember me</label>
                    </div>

                    <div class="mt-4">
                        <button class="btn btn-dark w-100" type="submit">Sign In</button>
                    </div>

                    <!--<div class="mt-4 text-center">
                        <div class="signin-other-title">
                            <h5 class="fs-13 mb-4 title">Sign In with</h5>
                        </div>

                        <div>
                            <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                            <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                            <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                        </div>
                    </div>-->

                </form>
            </div>

            <div class="mt-5 text-center">
                <p class="mb-0">Don't have an account ? <a href="{{ route('register') }}" class="fw-semibold text-primary text-decoration-underline"> Signup</a> </p>
            </div>
        </div>
        </div>
    </div>
</x-guest-layout>