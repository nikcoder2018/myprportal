@extends('layouts.auth')

@section('content')
<section class="row flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                <div class="card-header border-0">
                    <div class="card-title text-center">
                        <h2 class="title">SevenBlue</h2>
                    </div>
                </div>
                <div class="card-content">
                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>{{ __('Account Details') }}</span></p>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('login') }}" method="POST">
                            @csrf
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="user-email" placeholder="Your Email Address" value="{{ old('email') }}" required>
                                <div class="form-control-position">
                                    <i class="feather icon-user"></i>
                                </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="user-password" placeholder="Enter Password" required>
                                <div class="form-control-position">
                                    <i class="fa fa-key"></i>
                                </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                            <div class="form-group row">
                                <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                                    <fieldset>
                                        <input type="checkbox" id="remember-me" class="chk-remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember-me"> {{ __('Remember Me') }}</label>
                                    </fieldset>
                                </div>
                                <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right">
                                    @if (Route::has('password.request'))
                                        <a class="card-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-primary btn-block"><i class="feather icon-unlock"></i> {{ __('Login') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
