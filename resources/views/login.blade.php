@extends('main')
<title>Login • Instagram</title>

@section('main-frame')
    <div class="container">
        <div class="row">
            <div class="min-vh-100 d-flex justify-content-center align-items-center">
                <div class="col-lg-4 col-md-4 col-sm-10 border m-5 p-5 border-light rounded">
                    <div class="text-center">
                        <img src="{{ asset('images/instagram.png') }}" class="img-fluid login-icon" alt="Instagram Logo">
                    </div>
                    {{-- <h4 class="text-center text-light">
                    @if (session()->has('user'))
                        {{ session()->get('user') }}
                    @else
                        {{ 'Guest' }}
                    @endif
                </h4> --}}
                    @if ($errors->any())
                        <div class="text-danger">
                            {{-- @foreach ($errors->first() as $item)
                                {{$item}}
                            @endforeach --}}
                            {{ $errors->first() }}
                        </div>
                    @endif
                    <form action="{{ url('/') }}/login" method="post">
                        @csrf
                        <x-inputFields type="text" name="username" label="Username"
                            placeholder="Username, Email or Phone Number" />
                        <x-inputFields type="password" name="password" label="Password" placeholder="Password" />

                        <div class="forgot text-end mt-1">
                            <a href="" class="text-decoration-none fw-bolder mx-2">
                                Forgot Password ?</a>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary mt-3 rounded fw-bolder">Log in</button>
                        </div>
                    </form>
                    <div class="d-flex justify-content-center align-items-center my-3">
                        <hr class="border border-white divider mx-2">
                        <div class="text-center text-white">OR</div>
                        <hr class="border border-white divider mx-2">
                    </div>
                    <div class="facebook text-white text-center">
                        <a href="" class="text-decoration-none fw-bolder mx-2">Login With Facebook</a>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <p class="text-white ">Don't have account ?</p>
                        <a href="{{ route('signup') }}" class="text-decoration-none fw-bolder mx-2">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
