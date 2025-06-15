@extends('main')
<title>Sign up • Instagram</title>

@section('main-frame')
    <div class="container">
        <div class="row">
            <div class="min-vh-100 d-flex justify-content-center align-items-center">
                <div class="signup-form col-md-4 col-sm-12">
                    <div class="signup-logo text-center">
                        <img src="{{ asset('images/instagram_word.png') }}" class="img-fluid login-icon" alt="Instagram Logo">
                    </div>
                    <span class="signup-subhead text-center text-light">
                        {{ $title }}
                    </span>
                    <div class="facebook text-white text-center">
                        <a href="" class="text-decoration-none fw-bolder  mx-2">Sign up With Facebook</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <hr class="border border-white divider">
                        <div class="text-center text-white">OR</div>
                        <hr class="border border-white divider">
                    </div>
                    <form action="{{ $url }}" method="post">
                        @csrf
                        <x-inputFields type="text" name="mobilenumber" label="Mobilenumber"
                            placeholder="Mobile Number or Email" />
                        <x-inputFields type="text" name="fullname" label="Fullname" placeholder="Full Name" />
                        <x-inputFields type="text" name="username" label="Username" placeholder="Username" />
                        <x-inputFields type="password" name="password" label="Password" placeholder="Password" />

                        <div class="forgot text-center text-light mt-3">
                            <p>People who use our service may have uploaded your contact information to Instagram. <a
                                    href="" class="text-decoration-none fw-bolder">Learn More</a></p>
                            <p>By signing up, you agree to our Terms , <a href=""
                                    class="text-decoration-none fw-bolder">Privacy Policy and Cookies Policy</a> .</p>
                            {{-- <a href="" class="text-decoration-none mx-2">
                            Forgot Password ?</a> --}}
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary fw-bolder mt-3 rounded">Sign up</button>
                        </div>
                    </form>
                    <hr class="border border-white">
                    <div class="d-flex justify-content-center mt-3">
                        <p class="text-white">Already have an account ?</p>
                        <a href="{{ route('login') }}" class="text-decoration-none fw-bolder mx-2">Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
