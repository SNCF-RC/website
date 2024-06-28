@extends('layouts.auth')

@section('content')


        <div class="col-lg-6">
          <div class="row flex-center h-100 g-0 px-4 px-sm-0">
            <div class="col col-sm-6 col-lg-7 col-xl-6"><a class="d-flex flex-center text-decoration-none mb-4" href="../../../index.html">
                <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img src="../../../assets/img/icons/logo.png" alt="phoenix" width="58" />
                </div>
              </a>
              <div class="text-center mb-7">
                <h3 class="text-body-highlight">{{__('Log In')}}</h3>
              </div>
             <!-- <button class="btn btn-phoenix-secondary w-100 mb-3"><span class="fab fa-google text-danger me-2 fs-9"></span>Sign in with google</button>
              <button class="btn btn-phoenix-secondary w-100"><span class="fab fa-facebook text-primary me-2 fs-9"></span>Sign in with facebook</button>
              <div class="position-relative">
                <hr class="bg-body-secondary mt-5 mb-4" />
                <div class="divider-content-center">or use email</div>
              </div>!-->
                       <form method="POST" action="{{ route('login') }}">
                        @csrf
              <div class="mb-3 text-start">
                <label class="form-label" for="email">{{__('Email Address')}}</label>
                <div class="form-icon-container">
                  <input class="form-control form-icon-input @error('email') is-invalid @enderror" id="email" type="text" placeholder="name@example.com" name="email" /><span class="fas fa-user text-body fs-9 form-icon"></span>
                </div>
                   @error('email')
                    <strong class="text-danger">{{ $message }}</strong>
                  @enderror
              </div>
              <div class="mb-3 text-start">
                <label class="form-label" for="password">{{__('Password')}}</label>
                <div class="form-icon-container" data-password="data-password">
                  <input class=" @error('password') is-invalid @enderror form-control form-icon-input pe-6" name="password" id="password" type="password" placeholder="{{__('Password')}}" data-password-input="data-password-input" /><span class="fas fa-key text-body fs-9 form-icon"></span>
                    @if ($errors->isEmpty())
                    <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle"><span class="uil uil-eye show"></span><span class="uil uil-eye-slash hide"></span></button>
                    @endif
                </div>
                   @error('password')
                    <strong class="text-danger">{{ $message }}</strong>
                  @enderror
              </div>
              <div class="row flex-between-center mb-7">
                <div class="col-auto">
                  <div class="form-check mb-0">
                    <input class="form-check-input" id="basic-checkbox" type="checkbox" checked="checked" name="remember" />
                    <label class="form-check-label mb-0" for="basic-checkbox">{{__('Remember Me')}}</label>
                  </div>
                </div>
                <div class="col-auto"><a class="fs-9 fw-semibold" href="{{route('password.request')}}">{{__('Forgot Your Password?')}}</a></div>
              </div>
              <button class="btn btn-primary w-100 mb-3" type="submit">{{__('actions.sign_in')}}</button>
              <div class="text-center"><a class="fs-9 fw-bold" href="../../../pages/authentication/split/sign-up.html">{{__('Create Account')}}</a></div>
                       </form>
            </div>
          </div>
        </div>

    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
@endsection
