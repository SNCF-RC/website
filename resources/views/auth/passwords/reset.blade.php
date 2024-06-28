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
                <div class="text-center mb-6">
                    <h4 class="text-body-highlight">{{__('Reset Password')}}</h4>
                    <form class="mt-5" method="POST" action="{{ route('password.update') }}">
                    @csrf
                        <input type="hidden" name="email" value="{{$email}}">
                                                <input type="hidden" name="token" value="{{ $token }}">

                        <div class="mb-3 text-start">
                            <label class="form-label" for="password">{{__('Password')}}</label>
                            <div class="form-icon-container" data-password="data-password">
                                <input
                                    class=" @error('password') is-invalid @enderror form-control form-icon-input pe-6"
                                    name="password" id="password" type="password" placeholder="{{__('Password')}}"
                                    data-password-input="data-password-input"/><span
                                    class="fas fa-key text-body fs-9 form-icon"></span>
                                @if ($errors->isEmpty())
                                    <button
                                        class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary"
                                        data-password-toggle="data-password-toggle"><span
                                            class="uil uil-eye show"></span><span class="uil uil-eye-slash hide"></span>
                                    </button>
                                @endif
                            </div>
                            @error('password')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="mb-3 text-start">
                            <label class="form-label" for="password">{{__('Confirm Password')}}</label>
                            <div class="form-icon-container" data-password="data-password">
                                <input
                                    class=" @error('password') is-invalid @enderror form-control form-icon-input pe-6"
                                    name="password_confirmation" id="password" type="password" placeholder="{{__('Password')}}"
                                    data-password-input="data-password-input"/><span
                                    class="fas fa-key text-body fs-9 form-icon"></span>
                                @if ($errors->isEmpty())
                                    <button
                                        class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary"
                                        data-password-toggle="data-password-toggle"><span
                                            class="uil uil-eye show"></span><span class="uil uil-eye-slash hide"></span>
                                    </button>
                                @endif
                            </div>
                        </div>

                        <button class="btn btn-primary w-100" type="submit">{{__('Reset Password')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
