@extends('layout.app')
@section('content')
<div class="container mt-5">
    <form method="POST" action="{{ route('login') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="row">
        <div class = "col-lg-12 mx-auto">
        <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
            <div class=" px-2 d-lg-flex col-sm-12  d-none h-100 w-50 my-auto pe-0 position-absolute top-0  text-center justify-content-center flex-column">
                <div class="position-relative bg-gradient-primary w-100 h-100 mt-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url({{asset('custom/images/login.png')}}); background-size: contain; background-repeat: no-repeat;" loading="lazy">
                </div>
            </div>
            <div class=" col-lg-6  col-sm-12 d-flex  flex-column ms-2 me-auto ms-lg-auto me-lg-3 ">
                <div class="card card-plain">
                    <div class="card-header text-center bg-transparent">
                        <h4 class="font-weight-bolder">{{__('Sign In')}}</h4>
                        <p class="mb-0">{{__('Enter your email and password to sign in')}}</p>
                    </div>
                    <div class="card-body">
                        <form role="form">
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">{{__('Email')}}</label>
                                <input type="email" class="form-control" name = "email" id = "email">
                            </div>
                            @error('email')
                                <label class="text-danger col-md-12">
                                    <strong>{{ $message }}</strong>
                                </label>
                            @enderror
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name = "password" name = "password">
                            </div>


                            @error('password')
                                <label class="text-danger col-md-12">
                                    <strong>{{ $message }}</strong>
                                </label>
                            @enderror
                            <div class="form-check form-switch d-flex align-items-center">
                                <input class="form-check-input" type="checkbox" id="remember" name = "remember">
                                <label class="form-check-label mb-0 ms-3" for="remember">{{__('Remember me')}}</label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">{{__('login')}}</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                        <p class="mb-4 text-sm mx-auto">
                            {{_("Don't have an account?")}}
                            <a href="{{route('register')}}" class="text-primary text-gradient font-weight-bold">{{__('Register')}}</a>

                        </p>
                        <p>

                        </p>
                    </div>
                </div>
            </div>
</div>
        </div>
    </div>
</form>
</div>
@endsection

