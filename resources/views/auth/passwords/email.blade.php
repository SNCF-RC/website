@extends('layouts.auth')

@section('content')
   @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    <div class="col-lg-6">

        <div class="row flex-center h-100 g-0 px-4 px-sm-0">
            <div class="col col-sm-6 col-lg-7 col-xl-6"><a class="d-flex flex-center text-decoration-none mb-4"
                                                           href="../../../index.html">
                    <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img
                            src="../../../assets/img/icons/logo.png" alt="phoenix" width="58"/>
                    </div>
                </a>
                <div class="text-center">
                    <h4 class="text-body-highlight">{{__('Forgot Your Password?')}}</h4>
                    <p class="text-body-tertiary mb-5">{{__('Enter your email below and we will send you a reset link')}}</p>
                    <form action="{{route('password.email')}}" method="POST">
                        @csrf
                        <div class="mb-3 text-start">
                            <label class="form-label" for="email">{{__('Email Address')}}</label>
                            <div class="form-icon-container">
                                <input class="form-control form-icon-input @error('email') is-invalid @enderror"
                                       id="email" type="text" placeholder="name@example.com" name="email"/><span
                                    class="fas fa-user text-body fs-9 form-icon"></span>
                            </div>
                            @error('email')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <button class="btn btn-primary w-100 mb-3" type="submit">{{__('actions.sign_in')}}</button>
                    </form>
                    <a class="fs-9 fw-bold" href="#!">{{__('Still having problems?')}}</a>
                </div>
            </div>
        </div>
    </div>

@endsection
