@extends('frontend.layouts.layout')
@section('title', __('frontstaticword.reset_password'))

@section('pageContent')
    <section class="sign-up">
        <div class="container">
            <h1 class="title">{{ __('frontstaticword.reset_your_password') }}</h1>
            <div class="row">
                <div class="col-sm-7 item">
                    <form  method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="row">
                            <div class="col-sm-12 fild">
                                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email"
                                       placeholder="{{ __('frontstaticword.enter_your_email') }}"
                                       autocomplete="off" value="{{ $email ?? old('email') }}" >
                                <label class="floating-label"> {{ __('frontstaticword.Email') }}</label>

                                @if($errors->has('email'))
                                    <span class="error">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                                @endif


                            </div>
                            <div class="col-sm-12 fild"><i class="fas fa-eye-slash icon-pass"></i><i
                                    class="fas fa-eye icon-pass"></i>
                                <input class="form-control pass" type="password" name="password"
                                       placeholder="{{ __('frontstaticword.enter_a_password') }}"
                                       autocomplete="off" autofocus >
                                <label class="floating-label"> {{ __('frontstaticword.Password') }}</label>

                                @if ($errors->has('password'))
                                    <span class="error">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                                @endif
                            </div>

                            <div class="col-sm-12 fild"><i class="fas fa-eye-slash icon-pass"></i><i
                                    class="fas fa-eye icon-pass"></i>
                                <input class="form-control pass" type="password" name="password_confirmation"
                                       placeholder="{{ __('frontstaticword.enter_confirm_password') }}"
                                       autocomplete="off" autofocus >
                                <label class="floating-label"> {{ __('frontstaticword.ConfirmPassword') }}</label>

                                @if ($errors->has('password_confirmation'))
                                    <span class="error">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                                @endif
                            </div>

                            <div class="col-sm-12 fild text-center">
                                <button class="bottom" type="submit"> {{ __('frontstaticword.reset_password') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    @if (session('status'))
                        <h2 class="title sacand">{{ session('status') }}</h2>

                    @endif



                </div>
                <div class="col-sm-4 item offset-sm-1"><img src="/frontAssets/images/img-1.png" alt="Arabia" title="Arabia"></div>
            </div>
        </div>
    </section>
@endsection
